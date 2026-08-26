<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Galeris;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function beranda()
    {
        $beritas = Beritas::latest()->take(3)->get();
        return view('guest.beranda', compact('beritas'));
    }

    public function berita()
    {
        // Ambil semua berita untuk halaman daftar berita
        $beritas = Beritas::latest()->get();
        return view('guest.berita', compact('beritas'));
    }

    public function galeri()
    {
        // Ambil semua berita untuk halaman daftar berita
        $galeris = Galeris::latest()->get();
        return view('guest.galeri', compact('galeris'));
    }
}
