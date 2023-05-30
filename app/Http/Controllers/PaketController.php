<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title_page = 'Paket';
        $paket = Paket::all();
        return view('admin.paket.index', compact('paket','title_page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title_page = 'Paket';
        return view('admin.paket.create', compact('title_page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required',
            'jenispaket' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kendaraan = new Paket();
        $kendaraan->nama_customer = $request->nama;
        $kendaraan->telepon = $request->telepon;
        $kendaraan->alamat = $request->alamat;
        $kendaraan->tujuan = $request->tujuan;
        $kendaraan->jenis_paket = $request->jenispaket;
        $kendaraan->save();

        return redirect(route('paket.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        $title_page = 'Paket';
        return view('admin.paket.edit', compact('title_page', 'paket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $paket)
    {
        Paket::where('id', $paket->id)->update([
            'nama_customer' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'tujuan' => $request->tujuan,
            'jenis_paket' => $request->jenispaket,
        ]);
        return redirect(route('paket.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        $paket->delete();
        return redirect(route('paket.index'));
    }
}
