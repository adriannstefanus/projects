<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\spk;
use App\Models\trpenawaran;
use App\Models\User;
use App\Notifications\PushMessageApproveSO;
use App\Notifications\PushMessageRejectSO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class approvalController extends Controller
{
    public function showPage(){
        $penawaran = trpenawaran::where('deal', 'P')->groupBy('noso')
        ->orderBy('created_at', 'desc')->paginate(10);
        return view('approval', compact('penawaran'));
    }

    public function view($id){
        $temp = trpenawaran::find($id);
        $tempno = $temp->NoSO;
        $penawaran = trpenawaran::where('NoSO', $tempno)->first();
        return view('viewdetailApproval', compact('penawaran'));
    }

    public function action(Request $request){

        switch ($request->input('action')){
            case 'approve':
                $penawaran = trpenawaran::where('noso', $request->input('del-name'))->first();
                $nomorso = $penawaran->NoSO;
                // dd($penawaran->barangs);
                foreach ($penawaran->barangs as $p){
                    $temp = DB::table('spks')->select(DB::raw('max(right(NoSPK, 3)) as maxcounter'))->get();
                    $obj = $temp[0];
                    $maxcounter = $obj->maxcounter;
                    $maxcounter++;
                    //spk
                    $spk = new spk;
                    $spk->idtrpenawaran = $penawaran->id;
                    $spk->idbarang = $p->id;
                    $spk->nospk ='SPK/'. date('y') . str_pad($maxcounter, 6, '0', STR_PAD_LEFT);;
                    $spk->tglspk = date("y-m-d");
                    $spk->pic = '';
                    $spk->statusspk = 'pending';
                    $spk->userin = Auth::id();
                    $spk->save();
                }
                //SO
                $penawaran->deal = 'Y';
                $penawaran->save();
                //send push notif
                $idpembuat = $penawaran->userin;
                $sendTo = User::find($idpembuat);
                Notification::send($sendTo, new PushMessageApproveSO($nomorso));
                return Redirect::action([approvalController::class, 'showPage'])->with('success_message', 'SO Number '.$nomorso.' has been Approved');
            break;

            case 'reject':
                $penawaran = trpenawaran::where('noso', $request->input('del-name'))->first();
                $nomorso = $penawaran->NoSO;
                $penawaran->deal = 'N';
                $penawaran->save();
                //send push notif
                $idpembuat = $penawaran->userin;
                $sendTo = User::find($idpembuat);
                Notification::send($sendTo, new PushMessageRejectSO($nomorso));
                return Redirect::action([approvalController::class, 'showPage'])->with('delete_message', 'You Reject SO Number '.$nomorso);
            break;
        }

    }
}
