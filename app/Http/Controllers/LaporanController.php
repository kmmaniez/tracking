<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Sopir;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function laporanSopir(){
        return view('admin.laporan.laporan-sopir',[
            'title_page' => 'Laporan Sopir',
            'sopir' => Sopir::all()
        ]);
    }
    
    public function laporanPaket(){
        return view('admin.laporan.laporan-paket',[
            'title_page' => 'Laporan Paket',
            'paket' => Paket::all()
        ]);
    }
    
    public function laporanTracking(){
        return view('admin.laporan.laporan-tracking',[
            'title_page' => 'Laporan Tracking'
        ]);
    }

    public function printSopir()
    {
        # code...
    }

    public function printPaket()
    {
        # code...
    }

    public function printTracking()
    {
        # code...
    }
}
