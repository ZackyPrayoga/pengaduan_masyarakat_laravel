<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaduanContoller extends Controller
{


    function pengaduan()
    {
$pengaduan = DB::table('tanggapan')
        ->rightJoin('pengaduan', 'tanggapan.id_pengaduan', '=', 'pengaduan.id_pengaduan')
        ->get();

    return view('hasil', ['pengaduan' => $pengaduan]);

    }

    function detail_pengaduan($id)
    {
        $pengaduan = DB::table('pengaduan')
            ->where('id_pengaduan', '=', $id)
            ->first();
        return view('detail', ['pengaduan' => $pengaduan]);
    }

    function hapus($id)
    {
        // Retrieve the file name from the database (assuming it's stored in a column like 'foto_name')
        $fotoName = DB::table('pengaduan')->where('id_pengaduan', $id)->value('foto');
        
        // Delete the database record
        DB::table('pengaduan')->where('id_pengaduan', $id)->delete();
    
        // Check if a file name was found and delete the associated image file
        if ($fotoName) {
            $filePath = public_path("img/$fotoName"); // Build the full file path
            if (file_exists($filePath)) {
                unlink($filePath); // Delete the file
            }
        }
    
        return redirect('/hasil');
    }
    

    function edit($id)
    {
        $data = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        $data = (array) $data;

        return view('update', ['data' => $data]);
    }

    function update_pengaduan(Request $request, $id)
    {
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

        DB::table('pengaduan')->where('id_pengaduan', $id)
            ->update([
                'isi_laporan' => $isi_pengaduan,
                'foto' => $namaFoto,
            ]);

            return redirect('hasil');
    }

    public function terima($id) {
        // Find all "pengaduan" rows with status $id and update their status to 'proses'
        DB  ::table('pengaduan')->where('id_pengaduan', $id)->update(['status' => 'proses']);

        // Redirect back or to a different route
        return redirect('/hasil');
    }

    public function tolak($id) {
        // Find all "pengaduan" rows with id_pengaduan $id and update their id_pengaduan to 'rejected' or any appropriate id_pengaduan
        DB::table('pengaduan')->where('id_pengaduan', $id)->update(['status' => 'ditolak']);

        // Redirect back or to a different route
        return redirect('/hasil');
    }

    public function selesai($id) {
        // Find all "pengaduan" rows with id_pengaduan 'proses' and update their id_pengaduan to 'selesai'
        DB::table('pengaduan')->where('id_pengaduan', $id)->update(['status' => 'selesai']);

        // Redirect back or to a different route
        return redirect('/hasil');
    }

    public function navbar(){
        DB::table('petugas')->get();
    }
}
