<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

 }

