<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $TextJudul = "Selamat datang di Pengaduan masyarakat";
        $TextParagraph = "Laporkan keluh kesah anda!";
        
        return view('home', compact('TextJudul', 'TextParagraph'));
    }
    
    public function hasil()
    {
        $TextJudul = 'Hasil Page';
        return view('hasil')->with('TextJudul', $TextJudul);
    }

    public function generateReport($id)
    {
        // Fetch data from the database based on $nik
        $pengaduan = DB::table('pengaduan')
        ->rightJoin('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
        ->where('pengaduan.id_pengaduan',$id)
            ->get();
    

        if (!$pengaduan) {
            // Handle the case where the report data doesn't exist
            abort(404);
        }

        // Return the report view with data
        return view('report', ['pengaduan' => $pengaduan]);
    }


 }

