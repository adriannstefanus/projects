<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productDetailController extends Controller
{

    public function index($productcode){
        $product = DB::table('products')->where('productcode', $productcode)->get();
        return view('detail', ['product'=> $product]);
    }
}
