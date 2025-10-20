@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Hubungi Kami</h1>
    <form action="#" method="POST" class="space-y-4 max-w-md">
        @csrf
        <input type="text" name="nama" placeholder="Nama" class="w-full border rounded px-4 py-2">
        <input type="email" name="email" placeholder="Email" class="w-full border rounded px-4 py-2">
        <textarea name="pesan" placeholder="Pesan" class="w-full border rounded px-4 py-2"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Kirim</button>
    </form>
@endsection
