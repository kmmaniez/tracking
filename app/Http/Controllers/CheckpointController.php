<?php

namespace App\Http\Controllers;

use App\Models\CheckpointOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckpointController extends Controller
{
    //
    public function index()
    {
        $title_page = 'Checkpoint';
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
        return view('admin.checkpoint.index', compact('title_page','result', 'checkpointone','checkpointtwo','checkpointthree'));
    }
    public function store_cp_1(Request $request)
    {
        // dd($request->all());
        DB::table('checkpointone')->insert([
            'tanggal_cp_1' => $request->tanggal_cp_1,
            'kondisi_cp_1'=> $request->kondisi_cp_1,
            'status_cp_1'=> $request->status_cp_1,
            'kota_cp_1'=> $request->kota_cp_1,
        ]);
        return redirect()->back();
    }
    public function store_cp_2(Request $request)
    {
        // dd($request->all());
        DB::table('checkpointtwo')->insert([
            'tanggal_cp_2' => $request->tanggal_cp_2,
            'kondisi_cp_2'=> $request->kondisi_cp_2,
            'status_cp_2'=> $request->status_cp_2,
            'kota_cp_2'=> $request->kota_cp_2,
        ]);
        return redirect()->back();
    }
    public function store_cp_3(Request $request)
    {
        // dd($request->all());
        DB::table('checkpointthree')->insert([
            'tanggal_cp_3' => $request->tanggal_cp_3,
            'kondisi_cp_3'=> $request->kondisi_cp_3,
            'status_cp_3'=> $request->status_cp_3,
            'kota_cp_3'=> $request->kota_cp_3,
        ]);
        return redirect()->back();
    }
}
