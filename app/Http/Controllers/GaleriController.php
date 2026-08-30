<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeris;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeris::latest()->get();

        return view('admin.kelolagaleri', compact('galeris'));
    }

    public function create()
    {
        return view('admin.postinggaleri');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judulgaleri' => 'required|max:255',
            'kategorigaleri' => 'required',
            'imagegaleri' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $imagePath = $request->file('imagegaleri')->store('galeri', 'public');

        Galeris::create([
            'judulgaleri' => $request->judulgaleri,
            'kategorigaleri' => $request->kategorigaleri,
            'imagegaleri' => $imagePath,
        ]);

        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil diposting!');
    }

    public function show($id)
    {
        $galeri = Galeris::findOrFail($id);
        return view('admin.detailgaleri', compact('galeri'));
    }

    public function edit($id)
    {
        $galeri = Galeris::findOrFail($id);
        return view('admin.editgaleri', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeris::findOrFail($id);

        $request->validate([
            'judulgaleri' => 'required|max:255',
            'kategorigaleri' => 'required',
            'imagegaleri' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($request->hasFile('imagegaleri')) {
            $imagePath = $request->file('imagegaleri')->store('galeri', 'public');
            $galeri->imagegaleri = $imagePath;
        }

        $galeri->judulgaleri = $request->judulgaleri;
        $galeri->kategorigaleri = $request->kategorigaleri;
        $galeri->save();

        return redirect($request->input('redirect_to', route('admin.galeri')))->with('success', 'Galeri berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $galeri = Galeris::findOrFail($id);
        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil dihapus!');
    }
}
