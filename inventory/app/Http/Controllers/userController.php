<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function showPage(){
        $user = User::sortable()->where('role', '!=', 'owner')->orderBy('name')->paginate(10);
        return view('masterUser', compact('user'));
    }

    public function insert(Request $request){
        $validated = Validator::make($request->all(), [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'alpha_num'],
            'role' => ['required'],
        ]);
        if($validated->fails()){
            return redirect('/msUser')
            ->withErrors($validated)
            ->withInput();
        }
        // dd($request->input('role'));
        User::create([
            'name' => $request['fullname'],
            'username' => $request['username'],
            'role' => $request['role'],
            'status' => 'active',
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return Redirect::action([userController::class, 'showPage'])->with('success_message', 'Success Create New User');
    }

    public function edit(Request $request){
        $validated = Validator::make($request->all(), [
            'fullName' => ['required', 'string', 'max:255'],
            'userName' => ['required', 'string', 'max:255', 'unique:users,username,'.$request->input('dataid')],
            'email' => ['required', 'string', 'email', 'unique:users,email,'.$request->input('dataid')],
            'userRole' => ['required'],
        ]);
        if($validated->fails()){
            return redirect('/msUser')
            ->withErrors($validated)
            ->withInput();
        }
        $user = User::find($request->input('dataid'));
        $user->name = $request->input('fullName');
        $user->username = $request->input('userName');
        $user->email = $request->input('email');
        $user->role = $request->input('userRole');
        $user->save();
        return Redirect::action([userController::class, 'showPage'])->with('success_message', 'Success Edit User');
    }
    public function deactive(Request $request){
        $user = User::find($request->input('deleteid'));
        if($user->status == 'active'){
            $user->status = 'deactive';
            $user->save();
            return Redirect::action([userController::class, 'showPage'])->with('delete_message', 'User is Deactivated');
        }else{
            $user->status = 'active';
            $user->save();
            return Redirect::action([userController::class, 'showPage'])->with('success_message', 'User is Activated');
        }
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return Redirect('/');
    }

    public function changeOwner(Request $request){
        $newOwnerId = $request->input('newUser');
        $newOwner = User::find($newOwnerId);
        $previousOwner = User::where('role', 'owner')->where('name', '!=', 'developer')->first();
        $previousOwner->role = 'admin';
        $previousOwner->save();
        $newOwner->role = 'owner';
        $newOwner->save();

        return Redirect::action([userController::class, 'logout']);
    }
}
