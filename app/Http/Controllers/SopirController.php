<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;

class SopirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sopir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sopir::create([
            'nama' => 'Ucup',
            'telepon' => '081231231444',
            'merkhp' => 'Oppo'
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sopir $sopir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sopir $sopir)
    {
        //
    }
}
