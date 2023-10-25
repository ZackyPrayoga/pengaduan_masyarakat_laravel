<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    function proses_tambah_petugas(Request $request) {

        $nama_petugas = $request->nama_petugas;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;

        DB::table('petugas')->insert([
            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'password' => $password,
            'telp' => $telp
        ]);
        return redirect('home');
    }

    function petugas(){
        $petugas = DB::table('petugas')->get();

        return view('daftar-petugas', ['petugas' => $petugas]);
    }
}