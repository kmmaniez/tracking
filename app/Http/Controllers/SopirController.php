<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SopirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sopir = Sopir::all();
        $title_page = 'Sopir';
        return view('admin.sopir.index', compact('sopir','title_page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title_page = 'Tambah Sopir';
        return view('admin.sopir.create', compact('title_page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sopir::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'merkhp' => $request->merkhp
        ]);
        return Redirect::to(route('sopir.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Sopir $sopir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sopir $sopir)
    {
        $title_page = 'Edit Sopir';
        return view('admin.sopir.edit', compact('sopir', 'title_page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sopir $sopir)
    {
        Sopir::where('id', $sopir->id)->update([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'merkhp' => $request->merkhp
        ]);
        return Redirect::to(route('sopir.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sopir $sopir)
    {
        $sopir->delete();
        return Redirect::to(route('sopir.index'));
    }
}
