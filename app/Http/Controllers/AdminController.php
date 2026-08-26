<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Galeris;
use Illuminate\Http\Request;

class AdminController extends Controller
{
public function index()
{
    $totalBerita = Beritas::count();
    $totalGaleri = Galeris::count();

    // Ambil 1 data berita paling terakhir
    $lastBerita = Beritas::latest()->first();
    $lastGaleri = Galeris::latest()->first();

    return view('admin.dasbor', compact(
        'totalBerita', 
        'totalGaleri', 
        'lastBerita', 
        'lastGaleri'
    ));
}
}