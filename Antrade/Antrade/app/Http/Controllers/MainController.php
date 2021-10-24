<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function search(Request $request){
        $result = $request->input('p_search');
        $user = auth()->user();
        $product = DB::table('products')->join('users', 'products.email', '=', 'users.email')
            ->where('products.email', '!=' ,$user->email)->where('products.product_name', 'LIKE', "%$result%")->paginate(9);
        return view('main', ['user'=>$user, 'product'=>$product]);
    }

    public function index(){
        $user = auth()->user();
        $product = DB::table('products')->join('users', 'products.email', '=', 'users.email')
            ->where('products.email', '!=' ,$user->email)->paginate(9);
        return view('main', ['user'=>$user, 'product'=>$product]);
}
}
