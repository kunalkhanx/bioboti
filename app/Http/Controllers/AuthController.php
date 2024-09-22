<?php

namespace App\Http\Controllers;

use App\Mail\SignupOTP;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function signup(){
        return view('auth.signup');
    }

    public function signup_otp(Request $request){
        if(!$request->token){
            return response('', 404);
        }
        return view('auth.otp');
    }

    public function signup_verify_otp(Request $request){
        $request->validate([
            'otp' => 'required|numeric|digits:6'
        ]);
        $token = $request->otp_token;
        $otp = $request->otp;
        if(!$token){
            return response('', 400);
        }
        $payload = null;
        try{
            $payload = JWT::decode($token, new Key(env('APP_KEY'), 'HS256'));
            if(!$payload || !$payload->user || !$payload->otp || $payload->otp != $otp){
                throw new Exception();
            }        
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Invalid OTP. Please try again!');
        }

        $user = User::where('id', $payload->user)->first();

        if(!$user){
            return redirect()->back()->with('error', 'Invalid OTP. Please try again!'); 
        }

        $user->email_verified_at = now();
        $user->status = 1;
        $result = $user->save();
        if(!$result){
            return response('', 500);
        }
        Auth::loginUsingId($user->id);
        return redirect()->route('dashboard');
    }

    public function do_login(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('username', $request->username)->where('role', '>', 0)->where('status', '>', 0)->first();
        if(!$user || !$user->email_verified_at){
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
        $user->username = strtolower($request->username);
        $user->password = $request->password;
        $user->status = 0;
        $result = $user->save();
        if(!$result){
            return response('', 500);
        }
        $otp = rand(100000, 999999);
        Mail::to($user->email)->send(new SignupOTP($user->username, $otp));
        $payload = [
            'user' => $user->id,
            'otp' => $otp,
            'exp' => time()+(5*60)
        ];
        $token = JWT::encode($payload, env('APP_KEY'), 'HS256');
        return redirect()->route('signup_otp', ['token' => $token]);
    }
}
