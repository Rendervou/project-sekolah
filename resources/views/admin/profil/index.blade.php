@extends('layouts.app')

@section('content')
    <div class="p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Data Profil Sekolah</h1>

        <a href="{{ route('profil.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Profil</a>

        <table class="w-full mt-6 border border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">Nama Sekolah</th>
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
                            <form action="{{ route('profil.destroy', $profil->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
