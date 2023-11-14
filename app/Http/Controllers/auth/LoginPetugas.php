<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginPetugas extends Controller
{
    function create(){
        // return Hash::make('admin');
        return view('auth.login-level');
    }

    function login(Request $request){
        $data = $request->only('username', 'password','level');
        if(Auth::guard("petugas")->attempt($data)){
            return redirect ('/');
        }else{
            return redirect ('login-petugas')->with('error', 'username atau password salah');
        }
    }
}
