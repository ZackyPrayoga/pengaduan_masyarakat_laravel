<?php

namespace App\Http\Controllers\auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    function register() {
        return view('auth.register');
    }

    function proses_tambah_masyarakat(Request $request) {

        $nik = $request->nik;
        $nama = $request->nama;
        $username = $request->username;
        $password = Hash::make($request->password);
        $telp = $request->telp;

        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'telp' => $telp
        ]);
        return redirect('/login');
    }
    
    function petugas(){

        return view('auth.register-petugas');
    }

     function proses_tambah_petugas(Request $request) {

             $nama_petugas = $request->nama_petugas;
             $username = $request->username;
             $telp = $request->telp;
             $level = $request->level;
    
             DB::table('petugas')->insert([
                 'nama_petugas' => $nama_petugas,
                 'username' => $username,
                 'password' => Hash::make($request->password),
                 'telp' => $telp,
                 'level' => "petugas",
             ]);
             return redirect('/home');
         }
         function admin(){

            return view('auth.register-admin');
        }
         function proses_tambah_admin(Request $request) {

            $nama_petugas = $request->nama_petugas;
            $username = $request->username;
            $telp = $request->telp;
   
            DB::table('petugas')->insert([
                'nama_petugas' => $nama_petugas,
                'username' => $username,
                'password' => Hash::make($request->password),
                'telp' => $telp,
                'level' => "admin",
            ]);
            return redirect('/login-petugas');
        }
    }

