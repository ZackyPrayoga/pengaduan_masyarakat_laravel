<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    function laporan(){
        $masyarakat = DB::table('masyarakat')->get();

        return view('rakyat', ['masyarakat' => $masyarakat]);
    }
}
