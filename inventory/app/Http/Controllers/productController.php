<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\producttype;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    public function showPage(){
        $product = Product::sortable()->where('products.stsrc', 'A')->paginate(10);
        $supplier = Supplier::all('id', 'nama');
        return view('masterProduct', compact('product', 'supplier'));
    }

    public function insert(Request $request){
        $validated = Validator::make($request->all(), [
            'supplierId' => ['required'],
            'kategori' => ['required'],
            'jenis' => ['required'],
            'tipe' => ['required', 'unique:products,tipe,NULL,NULL,idSupplier,'.$request->input('supplierId').',kategori,'.$request->input('kategori').',jenis,'.$request->input('jenis')],
        ]);
        if($validated->fails()){
            return redirect('/msProduct')
            ->withErrors($validated)
            ->withInput();
        }
        $product = new product;
        $cekiftypeexist = producttype::where('tipe', $request->input('tipe'))->count();
        if($cekiftypeexist == 0){
            $producttype = new producttype;
            $producttype->tipe = $request->input('tipe');
            $producttype->save();
        }
        $product->idSupplier = $request->input('supplierId');
        $product->kategori = $request->input('kategori');
        $product->jenis = $request->input('jenis');
        $product->tipe = $request->input('tipe');
        $product->stsrc = 'A';
        $product->userin = Auth::user()->id;
        $product->save();
        return Redirect::action([productController::class, 'showPage'])->with('success_message', 'Success Create New Product');
    }

    public function edit(Request $request){
        // dd($request->all());
        $validated = Validator::make($request->all(), [
            'supplier' => ['required'],
            'kategori' => ['required'],
            'jenis' => ['required'],
            'tipe' => ['required', 'unique:products,tipe,'.$request->input('dataid').',,idSupplier,'.$request->input('supplier').',kategori,'.$request->input('kategori').',jenis,'.$request->input('jenis')],
        ]);
        if($validated->fails()){
            return redirect('/msProduct')
            ->withErrors($validated)
            ->withInput();
        }
        $product = product::find($request->input('dataid'));
        $product->idSupplier = $request->input('supplier');
        $product->kategori = $request->input('kategori');
        $product->jenis = $request->input('jenis');
        $product->tipe = $request->input('tipe');
        $product->userupd = Auth::user()->id;
        $product->save();
        return Redirect::action([productController::class, 'showPage'])->with('success_message', 'Success Edit Product');
    }

    public function delete(Request $request){
        $product = product::find($request->input('deleteid'));
        $product->stsrc = 'D';
        $product->save();
        return Redirect::action([productController::class, 'showPage'])->with('delete_message', 'Success Delete Product');
    }

    public function searchRes(Request $request){
        if($request->input('column_name') == 'supplier'){
            //if has foreign key
            $keyword = $request->input('search');
            $product = product::sortable()->wherehas('supplier', function($query) use ($keyword){
                return $query->where('nama', 'LIKE', '%'.$keyword.'%');
            })->where('products.stsrc', 'A')->paginate(10);
        }else{
            //the rest
            $product = product::sortable()->where($request->input('column_name'), 'LIKE','%'.$request->input('search').'%')->where('products.stsrc', 'A')->paginate(10);
        }
        $supplier = Supplier::all('id', 'nama');
        return view('masterProduct', compact('product', 'supplier'));
    }
}
