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
        // Ambil 6 galeri terbaru untuk ditampilkan di beranda
        $galeris = Galeris::latest()->take(3)->get();

        return view('guest.beranda', compact('beritas', 'galeris'));
    }

    public function berita()
    {
        $beritas = Beritas::latest()->get();
        return view('guest.berita', compact('beritas'));
    }

    public function showBerita($id)
    {
        $berita = Beritas::findOrFail($id);

        $beritaLain = Beritas::where('id', '!=', $id)->latest()->take(6)->get();
        return view('guest.detailberita',compact('berita', 'beritaLain'));
    }

    public function galeri()
    {
        // Ambil semua galeri untuk halaman galeri
        $galeris = Galeris::latest()->get();
        return view('guest.galeri', compact('galeris'));
    }

        public function showGaleri($id)
    {
        $galeri = Galeris::findOrFail($id);

        $galeriLain = Galeris::where('id', '!=', $id)->latest()->take(6)->get();
        return view('guest.detailgaleri',compact('galeri', 'galeriLain'));
    }
}