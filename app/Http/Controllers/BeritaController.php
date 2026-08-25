<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
        public function index()
    {
        $beritas = Beritas::latest()->get();
        
        return view('admin.kelolaberita', compact('beritas')); 
    }

        public function create()
    {
        return view('admin.postingberita');
    }
}
