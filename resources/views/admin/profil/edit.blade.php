@extends('layouts.app')

@section('content')
<div class="p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Profil Sekolah</h1>

    <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label>Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="w-full border p-2 rounded" value="{{ $profil->nama_sekolah }}" required>
        </div>

        <div>
            <label>Alamat</label>
            <textarea name="alamat" class="w-full border p-2 rounded" required>{{ $profil->alamat }}</textarea>
        </div>

        <div>
            <label>Visi</label>
            <textarea name="visi" class="w-full border p-2 rounded" required>{{ $profil->visi }}</textarea>
        </div>

        <div>
            <label>Misi</label>
            <textarea name="misi" class="w-full border p-2 rounded">{{ $profil->misi }}</textarea>
        </div>

        <div>
            <label>Motto</label>
            <input type="text" name="motto" class="w-full border p-2 rounded" value="{{ $profil->motto }}" required>
        </div>

        <div>
            <label>Foto Saat Ini:</label><br>
            @if($profil->foto)
                <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Profil" class="w-32 rounded mb-2">
            @else
                <p><i>Tidak ada foto</i></p>
            @endif
        </div>

        <div>
            <label>Ganti Foto (opsional)</label>
            <input type="file" name="foto" class="w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
