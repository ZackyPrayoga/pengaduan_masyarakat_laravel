<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IsiController extends Controller
{
    function proses_tambah_pengaduan(Request $request) {

        // validasi
        $request->validate([
            'isi_laporan' => 'required'
        ]);

        $namaFoto = "";
        // Jika File Foto Ada
        if ($request->hasFile('foto')) {
             $namaFoto = time() . $request->foto->getClientOriginalName();
             $request->foto->move('img', $namaFoto);
}
        $isi_pengaduan = $request->isi_laporan;

        $nik = Auth::user()->nik;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => $nik,
            'isi_laporan' => $isi_pengaduan,
            'foto' => $namaFoto,
            'status' => '0',
        ]);
        return redirect('/hasil');
    }

    function proses_tambah_tanggapan(Request $request, $id){

        $request->validate([
            'tanggapan' => 'required'
        ]);

        $tanggapan = $request->tanggapan;

        $id_petugas = Auth::guard('petugas')->user()->id_petugas;

        DB::table('tanggapan')->rightJoin('pengaduan', 'tanggapan.id_pengaduan', '=', 'pengaduan.id_pengaduan')->where('id_pengaduan', $id)->insert([
            'id_pengaduan' => $id,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $tanggapan,
            'id_petugas' => $id_petugas,
        ]);
        return redirect('/hasil');
    }

    function index($id){
        $data = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        $data = (array) $data;

    return view('isi-tanggapan', ['data' => $data]);
        }
}   

