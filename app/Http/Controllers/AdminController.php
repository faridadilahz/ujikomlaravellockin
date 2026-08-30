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

        // 1. Ambil data berita dan beri tipe 'berita'
        $beritas = Beritas::all()->map(function ($item) {
            $item->post_type = 'berita';
            return $item;
        });

        // 2. Ambil data galeri dan beri tipe 'galeri'
        $galeris = Galeris::all()->map(function ($item) {
            $item->post_type = 'galeri';
            return $item;
        });

        // 3. Gabungkan, urutkan berdasarkan tanggal terbaru, lalu ambil 3 saja
        $recentPosts = $beritas->concat($galeris)
            ->sortByDesc('created_at')
            ->take(3);

        // Ambil data paling terakhir untuk info "terakhir posting" di stat card
        $lastBerita = Beritas::latest()->first();
        $lastGaleri = Galeris::latest()->first();

        return view('admin.dasbor', compact(
            'totalBerita',
            'totalGaleri',
            'lastBerita',
            'lastGaleri',
            'recentPosts'
        ));
    }
}
