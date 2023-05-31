<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __invoke(){
        return view('admin.laporan.index');
    }
    
    public function laporanSopir(){
        return view('admin.sopir.create');
    }
}
