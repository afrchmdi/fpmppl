<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
 
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($request->email);
        if (Auth::attempt($credentials)) {
            // return redirect()->intended('admin');
            // return Auth::user();
            // dd($credentials);
            if(Auth::attempt($credentials) && Auth::user()->aktor == 1)
            {
                return redirect()->intended('admin');
            } else{
                return redirect()->intended('dashboard');
            }

        }
        
        else {
            // alert("gagal:(");
            return redirect()->intended('500');
            // echo"gagal";
            return redirect()->back()->with('failmessage', 'Username/Password anda salah!');

        }
    }
    
    public function signup(Request $request){
        // $credentials = $request->only('name', 'email', 'password', 'retype');

        if($request->password == $request->retype){
            $user = new User();
            $user->nama = $request->name;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;
            $user->aktor = 2;

            $user->save();
            return redirect()->back()->with('alert', 'Sign Up berhasil!');
        }
        else{
            return redirect()->back()->with('alert', 'Password tidak cocok');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function refreshCaptcha(){
        return response()->json(['captcha'=>captcha_img()]);
    }
}
