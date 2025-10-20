<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Jurusan; // ✅ Tambahkan ini




class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function profil()
    {
    $profil = Profil::first(); // Ambil 1 data profil dari DB
    return view('public.profil', compact('profil'));
    }

    public function jurusan()
    {
         $jurusans = Jurusan::all();
         return view('public.jurusan', compact('jurusans'));
    }

    public function galeri()
    {
        return view('public.galeri');
    }

    public function berita()
    {
        return view('public.berita');
    }

    public function kontak()
    {
        return view('public.kontak');
    }
}
