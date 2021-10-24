<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\fakturbeli;
use App\Models\trpenawaran;
use App\Models\trsuratjalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use stdClass;

class LoginController extends Controller
{
    public function authenticate(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if success login
            $user = Auth::user();
            if($user->status == 'deactive'){
                return Redirect()->back()->withErrors('Your Account is Disable, Please Contact Admin or Owner');
            }
            return Redirect('dashboard');
            //return redirect()->intended('/details');
        }
        // if failed login
        return Redirect('/login')->withErrors('Wrong Username or Password');

    }

    public function getNotif(){
        $temp = trpenawaran::where('deal', 'P')->groupBy('noso')->get();
        $notif = count($temp);
        return response()->json($notif);
    }

    public function getDashboard(){
        $result = new stdClass();
        $result->soNotDeal = trpenawaran::where('Deal', '!=', 'Y')->count();
        $result->suratJalanPending = trsuratjalan::where('status', 'Pending')->count();
        $date = date('y-m-d');
        $result->pembelianBelumJatuhTempo = fakturbeli::where('TglJatuhTempoFaktur', '>', $date)->count();
        $result->totalRetur = barang::where('qtyRetur', '!=', NULL)->sum('qtyRetur');
        return response()->json($result);
    }
}
