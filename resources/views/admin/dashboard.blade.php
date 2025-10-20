@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Data Profil Sekolah</h2>

    <a href="{{ route('profil.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Profil</a>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Alamat</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profils as $profil)
                <tr>
                    <td class="border p-2">{{ $profil->nama_sekolah }}</td>
                    <td class="border p-2">{{ $profil->alamat }}</td>
                    <td class="border p-2">
                        <a href="{{ route('profil.edit', $profil->id) }}" class="text-blue-500">Edit</a> |
                        <form action="{{ route('profil.destroy', $profil->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
