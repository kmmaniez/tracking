<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Sopir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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
        $checkpointone = DB::table('checkpointone')->get();
        $checkpointtwo = DB::table('checkpointtwo')->get();
        $checkpointthree = DB::table('checkpointthree')->get();
        $dataCpone = $checkpointone->map(function($item){
            return [
                    'tanggal_cp_1' => $item->tanggal_cp_1,
                    'kondisi_cp_1' => $item->kondisi_cp_1,
                    'status_cp_1' => $item->status_cp_1,
                    'kota_cp_1' => $item->kota_cp_1,
            ];
        })->toArray();
        $dataCptwo = $checkpointtwo->map(function($item){
            return [
                    'tanggal_cp_2' => $item->tanggal_cp_2,
                    'kondisi_cp_2' => $item->kondisi_cp_2,
                    'status_cp_2' => $item->status_cp_2,
                    'kota_cp_2' => $item->kota_cp_2,
            ];
        })->toArray();
        $dataCpthree = $checkpointthree->map(function($item){
            return [
                    'tanggal_cp_3' => $item->tanggal_cp_3,
                    'kondisi_cp_3' => $item->kondisi_cp_3,
                    'status_cp_3' => $item->status_cp_3,
                    'kota_cp_3' => $item->kota_cp_3,
            ];
        })->toArray();
        $result = [];
        $length = max(count($dataCpone), count($dataCptwo), count($dataCpthree));

        for ($i = 0; $i < $length; $i++) {
            $result[$i] = [];

            if (isset($dataCpone[$i])) {
                $result[$i] += $dataCpone[$i];
            }

            if (isset($dataCptwo[$i])) {
                $result[$i] += $dataCptwo[$i];
            }

            if (isset($dataCpthree[$i])) {
                $result[$i] += $dataCpthree[$i];
            }
        }
        return view('admin.laporan.laporan-tracking',[
            'title_page' => 'Laporan Tracking',
            'result' => $result
        ]);
    }

    public function printSopir($id)
    {
        $sopir = Sopir::where('id',$id)->get();
        $nama = $sopir[0]->nama;
        $pdf    = PDF::loadView('admin.laporan.cetak.cetak-sopir',[
            'sopir'  => $sopir ,
        ]);
        return $pdf->download("datadiri-".$nama.".pdf");
        // return view('admin.laporan.cetak.cetak-sopir', compact('sopir'));

    }

    public function printPaket($id)
    {
        $paket = Paket::where('id',$id)->get();
        $nama = $paket[0]->nama_customer;
        $pdf    = PDF::loadView('admin.laporan.cetak.cetak-paket',[
            'paket'  => $paket ,
        ]);
        return $pdf->download("paket-".$nama.".pdf");
    }

    public function printTracking($id)
    {
        $checkpointone = DB::table('checkpointone')->get();
        $checkpointtwo = DB::table('checkpointtwo')->get();
        $checkpointthree = DB::table('checkpointthree')->get();
        $dataCpone = $checkpointone->map(function($item){
            return [
                    'tanggal_cp_1' => $item->tanggal_cp_1,
                    'kondisi_cp_1' => $item->kondisi_cp_1,
                    'status_cp_1' => $item->status_cp_1,
                    'kota_cp_1' => $item->kota_cp_1,
            ];
        })->toArray();
        $dataCptwo = $checkpointtwo->map(function($item){
            return [
                    'tanggal_cp_2' => $item->tanggal_cp_2,
                    'kondisi_cp_2' => $item->kondisi_cp_2,
                    'status_cp_2' => $item->status_cp_2,
                    'kota_cp_2' => $item->kota_cp_2,
            ];
        })->toArray();
        $dataCpthree = $checkpointthree->map(function($item){
            return [
                    'tanggal_cp_3' => $item->tanggal_cp_3,
                    'kondisi_cp_3' => $item->kondisi_cp_3,
                    'status_cp_3' => $item->status_cp_3,
                    'kota_cp_3' => $item->kota_cp_3,
            ];
        })->toArray();
        $result = [];
        $length = max(count($dataCpone), count($dataCptwo), count($dataCpthree));

        for ($i = 0; $i < $length; $i++) {
            $result[$i] = [];

            if (isset($dataCpone[$i])) {
                $result[$i] += $dataCpone[$i];
            }

            if (isset($dataCptwo[$i])) {
                $result[$i] += $dataCptwo[$i];
            }

            if (isset($dataCpthree[$i])) {
                $result[$i] += $dataCpthree[$i];
            }
        }
        // dump($result[$id]["tanggal_cp_1"]);
        $pdf    = PDF::loadView('admin.laporan.cetak.cetak-tracking',[
            'result'  => $result[$id],
        ]);
        return $pdf->download("Detail_tracking_".$result[$id]['kota_cp_1'].".pdf");
    }
}
