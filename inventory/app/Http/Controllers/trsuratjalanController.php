<?php

namespace App\Http\Controllers;

use App\Models\fakturjual;
use App\Models\trpenawaran;
use App\Models\trsuratjalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class trsuratjalanController extends Controller
{
    public function showPage(){
        $suratjalan = trsuratjalan::where('status', 'Pending')->orderBy('created_at', 'desc')->paginate(10);
        $suratjalandone = trsuratjalan::where('status', 'Done')->orderBy('created_at', 'desc')->get();
        return view('transaksisuratJalan', compact('suratjalan', 'suratjalandone'));
    }

    public function submit(Request $request){
        $suratjalan = trsuratjalan::where('nosuratjalan', $request->input('nosuratJalan'))->first();
        $validated = Validator::make($request->all(), [
            'noPO' => ['unique:trsuratjalans,NoPO,'.$suratjalan->id],
        ]);
        if($validated->fails()){
            return redirect('/suratJalan')
            ->withErrors($validated)
            ->withInput();
        }
        $suratjalan->nopo = $request->input('noPO');
        if($request->input('statuskirim') == 'sudahkirim'){
            $suratjalan->status = 'Done';
            $fakturjual = new fakturjual;
            $fakturjual->nofaktur = $request->input('nofakturJual');
            $fakturjual->nopo = $request->input('noPO');
            // $fakturjual->keterangan =
            $fakturjual->stsrc = 'A';
            $fakturjual->idtrpenawaran = $suratjalan->idTrPenawaran;
            $fakturjual->tglfaktur = date("y-m-d");
            $so = trpenawaran::find($fakturjual->idtrpenawaran);
            $fakturjual->tgljatuhtempofaktur = $so->TglJatuhTempoSO;
            $fakturjual->userin = Auth::id();
            $fakturjual->save();
            $suratjalan->userupd = Auth::id();
            $suratjalan->save();
            return Redirect::action([fakturjualController::class, 'showPage'])->with('success_message', 'Success sent '.$suratjalan->NoSuratJalan.' create new Faktur :'.$fakturjual->nofaktur);
        }
        $suratjalan->userupd = Auth::id();
        $suratjalan->save();
        return Redirect::action([trsuratjalanController::class, 'showPage'])->with('success_message', 'Success Update PO number for '.$suratjalan->NoSuratJalan);
    }
    public function print($id){

        $temp = trsuratjalan::find($id);
        $tempno = $temp->id;
        $jalan = trsuratjalan::where('id', $tempno)->first();
        return view('printJalan',compact('jalan'));
    }
}
