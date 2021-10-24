<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class supplierController extends Controller
{
    public function showPage(){
        $supplier = Supplier::sortable()->where('stsrc', 'A')->orderBy('Nama')->paginate(10);
        return view('masterSupplier', compact('supplier'));
    }

    public function insert(Request $request){
        $validated = Validator::make($request->all(), [
            'supplierName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:suppliers'],
            'address' => ['required'],
            'phoneNumber' => ['required', 'numeric'],
            'npwpNumber' => ['required', 'unique:suppliers,npwp']
        ]);
        if($validated->fails()){
            return redirect('/msSupplier')
            ->withErrors($validated)
            ->withInput();
        }
        $supplier = new Supplier;
        $supplier->nama = $request->input('supplierName');
        $supplier->alamat = $request->input('address');
        $supplier->telp = $request->input('phoneNumber');
        $supplier->email = $request->input('email');
        $supplier->npwp = $request->input('npwpNumber');
        $supplier->stsrc = 'A';
        $supplier->userin = Auth::user()->id;
        $supplier->save();
        return Redirect::action([supplierController::class, 'showPage'])->with('success_message', 'Success Insert New Supplier');
    }

    public function edit(Request $request){
        $validated = Validator::make($request->all(), [
            'supplierName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:suppliers,email,'.$request->input('dataid')],
            'address' => ['required'],
            'phoneNumber' => ['required', 'numeric'],
            'npwpNumber' => ['required', 'unique:suppliers,npwp,'.$request->input('dataid')]
        ]);
        if($validated->fails()){
            return redirect('/msSupplier')
            ->withErrors($validated)
            ->withInput();
        }
        $supplier = Supplier::find($request->input('dataid'));
        $supplier->nama = $request->input('supplierName');
        $supplier->alamat = $request->input('address');
        $supplier->telp = $request->input('phoneNumber');
        $supplier->email = $request->input('email');
        $supplier->npwp = $request->input('npwpNumber');
        $supplier->userupd = Auth::user()->id;
        $supplier->save();
        return Redirect::action([supplierController::class, 'showPage'])->with('success_message', 'Success Edit Supplier');
    }

    public function delete(Request $request){
        $supplier = Supplier::find($request->input('deleteid'));
        $supplier->stsrc = 'D';
        $supplier->save();
        return Redirect::action([supplierController::class, 'showPage'])->with('delete_message', 'Success Delete Supplier');
    }

    public function searchRes(Request $request){
        $supplier = supplier::sortable()->where($request->input('column_name'), 'LIKE','%'.$request->input('search').'%')->where('stsrc', 'A')->paginate(10);
        return view('masterSupplier', compact('supplier'));
    }
}
