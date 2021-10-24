<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\fakturjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class fakturjualController extends Controller
{
    public function showPage(){
        $fakturjual = fakturjual::orderBy('created_at', 'desc')->paginate(10);
        return view('transaksifakturPenjualan', compact('fakturjual'));
    }

    public function editForm($id){
        $fakturjual = fakturjual::find($id);
        return view('editfakturPenjualan', compact('fakturjual'));
    }

    public function submit(Request $request){
        $penjualan = fakturjual::where('nofaktur', $request->input('fieldnofaktur'))->first();
        $penjualan->tglfaktur = $request->input('inserttglFaktur');
        $penjualan->tgljatuhtempofaktur = $request->input('insertjatuhtempoSO');
        $penjualan->userupd = Auth::id();
        $penjualan->save();
        return Redirect::action([fakturjualController::class, 'showPage'])->with('success_message', 'Success updating Faktur No :'.$penjualan->NoFaktur);
    }
    public function print($id)
    {
        $temp = fakturjual::find($id);
        $tempId = $temp->id;
        $faktur = fakturjual::where('id', $tempId)->first();
        return view('printFakturJual', compact('faktur'));
    }
}
