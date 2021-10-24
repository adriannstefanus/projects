<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $user = auth()->user();
        $product = DB::table('products')->join('users', 'products.email', '=', 'users.email')
            ->where('products.email', '!=' ,$user->email)->get();
//        $product = DB::table('products')->whereNotIn('email', $user->email)->paginate(9);
        return view('main', ['user'=>$user, 'product'=>$product]);
}
}
