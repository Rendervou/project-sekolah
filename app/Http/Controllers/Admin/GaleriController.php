<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $path = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
    'judul' => $request->judul,
    'gambar' => $namaFileBaru, // Ubah dari 'foto' ke 'gambar'
]);


        return redirect()->route('galeri.index')->with('success', 'Galeri ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($galeri->foto);
            $path = $request->file('foto')->store('galeri', 'public');
            $galeri->foto = $path;
        }

        $galeri->judul = $request->judul;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Galeri diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        Storage::disk('public')->delete($galeri->foto);
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri dihapus.');
    }
}

