<?php

namespace App\Http\Controllers;

use App\Models\barangbeli;
use App\Models\fakturbeli;
use App\Models\Product;
use App\Models\producttype;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class fakturbeliController extends Controller
{
    public function showPage(){
        $fakturbeli = fakturbeli::paginate(10);
        return view('transaksifakturPembelian', compact('fakturbeli'));
    }

    public function insertForm(Request $request){
        $request->session()->forget('item');
        $supplier = Supplier::whereHas('products', function(Builder $query){
            $query->where('stsrc', 'A');
        })->where('stsrc', 'A')->get();
        return view('insertfakturPembelian', compact('supplier'));
    }

    //get supplier item
    public function getItem(Request $request){
        $idSupplier = $request->id;
        $item = Product::where('idSupplier', $idSupplier)->where('stsrc', 'A')->get();
        return response()->json($item);
    }

    public function insertTemp(Request $request){
        // $temp = $request->berat;
        // if($request->digit){
        //     $temp = number_format($temp, $request->digit);
        // }
        // $request['berat'] = $temp;
        $barang = $request->all();
        $request->session()->push('item', $barang);
        $index = count($request->session()->get('item'));
        return response()->json($request->session()->get('item')[$index-1]);
    }

    public function submit(Request $request){
        //new item Faktur Beli
        $fakturbeli = new fakturbeli;
        $fakturbeli->idsupplier = $request->input('insertsupplier');
        $fakturbeli->nofaktur = $request->input('insertnoFaktur');
        $fakturbeli->tglfaktur = $request->input('inserttglFaktur');
        $fakturbeli->tgljatuhtempofaktur = $request->input('insertjatuhtempoFaktur');
        $fakturbeli->nopo = $request->input('insertnoPO');
        $fakturbeli->tglpo = $request->input('inserttglPO');
        $fakturbeli->tgljatuhtempopo = $request->input('insertjatuhtempoPO');
        $fakturbeli->keterangan = $request->input('keterangan');

        $fakturbeli->subtotal = str_replace('.', '',$request->input('subTotal'));
        $fakturbeli->ppn = $request->input('ppn');
        $fakturbeli->total = str_replace('.', '',$request->input('total'));
        $fakturbeli->userin = Auth::id();
        $fakturbeli->save();

        //new each item barang
        $item = $request->session()->get('item');
        foreach($item as $i){
            $barang = new barangbeli;
            $barang->idfaktur = $fakturbeli->id;
            $barang->beratjenis = $i['beratJenis'];
            $barang->diameter = $i['diameter'];
            $barang->panjang = $i['panjang'];
            $barang->lebar = $i['lebar'];
            $barang->bentuk = $i['bentuk'];
            // $barang->ongkospotong = $i['ongkosPotong'];
            // $cutOnly = $i['hanyaPotong'];
            // if($cutOnly == 1){
            //     $barang->hanyapotong = 'Y';
            // }else{
            //     $barang->hanyapotong = 'N';
            // }
            $barang->berat = $i['berat'];
            $barang->hargakg = $i['harga'];
            $barang->qty = $i['qty'];
            $barang->hargasatuan = $i['hargapcs'];
            $barang->diskon = $i['diskon'];
            $barang->tebal = $i['tebal'];
            $barang->totprice = $i['jumlah'];

            $ptype = producttype::where('tipe', $i['tipeBarang'])->first('id');
            $barang->idproducttype = $ptype->id;
            $barang->isretur = 'n';
            $barang->save();
        }
        return Redirect::action([fakturbeliController::class, 'showPage'])->with('success_message', 'Success Create new Faktur Pembelian');
    }

    public function viewForm(Request $request, $id){
        $request->session()->forget('item');
        $fakturbeli = fakturbeli::find($id);
        $producttype = producttype::orderBy('tipe')->get();
        $barang = barangbeli::where('idfaktur', $id)->get();
        foreach($barang as $b){
            $request->session()->push('item', $b);
        }
        return view('viewfakturPembelian', compact('fakturbeli', 'producttype'));
    }

    public function editTemp(Request $request){
        $barang = $request->all();
        if($request->session()->get('item')){
            $array = $request->session()->get('item');
            $array[count($array)] = $barang;
            $request->session()->put('item', $array);
        }else{
            $array[0] = $barang;
            $request->session()->put('item', $array);
        }
        $index = count($request->session()->get('item'));
        return response()->json($request->session()->get('item')[$index-1]);
    }

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
        $temp[$sessionId]['berat'] = floatval($request->beratbaru);
        //edit ukuran n berat
        $calc = ($temp[$sessionId]['berat']/$temp[$sessionId]['qty'])*$temp[$sessionId]['hargaKg'];
        $temp[$sessionId]['hargaSatuan'] = round($calc);
        $calc = (($temp[$sessionId]['qty']*$temp[$sessionId]['hargaSatuan']) - (($temp[$sessionId]['diskon']/100)*($temp[$sessionId]['qty']*$temp[$sessionId]['hargaSatuan'])));
        $temp[$sessionId]['totprice'] = round($calc);

        $request->session()->forget('item');
        foreach($temp as $t){
            $request->session()->push('item', $t);
        }
        $temp = $request->session()->get('item');
        return response()->json($temp);
    }

    public function editFinalData(Request $request){
        // dd($request->all());
        // dd($request->session()->get('item'));
        $nomorfaktur = $request->input('insertnoFaktur');
        $fakturbeli = fakturbeli::find($request->input('idFaktur'));
        $fakturbeli->subtotal = str_replace('.','',$request->input('subTotal'));
        $fakturbeli->ppn = $request->input('ppn');
        $fakturbeli->total = str_replace('.','',$request->input('total'));
        $fakturbeli->keterangan = $request->input('keterangan');
        $fakturbeli->userupd = Auth::id();
        $fakturbeli->save();
        $baranglama = barangbeli::where('idFaktur', $request->input('idFaktur'))->delete();

        $item = $request->session()->get('item');
        foreach($item as $i){
            $barang = new barangbeli;
            $barang->idFaktur = $request->input('idFaktur');
            $barang->beratjenis = $i['beratJenis'];
            $barang->diameter = $i['diameter'];
            $barang->panjang = $i['panjang'];
            $barang->lebar = $i['lebar'];
            $barang->bentuk = $i['bentuk'];
            $barang->berat = $i['berat'];
            $barang->hargakg = $i['hargaKg'];
            $barang->qty = $i['qty'];
            $barang->hargasatuan = $i['hargaSatuan'];
            $barang->diskon = $i['diskon'];
            $barang->tebal = $i['tebal'];
            $barang->totprice = str_replace('.','',$i['totprice']);

            $barang->idproducttype = $i['idProductType'];
            $barang->save();
        }
        return Redirect::action([fakturbeliController::class, 'showPage'])->with('success_message', 'Success Edit faktur Beli : '.$nomorfaktur);
    }

    public function print($id){
        $faktur = fakturbeli::find($id);
        return view('printFakturBeli', compact('faktur'));
    }

    public function getSession(Request $request){
        $temp = $request->session()->get('item');
        return response()->json($temp);
    }
}
