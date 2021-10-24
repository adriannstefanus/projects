<?php

namespace App\Http\Controllers;

use App\Models\barangbeli;
use App\Models\fakturbeli;
use App\Models\trreturbeli;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class trreturbeliController extends Controller
{
    public function showPage(){
        $returbeli = barangbeli::whereHas('fakturbeli', function(Builder $query){
            $query->where('statusRetur', '!=', NULL)->orWhere('statusRetur', '');
        })->where('qtyRetur', '>', 0)->get();
        $fakturbeli = fakturbeli::orderBy('created_at', 'desc')->where('statusRetur', NULL)->orWhere('statusRetur', '')->paginate(10);
        return view('transaksireturPembelian', compact('returbeli', 'fakturbeli'));
    }

    public function viewDetail($id){
        $faktur = fakturbeli::find($id);
        return view('insertReturPembelian', compact('faktur'));
    }

    public function submit(Request $request){
        // dd($request->all());
        $faktur = fakturbeli::where('nofaktur', $request->input('noFaktur'))->first();
        $faktur->tglretur = $request->input('tglRetur');
        $faktur->statusRetur = 'Y';

        $fakturId = $faktur->id;

        $barang = barangbeli::whereHas('fakturbeli', function(Builder $query) use($fakturId){
            $query->where('id', $fakturId);
        })->get();


        $temp = DB::table('barangbelis')->select(DB::raw('max(right(noRetur, 3)) as maxcounter'))->get();
        $obj = $temp[0];
        $maxcounter = $obj->maxcounter;

        $qtyInsert = $request->input('qtyRetur');
        $totalunit = 0;
        for($i=0;$i<count($barang);$i++){
            $maxcounter++;
            $barang[$i]->isretur = 'y';
            $barang[$i]->qtyRetur = $qtyInsert[$i];
            $barang[$i]->noRetur = 'RB/' . str_pad($maxcounter, 8, '0', STR_PAD_LEFT);;
            $barang[$i]->save();
            $totalunit = $totalunit+$qtyInsert[$i];
        }
        $faktur->save();
        return Redirect::action([trreturbeliController::class, 'showPage'])->with('success_message', 'Success Retur with total of : '.$totalunit.' item');
    }
}
