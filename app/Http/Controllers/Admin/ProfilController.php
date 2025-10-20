<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();
        return view('admin.profil.index', compact('profils'));
    }

    public function create()
    {
        return view('admin.profil.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_sekolah' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'nullable',
            'motto' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_profil', 'public');
        }

        Profil::create($data);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $data = $request->validate([
            'nama_sekolah' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'nullable',
            'motto' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($profil->foto) {
                Storage::disk('public')->delete($profil->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_profil', 'public');
        }

        $profil->update($data);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);

        if ($profil->foto) {
            Storage::disk('public')->delete($profil->foto);
        }

        $profil->delete();

        return back()->with('success', 'Profil berhasil dihapus.');
    }
}
