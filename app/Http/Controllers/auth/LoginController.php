<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class LoginController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function proses_login(Request $request) {
        $data_login = $request->only('username', 'password');
        $masuk = Auth::attempt($data_login);
        if($masuk){
            return redirect('/home');
        }else{
            return redirect('/login')->with('error', 'username atau password salah');
        }
        // var_dump($data_login);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}
