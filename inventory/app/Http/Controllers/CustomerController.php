<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function showPage(){
        $customer = Customer::sortable()->where('stsrc', 'A')->orderBy('Nama')->paginate(10);
        return view('mastercustomer', compact('customer'));
    }

    public function insert(Request $request){
        $validated = Validator::make($request->all(), [
            'Nama' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'unique:customers'],
            'Telp' => ['required', 'numeric'],
            'Alamat' => ['required'],
        ]);
        if($validated->fails()){
            return redirect('/msCustomer')
            ->withErrors($validated)
            ->withInput();
        }
        $temp = DB::table('customers')->select(DB::raw('max(right(Idmember, 3)) as maxcounter'))->get();
        $obj = $temp[0];
        $maxcounter = $obj->maxcounter;
        $maxcounter++;
        $idcustomer = 'CUS/'. date('ym') . str_pad($maxcounter, 4, '0', STR_PAD_LEFT);
        $customer = new Customer;
        $customer->Idmember = $idcustomer;
        $customer->Nama = $request->input('Nama');
        $customer->Alamat = $request->input('Alamat');
        $customer->Telp = $request->input('Telp');
        $customer->Email = $request->input('Email');
        $customer->userin = Auth::id();
        $customer->stsrc = 'A';
        $customer->save();
        return Redirect::action([CustomerController::class, 'showPage'])->with('success_message', 'Success Insert New Customer');
    }

    public function delete(Request $request){
        $customer = Customer::find($request->input('deleteid'));
        $customer->stsrc = 'D';
        $customer->save();
        return Redirect::action([CustomerController::class, 'showPage'])->with('delete_message', 'Success Delete Customer');
    }

    public function edit(Request $request){
        $validated = Validator::make($request->all(), [
            'Nama' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'unique:customers,Email,'.$request->input('dataid')],
            'Telp' => ['required', 'numeric'],
            'Alamat' => ['required'],
        ]);
        if($validated->fails()){
            return redirect('/msCustomer')
            ->withErrors($validated)
            ->withInput();
        }
        $customer = Customer::find($request->input('dataid'));
        $customer->Nama = $request->input('Nama');
        $customer->Alamat = $request->input('Alamat');
        $customer->Telp = $request->input('Telp');
        $customer->Email = $request->input('Email');
        $customer->userupd = Auth::id();
        $customer->save();
        return Redirect::action([CustomerController::class, 'showPage'])->with('success_message', 'Success Edit Customer');
    }

    public function searchRes(Request $request){
        $customer = Customer::sortable()->where($request->input('column_name'), 'LIKE','%'.$request->input('search').'%')->where('stsrc', 'A')->paginate(10);
        return view('mastercustomer', compact('customer'));
    }
}
