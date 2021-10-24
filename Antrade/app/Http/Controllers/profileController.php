<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    public function index(){
        return view('profile');
    }
    public function changeProfile(Request $request){
        $profileImage = $request->file('p_image');
        $profileImageSaveAsName = time().".".$profileImage->getClientOriginalExtension();

        $upload_path = 'profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        $user = auth()->user();
        DB::table('users')->where('email', $user->email)->update([
            'name' => $request->input('p_name'),
            'address' => $request->input('p_address'),
            'phone' => $request->input('p_phone'),
            'user_image' => $profile_image_url,
        ]);
        return redirect('main');
    }
}
