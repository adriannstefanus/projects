<?php

namespace App\Http\Controllers;

use App\Models\spk;
use App\Models\trpenawaran;
use App\Models\trsuratjalan;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class spkController extends Controller
{
    public function showPage()
    {
        $spk = spk::sortable()->where('statusspk', '!=', 'selesai')->orderBy('tglspk', 'desc')->paginate(10);
        $spkDone = spk::sortable()->where('statusspk', 'selesai')->orderBy('tglspk', 'desc')->get();
        return view('transaksisuratPerintahKerja', compact('spk', 'spkDone'));
    }
    public function setPic(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'picName' => ['required', 'string', 'max:255', 'alpha'],
            'tglspk' => ['required'],
        ]);
        if($validated->fails()){
            return redirect('/spk')
            ->withErrors($validated)
            ->withInput();
        }
        $spk = spk::find($request->input('deleteid'));
        $nospk = $spk->noSPK;
        $spk->pic = $request->input('picName');
        $spk->keterangan = $request->input('keterangan');
        if($request->input('tglspk')){
            $spk->tglspk = $request->input('tglspk');
        }
        $spk->userupd = Auth::id();
        $spk->save();
        return Redirect::action([spkController::class, 'showPage'])->with('success_message', 'Success add Pic Name for '.$nospk);
    }
    public function setSpk(Request $request)
    {
        $spk = spk::find($request->input('setid'));
        $noso = $spk->idTrPenawaran;
        $spk->statusspk = 'Selesai';
        $spk->userupd = Auth::id();
        $spk->save();

        //cek apakah semua spk dalam satu SO sudah approve
        $spk = spk::where('idtrpenawaran', $noso)->get();
        $nomorso = trpenawaran::find($noso);
        $nomorso = $nomorso->NoSO;

        foreach($spk as $s){
            if($s->statusSPK == 'pending'){
                return Redirect::action([spkController::class, 'showPage'])->with('success_message', 'SPK Sent, still waiting for another SPK from '.$nomorso);
            }
        }

        //jika sudah oke semua maka jadi surat jalan

        $temp = DB::table('trsuratjalans')->select(DB::raw('max(right(NoSuratjalan, 3)) as maxcounter'))->get();
        $obj = $temp[0];
        $maxcounter = $obj->maxcounter;
        $maxcounter++;

        $suratjalan = new trsuratjalan;
        $suratjalan->idtrpenawaran = $noso;
        $suratjalan->nosuratjalan = 'SJ/'. date('y') . str_pad($maxcounter, 7, '0', STR_PAD_LEFT);
        $suratjalan->save();
        $suratjalan->tglsuratjalan = date("y-m-d");
        $suratjalan->status = 'Pending';
        $suratjalan->userin = Auth::id();
        $suratjalan->save();
        return Redirect::action([trsuratjalanController::class, 'showPage'])->with('success_message', 'All SPK for '.$nomorso.' is sent. Create Surat Jalan '.$suratjalan->nosuratjalan);
    }
    public function print($id)
    {
        $temp = spk::find($id);
        $tempPic = $temp->pic;
        $kerja = spk::where('pic', $tempPic)->get();

        return view('printPerintahKerja', compact('kerja'));
    }
    public function search(Request $request){
        $column_name = $request->input('column_name');
        if($column_name == 'pelanggan'){
            $spk = spk::sortable()->whereHas('trpenawaran', function(Builder $query) use($request){
                $query->whereHas('customer', function(Builder $query) use($request){
                    $query->where('Nama', 'LIKE','%'.$request->input('search').'%');
                });
            })->where('statusspk', '!=', 'selesai')->paginate(10);
        }else if($column_name == 'noso'){
            $spk = spk::sortable()->whereHas('trpenawaran', function(Builder $query) use($request){
                $query->where('NoSO', 'LIKE', '%'.$request->input('search').'%');
            })->where('statusspk', '!=', 'selesai')->paginate(10);
        }else if($column_name == 'tebal' || $column_name == 'qty'){
            $spk = spk::sortable()->whereHas('barang', function(Builder $query) use($request){
                $query->where($request->input('column_name'), 'LIKE', '%'.$request->input('search').'%');
            })->where('statusspk', '!=', 'selesai')->paginate(10);
        }else if($column_name == 'itembarang'){
            $spk = spk::sortable()->whereHas('barang', function(Builder $query) use($request){
                $query->whereHas('producttype', function(Builder $query) use($request){
                    $query->where('tipe', 'LIKE', '%'.$request->input('search').'%');
                });
            })->where('statusspk', '!=', 'selesai')->paginate(10);
        }else{
            $spk = spk::sortable()->where($request->input('column_name'), 'LIKE','%'.$request->input('search').'%')->where('statusspk', '!=', 'selesai')->paginate(10);
        }

        $spkDone = spk::sortable()->where('statusspk', 'selesai')->orderBy('tglspk', 'desc')->get();
        return view('transaksisuratPerintahKerja', compact('spk', 'spkDone'));
    }
}
