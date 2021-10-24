<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addItemController extends Controller
{


    public function index(Request $req){
        return view('/addItem');
    }

    public function regisSuccess(Request $request){

        $profileImage = $request->file('p_image');
        $profileImageSaveAsName = time().".".$profileImage->getClientOriginalExtension();

        $upload_path = 'profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        $user = auth()->user();
        DB::table('products')->insert([
           'email' => $user->email,
            'product_name' => $request->input('p_name'),
            'worth' => $request->input('p_worth'),
            'description' => $request->input('p_desc'),
            'age' => $request->input('p_age'),
            'category' => $request->input('p_category'),
            'status' => false,
            'product_image' => $profile_image_url,
        ]);
        return view('/addItem');
    }
}
