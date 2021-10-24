<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Customer;
use App\Models\producttype;
use App\Models\trpenawaran;
use App\Models\User;
use App\Notifications\PushMessageSOApproval;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use stdClass;

class trpenawaranController extends Controller
{
    public function showPage(){
        $penawaran = trpenawaran::sortable()->where('deal', 'N')
        ->paginate(10);
        $penawaran_selesai = trpenawaran::sortable()->where('deal', 'Y')
        ->where('trpenawarans.created_at','>=',Carbon::now()->subdays(30))->paginate(10);
        return view('transaksisuratPenawaran', compact('penawaran', 'penawaran_selesai'));
    }
    public function print($id){
        $temp = trpenawaran::find($id);
        $tempno = $temp->NoSO;
        $penawaran = trpenawaran::where('noso', $tempno)->first();
        return view('printPenawaran',compact('penawaran'));
    }
    public function insertForm(Request $request){
        $request->session()->forget('item');
        $customer = Customer::where('stsrc', 'A')->orderBy('Nama')->get();
        $producttype = producttype::orderBy('tipe')->get();
        return view('insertsuratpenawaranJual', compact('customer', 'producttype'));
    }
    public function editForm(Request $request, $id){
        $request->session()->forget('item');
        $penawaran = trpenawaran::find($id);;
        $producttype = producttype::orderBy('tipe')->get();
        $barang = barang::where('NoSO', $penawaran->NoSO)->get();
        foreach($barang as $b){
            $request->session()->push('item', $b);
        }
        return view('editsuratpenawaranJual', compact('penawaran', 'producttype'));
    }
    //insert to table when insert
    public function insertTemp(Request $request){
        // $temp = $request->berat;
        // if($request->digit){
        //     $temp = number_format($temp, $request->digit);
        // }
        // $request['berat'] = $temp;
        $barang = $request->all();
        $request->session()->push('item', $barang);
        return response()->json($request);
    }
    //insert SO to DB
    public function insertFinalData(Request $request){
        //getMax Number
        $trpenawaran = DB::table('trpenawarans')->select(DB::raw('max(right(NoSo, 2)) as maxcounter'))->get();
        $obj = $trpenawaran[0];
        $maxcounter = $obj->maxcounter;
        $maxcounter++;
        //new item SO
        $trpenawaran = new trpenawaran;
        $trpenawaran->tgljatuhtempo = $request->input('insertjatuhtempoSO');
        $trpenawaran->tglso = $request->input('inserttglOrder');
        $trpenawaran->tgljatuhtemposo = $request->input('insertjatuhtempoSO');
        $nomorso = 'SO/'. date('y') . str_pad($maxcounter, 7, '0', STR_PAD_LEFT);
        $trpenawaran->noso = $nomorso;
        $trpenawaran->idpelanggan = $request->input('insertpelanggan');
        $trpenawaran->subtotal = str_replace('.','',$request->input('subTotal'));
        $trpenawaran->ppn = $request->input('ppn');
        $trpenawaran->total = str_replace('.','',$request->input('total'));
        $trpenawaran->keterangan = $request->input('keterangan');
        $trpenawaran->deal = 'N';
        $trpenawaran->userin = Auth::id();
        $trpenawaran->save();

        //new each item barang
        $item = $request->session()->get('item');
        foreach($item as $i){
            $barang = new barang;
            $barang->noso = $nomorso;
            $barang->beratjenis = $i['beratJenis'];
            $barang->diameter = $i['diameter'];
            $barang->panjang = $i['panjang'];
            $barang->lebar = $i['lebar'];
            $barang->bentuk = $i['bentuk'];
            $barang->ongkospotong = $i['ongkosPotong'];
            $cutOnly = $i['hanyaPotong'];
            if($cutOnly == 1){
                $barang->hanyapotong = 'Y';
            }else{
                $barang->hanyapotong = 'N';
            }
            $barang->berat = $i['berat'];
            $barang->hargakg = $i['harga'];
            $barang->qty = $i['qty'];
            $barang->hargasatuan = $i['hargapcs'];
            $barang->diskon = $i['diskon'];
            $barang->tebal = $i['tebal'];
            $barang->totprice = str_replace('.','',$i['jumlah']);

            $ptype = producttype::where('tipe', $i['tipeBarang'])->first('id');
            $barang->idproducttype = $ptype->id;
            $barang->isretur = 'n';
            $barang->save();
        }
        return Redirect::action([trpenawaranController::class, 'showPage'])->with('success_message', 'Success Create New SO with number : '.$nomorso);
    }
    //get edit form
    public function getEdit(Request $request){
        $temp = $request->session()->get('item');
        $id = $request->id;
        $temp = $temp[$id];
        return response()->json($temp);
    }
    public function submitEdit(Request $request){
        $sessionId = $request->id;
        $temp = $request->session()->get('item');
        //edit qty
        $temp[$sessionId]['qty'] = $request->qty;
        //edit diskon
        $temp[$sessionId]['diskon'] = $request->diskon;
        //edit ukuran n berat
        if($temp[$sessionId]['bentuk'] == 'RoundPlate'){
            $temp[$sessionId]['diameter'] = $request->var1;
            $temp[$sessionId]['tebal'] = $request->var2;
            $temp[$sessionId]['berat'] = ($temp[$sessionId]['qty']*$temp[$sessionId]['beratJenis']*$temp[$sessionId]['diameter']*$temp[$sessionId]['diameter']*$temp[$sessionId]['tebal'])/1000000;
        }else if($temp[$sessionId]['bentuk'] == 'RoundBar'){
            $temp[$sessionId]['diameter'] = $request->var1;
            $temp[$sessionId]['panjang'] = $request->var2;
            $temp[$sessionId]['berat'] = ($temp[$sessionId]['qty']*$temp[$sessionId]['beratJenis']*$temp[$sessionId]['diameter']*$temp[$sessionId]['diameter']*$temp[$sessionId]['panjang'])/1000000;
        }else{
            $temp[$sessionId]['panjang'] = $request->var1;
            $temp[$sessionId]['lebar'] = $request->var2;
            $temp[$sessionId]['tebal'] = $request->var3;
            $temp[$sessionId]['berat'] = ($temp[$sessionId]['qty']*$temp[$sessionId]['beratJenis']*$temp[$sessionId]['panjang']*$temp[$sessionId]['lebar']*$temp[$sessionId]['tebal'])/1000000;
        }
        //digit berat
        if($request->digit){
            $temp[$sessionId]['berat'] = number_format($temp[$sessionId]['berat'], $request->digit);
        }else{
            $temp[$sessionId]['berat'] = number_format($temp[$sessionId]['berat'], 3);
        }
        $calc = ($temp[$sessionId]['berat']/$temp[$sessionId]['qty'])*$temp[$sessionId]['hargaKg'];
        $temp[$sessionId]['hargaSatuan'] = round($calc);
        $calc = (($temp[$sessionId]['qty']*$temp[$sessionId]['hargaSatuan']) - (($temp[$sessionId]['diskon']/100)*($temp[$sessionId]['qty']*$temp[$sessionId]['hargaSatuan']))) + $temp[$sessionId]['ongkosPotong'];
        $temp[$sessionId]['totprice'] = round($calc);

        //check if hanyaPotong
        if($temp[$sessionId]['hanyaPotong'] == 'Y'){
            $temp[$sessionId]['berat'] = 0;
            $temp[$sessionId]['hargaSatuan'] = $temp[$sessionId]['ongkosPotong'];
            $calc = (($temp[$sessionId]['qty']*$temp[$sessionId]['hargaSatuan']) - (($temp[$sessionId]['diskon']/100)*($temp[$sessionId]['qty']*$temp[$sessionId]['hargaSatuan'])));
            $temp[$sessionId]['totprice'] = round($calc);
        }

        // $request->session()->forget('item');

        // foreach($temp as $t){
        //     $request->session()->push('item', $t);
        // }
        Session::forget('item');
        Session::put('item', $temp);
        $temp = $request->session()->get('item');
        return response()->json($temp[$sessionId]);
    }
    //delete from table
    public function deleteTemp(Request $request){
        $index = $request->id;
        foreach($index as $i){
            Session::forget('item.'.$i);
        }
        $temp = $request->session()->get('item');
        return response()->json($temp);
    }
    //submit edit
    public function editFinalData(Request $request){
        // dd($request->session()->get('item'));
        $so = trpenawaran::where('NoSO', $request->input('fieldnoso'))->first();
        $nomorso = $so->NoSO;
        $so->subtotal = str_replace('.','',$request->input('subTotal'));
        $so->ppn = $request->input('ppn');
        $so->total = str_replace('.','',$request->input('total'));
        $so->keterangan = $request->input('keterangan');
        $so->userupd = Auth::id();
        $so->save();
        $baranglama = barang::where('NoSO', $request->input('fieldnoso'))->delete();

        $item = $request->session()->get('item');
        foreach($item as $i){
            $barang = new barang;
            $barang->noso = $request->input(('fieldnoso'));
            $barang->beratjenis = $i['beratJenis'];
            $barang->diameter = $i['diameter'];
            $barang->panjang = $i['panjang'];
            $barang->lebar = $i['lebar'];
            $barang->bentuk = $i['bentuk'];
            $barang->ongkospotong = $i['ongkosPotong'];
            // $barang->hanyapotong = $i->beratJenis;
            $barang->berat = $i['berat'];
            $barang->hargakg = $i['hargaKg'];
            $barang->qty = $i['qty'];
            $barang->hargasatuan = $i['hargaSatuan'];
            $barang->diskon = $i['diskon'];
            $barang->tebal = $i['tebal'];
            $cutOnly = $i['hanyaPotong'];
            if($cutOnly == 1){
                $barang->hanyapotong = 'Y';
            }else{
                $barang->hanyapotong = 'N';
            }
            $barang->totprice = str_replace('.','',$i['totprice']);

            $barang->idproducttype = $i['idProductType'];
            $barang->save();
        }
        return Redirect::action([trpenawaranController::class, 'showPage'])->with('success_message', 'Success Edit SO number : '.$nomorso);
    }
    public function deal(Request $request){
        $nomorso = $request->input('del-name');
        $trpenawaran = trpenawaran::where('noso', $request->input('del-name'))->get();
        foreach($trpenawaran as $t){
            $t->deal = 'P';
            $t->save();
        }
        //send notif
        $sendTo = User::where('role', 'owner')->orWhere('id', Auth::id())->get();
        Notification::send($sendTo, new PushMessageSOApproval($nomorso, Auth::user()->name));
        return Redirect::action([trpenawaranController::class, 'showPage'])->with('success_message', 'SO Submitted, waiting to be approved by Owner');
    }
    //default value for search page
    public function getSearch(Request $request){
        $noorder = trpenawaran::all('id', 'NoSO');
        $customer = Customer::has('trpenawarans')->orderBy('Nama')->get();
        $salesman = User::has('trpenawarans')->orderBy('name')->get();
        $result = new stdClass();
        $result->noorder = $noorder;
        $result->customer = $customer;
        $result->salesman = $salesman;
        return response()->json($result);
    }
    //search all penawaran
    public function doSearch(Request $request){
        // dd($request->all());
        $searchvar = new stdClass();
        //variable assignment
        if(!$request->search_noorder){
            $searchvar->noorder='%%';
        }else{
            $searchvar->noorder=$request->search_noorder;
        }
        if(!$request->search_tglorder){
            $searchvar->tglorder='%%';
        }else{
            $searchvar->tglorder='%'.$request->search_tglorder.'%';
        }
        if(!$request->search_cust){
            $searchvar->customer='%%';
        }else{
            $searchvar->customer=$request->search_cust;
        }
        if(!$request->search_nopo){
            $searchvar->nopo='%%';
        }else{
            $searchvar->nopo=$request->search_nopo;
        }
        if(!$request->search_salesman){
            $searchvar->sales='%%';
        }else{
            $searchvar->sales=$request->search_salesman;
        }
        //query
        $penawaran_all = barang::whereHas('trpenawaran', function(Builder $query) use ($searchvar){
            $query->whereHas('customer', function(Builder $query) use ($searchvar){
                $query->where('id', 'LIKE', $searchvar->customer);
            })->where('id', 'LIKE', $searchvar->noorder)->where('TglSO', 'LIKE', $searchvar->tglorder)
            ->where('userin', 'LIKE', $searchvar->sales);
        })->get();

        if($request->search_nopo){
            $penawaran_all = barang::whereHas('trpenawaran', function(Builder $query) use ($searchvar){
                $query->whereHas('customer', function(Builder $query) use ($searchvar){
                    $query->where('id', 'LIKE', $searchvar->customer);
                })->where('id', 'LIKE', $searchvar->noorder)->where('TglSO', 'LIKE', $searchvar->tglorder)
                ->where('userin', 'LIKE', $searchvar->sales)->whereHas('fakturjual', function(Builder $query) use ($searchvar){
                    $query->where('NoPO', 'LIKE', $searchvar->nopo);
                });
            })->get();
        }

        //default penawaran page 1 and 2
        $penawaran = trpenawaran::sortable()->where('deal', 'N')
        ->paginate(10);
        $penawaran_selesai = trpenawaran::sortable()->where('deal', 'Y')
        ->where('trpenawarans.created_at','>=',Carbon::now()->subdays(30))->paginate(10);
        return view('transaksisuratPenawaran', compact('penawaran', 'penawaran_selesai', 'penawaran_all'));
    }

    public function search(Request $request){
        $column_name = $request->input('column_name');
        if(str_contains($column_name, 'Done')){
            $column_name = str_replace('Done', '', $column_name);
            $penawaran = trpenawaran::sortable()->where('deal', 'N')->paginate(10);
            if($column_name == 'Nama'){
                $penawaran_selesai = trpenawaran::sortable()->whereHas('customer', function(Builder $query) use($request){
                    $query->where('Nama', 'LIKE', '%'.$request->input('search').'%');
                })->where('deal', 'Y')->where('trpenawarans.created_at','>=',Carbon::now()->subdays(30))->paginate(10);
            }else{
                $penawaran_selesai = trpenawaran::sortable()->where($request->input('column_name'), 'LIKE','%'.$request->input('search').'%')
                ->where('deal', 'Y')->where('trpenawarans.created_at','>=',Carbon::now()->subdays(30))->paginate(10);
            }
        }else{
            if($column_name == 'Nama'){
                $penawaran = trpenawaran::sortable()->whereHas('customer', function(Builder $query) use($request){
                    $query->where('Nama', 'LIKE', '%'.$request->input('search').'%');
                })->where('deal', 'N')->paginate(10);
            }else{
                $penawaran = trpenawaran::sortable()->where($request->input('column_name'), 'LIKE','%'.$request->input('search').'%')
                ->where('deal', 'N')->paginate(10);
            }
            $penawaran_selesai = trpenawaran::sortable()->where('deal', 'Y')
            ->where('trpenawarans.created_at','>=',Carbon::now()->subdays(30))->paginate(10);
        }
        return view('transaksisuratPenawaran', compact('penawaran', 'penawaran_selesai'));
    }
}
