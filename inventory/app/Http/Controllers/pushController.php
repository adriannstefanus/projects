<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PushMessageWelcome;
use Illuminate\Support\Facades\Notification;

class pushController extends Controller
{
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'endpoint' => 'required',
        //     'keys.auth' => 'required',
        //     'keys.p256dh' => 'required'
        // ]);
        $endpoint = $request->endpoint;
        $token = $request->keys['auth'];
        $key = $request->keys['p256dh'];
        $user = Auth::user();
        $user->updatePushSubscription($endpoint, $key, $token);
        Notification::send(Auth::user(), new PushMessageWelcome(Auth::user()->name));
        return response()->json(['success' => true], 200);
    }

    public function pushWelcome()
    {
        Notification::send(Auth::user(), new PushMessageWelcome(Auth::user()->name));
        return redirect()->back();
    }
}
