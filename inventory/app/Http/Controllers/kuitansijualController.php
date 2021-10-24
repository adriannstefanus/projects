<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\fakturjual;
use App\Models\kuitansijual;
use App\Models\trpenawaran;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class kuitansijualController extends Controller
{
    public function showPage(){
        $kuitansi = kuitansijual::where('stsrc', 'A')->paginate(10);
        $customer = Customer::where('stsrc', 'A')->orderBy('Nama')->get();
        return view('transaksiKuitansi', compact('kuitansi', 'customer'));
    }

    public function getFaktur(Request $request){
        $result = fakturjual::whereHas('trpenawaran', function(Builder $query) use($request){
            $query->whereHas('customer', function(Builder $query) use($request){
                $query->where('id', $request->id);
            });
        })->where('idKuitansi', NULL)->get();
        return $result;
    }

    public function getTotal(Request $request){
        $total = 0;
        foreach($request->id as $x){
            $result = trpenawaran::whereHas('fakturjual', function(Builder $query) use($x){
                $query->where('id', $x);
            })->first();
            $total = $total + $result->total;
        }
        return $total;
    }

    public function insert(Request $request){
        $temp = DB::table('kuitansijuals')->select(DB::raw('max(right(NoKuitansi, 3)) as maxcounter'))->get();
        $obj = $temp[0];
        $maxcounter = $obj->maxcounter;
        $maxcounter++;

        $kuitansi = new kuitansijual;
        $kuitansi->nokuitansi = 'KW/'. date('y') . str_pad($maxcounter, 7, '0', STR_PAD_LEFT);
        $kuitansinomor = $kuitansi->nokuitansi;
        $kuitansi->tglkuitansi = $request->input('tglKuitansiInsert');
        $kuitansi->idpelanggan = $request->input('insertpelanggan');
        $kuitansi->total = $request->input('totalInsert');
        $tot = $kuitansi->total;
        $kuitansi->stsrc = 'A';
        $kuitansi->userin = Auth::id();
        $kuitansi->save();

        $nofakt = $request->input('insertfaktur');
        foreach($nofakt as $f){
            $fakturjual = fakturjual::find($f);
            $fakturjual->idkuitansi = $kuitansi->id;
            $fakturjual->save();
        }
        return Redirect::action([kuitansijualController::class, 'showPage'])->with('success_message', 'Success create new Kuitansi No: '.$kuitansinomor.' with total of : Rp.'.$tot);
    }

    public function edit(Request $request){
        // dd($request->all());

        $kuitansi = kuitansijual::find($request->input('dataid'));

        if($request->input('editpelanggan') == $kuitansi->idpelanggan){
            $kuitansi->tglkuitansi = $request->input('tglKuitansiEdit');
            $kuitansi->idpelanggan = $request->input('editpelanggan');
            if($request->input('totalEdit')){
                $kuitansi->total = $kuitansi->total + $request->input('totalEdit');
            }
            $kuitansi->userupd = Auth::id();
            $kuitansi->save();

            if($request->input('editfaktur')){
                $nofakt = $request->input('editfaktur');
                foreach($nofakt as $f){
                    $fakturjual = fakturjual::find($f);
                    $fakturjual->idkuitansi = $kuitansi->id;
                    $fakturjual->save();
                }
            }
        }else{
            $kuitansi->tglkuitansi = $request->input('tglKuitansiEdit');
            $kuitansi->idpelanggan = $request->input('editpelanggan');
            $kuitansi->total = $request->input('totalEdit');
            $kuitansi->save();

            $oldfaktur = fakturjual::where('idKuitansi', $kuitansi->id)->get();
            foreach($oldfaktur as $o){
                $o->idkuitansi = NULL;
                $o->save();
            }

            $nofakt = $request->input('editfaktur');
            foreach($nofakt as $f){
                $fakturjual = fakturjual::find($f);
                $fakturjual->idkuitansi = $kuitansi->id;
                $fakturjual->save();
            }
        }
        return Redirect::action([kuitansijualController::class, 'showPage'])->with('success_message', 'Success Edit Kuitansi No: '.$kuitansi->NoKuitansi);
    }
    public function print($id)
    {
        $temp = kuitansijual::find($id);
        $tempId = $temp->id;
        $kuitansi = kuitansijual::where('id', $tempId)->first();
        return view('printKuitansi', compact('kuitansi'));
    }

    public function format(Request $request){
        $nilai = $request->nilai;
        // return response()->json($request);

        $result = $this->penyebut($nilai);
        return response()->json($result);
    }

    public function penyebut($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " ". $huruf[$nilai];
        } else if ($nilai <20) {
            $temp = $this->penyebut($nilai - 10). " Belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai/10)." Puluh". $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " Seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai/100) . " Ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " Seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai/1000) . " Ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai/1000000) . " Juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai/1000000000) . " Milyar" . $this->penyebut(fmod($nilai,1000000000));
        }
        return $temp;
    }
}
