<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('admin.kendaraan.index', compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'plat' => 'required',
            'warna' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kendaraan = new Kendaraan();
        $kendaraan->nama_kendaraan = $request->nama;
        $kendaraan->plat_kendaraan = $request->plat;
        $kendaraan->warna_kendaraan = $request->warna;
        $kendaraan->save();

        return redirect(route('kendaraan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('admin.kendaraan.edit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        Kendaraan::where('id', $kendaraan->id)->update([
            'nama_kendaraan' => $request->nama ,
            'plat_kendaraan' => $request->plat,
            'warna_kendaraan' => $request->warna
        ]);
        return redirect(route('kendaraan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return redirect(route('kendaraan.index'));
    }
}
