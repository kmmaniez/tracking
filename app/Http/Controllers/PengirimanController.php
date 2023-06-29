<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Sopir;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view('admin.pengiriman.index');
    }
    public function create()
    {
        $sopir = Sopir::all();
        return view('admin.pengiriman.create', compact('sopir'));
    }
}
