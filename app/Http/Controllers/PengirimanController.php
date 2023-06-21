<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
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
}
