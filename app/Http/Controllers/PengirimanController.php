<?php

namespace App\Http\Controllers;

use App\Models\Checkpoint;
use App\Models\Kendaraan;
use App\Models\Pengiriman;
use App\Models\Sopir;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $listpengiriman = Pengiriman::all();
        $title_page = 'Pengiriman';
        // dump($listpengiriman);
        return view('admin.pengiriman.index', compact('listpengiriman', 'title_page'));
    }
    public function create()
    {
        $sopir = Sopir::all();
        $checkpointID = Checkpoint::all();
        $title_page = 'Pengiriman';
        return view('admin.pengiriman.create', compact('title_page','sopir','checkpointID'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Pengiriman::create([
            'nama' => $request->nama,
            'plat' => $request->plat,
            'id_supir' => $request->sopir,
            'idpaket' => $request->paket,
            'id_cp' => $request->checkpointid,
            'tujuan' => $request->tujuan,
            'quantity' => $request->quantity,
        ]);
        return redirect()->to(route('pengiriman.index'));
        // $table->string('nama');
        // $table->string('plat');
        // $table->foreignId('id_supir')->references('id')->on('sopirs')->cascadeOnDelete();
        // $table->string('idpaket');
        // $table->foreignId('id_cp')->references('id_cp')->on('checkpoints');
        // $table->string('tujuan');
        // $table->integer('quantity');
    }
    public function destroy(Pengiriman $pengiriman)
    {
        $pengiriman->delete();
        return redirect()->to(route('pengiriman.index'));
    }
}
