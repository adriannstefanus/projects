<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class myItemController extends Controller
{
    public function editproduct(Request $request){
        $profileImage = $request->file('p_image');
        $profileImageSaveAsName = time().".".$profileImage->getClientOriginalExtension();

        $upload_path = 'profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        $user = auth()->user();
        DB::table('products')->where('productcode', $request->input('p_code'))->update([
           'product_name'=> $request->input('p_name'),
            'worth' => $request->input('p_worth'),
            'description' => $request->input('p_desc'),
            'age' => $request->input('p_age'),
            'category' => $request->input('p_category'),
            'product_image' => $profile_image_url,
        ]);
        return redirect('/main');
    }

    public function deleteproduct($productcode){
        DB::table('products')->where('productcode', $productcode)->delete();
        return redirect('/main');
    }

    public function pass($productcode){
        $tes = DB::table('products')->where('productcode', $productcode)->get();
        return view('/editProduct', ['productcode'=>$productcode]);
    }

    public function index(){
        $user = auth()->user();
        $product = DB::table('products')->where('email', $user->email)->get();
        return view('myItem', ['product'=>$product]);
    }
}
