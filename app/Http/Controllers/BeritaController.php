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

    public function store(Request $request)
    {
        $request->validate([
            'judulberita' => 'required|max:255',
            'deskripsiberita' => 'required',
            'kategoriberita' => 'required',
            'imageberita' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $imagePath = $request->file('imageberita')->store('berita', 'public');

        Beritas::create([
            'judulberita' => $request->judulberita,
            'deskripsiberita' => $request->deskripsiberita,
            'kategoriberita' => $request->kategoriberita,
            'imageberita' => $imagePath,
        ]);

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diposting!');
    }

    public function edit($id)
    {
        $berita = Beritas::findOrFail($id);
        return view('admin.editberita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Beritas::findOrFail($id);

        $request->validate([
            'judulberita' => 'required|max:255',
            'deskripsiberita' => 'required',
            'kategoriberita' => 'required',
            'imageberita' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($request->hasFile('imageberita')) {
            $imagePath = $request->file('imageberita')->store('berita', 'public');
            $berita->imageberita = $imagePath;
        }

        $berita->judulberita = $request->judulberita;
        $berita->deskripsiberita = $request->deskripsiberita;
        $berita->kategoriberita = $request->kategoriberita;
        $berita->save();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $berita = Beritas::findOrFail($id);
        $berita->delete();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil dihapus!');
    }
}
