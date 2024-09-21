<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function signup(){
        return view('auth.signup');
    }

    public function do_login(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('username', $request->username)->where('role', '>', 0)->where('status', '>', 0)->first();
        if(!$user){
            return redirect()->back()->with('error', 'Invalid username or password!');
        }
        if(!Auth::attempt($credentials, true)){
            return redirect()->back()->with('error', 'Invalid username or password!');
        }
        return redirect()->route('dashboard');
    }

    public function do_signup(Request $request){

        $request->validate([
            'email' => 'required|min:5|max:50|unique:users,email',
            'username' => 'required|min:3|max:20|unique:users,username|alpha:ascii',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);

        $user = new User;
        $user->role = 1;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->status = 0;
        $result = $user->save();
        if(!$result){
            return response('', 500);
        }
        return redirect()->route('dashboard');
    }
}
