<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\fakturjual;
use App\Models\trreturjual;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class trreturjualController extends Controller
{
    public function showPage(){
        $returjual = barang::whereHas('trpenawaran', function(Builder $query){
            $query->whereHas('fakturjual', function(Builder $query){
                $query->where('statusRetur', '!=', NULL)->orWhere('statusRetur', '');
            });
        })->where('qtyRetur', '>', 0)->get();
        $fakturjual = fakturjual::orderBy('created_at', 'desc')->where('statusRetur', NULL)->orWhere('statusRetur', '')->paginate(10);
        return view('transaksireturPenjualan', compact('returjual', 'fakturjual'));
    }

    public function viewDetail($id){
        $faktur = fakturjual::find($id);
        return view('insertReturPenjualan', compact('faktur'));
    }

    public function submit(Request $request){
        // dd($request->all());
        $faktur = fakturjual::where('nofaktur', $request->input('noFaktur'))->first();
        $faktur->tglretur = $request->input('tglRetur');
        $faktur->statusRetur = 'Y';

        $fakturId = $faktur->id;

        $barang = barang::whereHas('trpenawaran', function(Builder $query) use($fakturId){
            $query->whereHas('fakturjual', function(Builder $query) use($fakturId){
                $query->where('id', $fakturId);
            });
        })->get();

        $temp = DB::table('barangs')->select(DB::raw('max(right(noRetur, 3)) as maxcounter'))->get();
        $obj = $temp[0];
        $maxcounter = $obj->maxcounter;


        $qtyInsert = $request->input('qtyRetur');
        $totalunit = 0;
        for($i=0;$i<count($barang);$i++){
            $maxcounter++;
            $barang[$i]->isretur = 'y';
            $barang[$i]->qtyRetur = $qtyInsert[$i];
            $barang[$i]->noRetur = 'RJ/' . str_pad($maxcounter, 8, '0', STR_PAD_LEFT);;
            $barang[$i]->save();
            $totalunit = $totalunit+$qtyInsert[$i];
        }
        $faktur->save();
        // dd($faktur);
        return Redirect::action([trreturjualController::class, 'showPage'])->with('success_message', 'Success Retur with total of : '.$totalunit.' item');
    }
}
