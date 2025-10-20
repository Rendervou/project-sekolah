<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SMK Pesat</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar Admin -->
    <header class="bg-blue-700 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Panel - SMK Pesat</h1>
            <nav class="space-x-4">
                <a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a>
                <a href="{{ route('profil.index') }}" class="hover:underline">Profil</a>
                <a href="{{ route('jurusan.index') }}" class="hover:underline">Jurusan</a>
                <a href="{{ route('galeri.index') }}" class="hover:underline">Galeri</a>
                <a href="{{ route('berita.index') }}" class="hover:underline">Berita</a>
                <a href="{{ route('kontak.index') }}" class="hover:underline">Kontak</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:underline">Logout</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4 text-sm text-gray-600">
        &copy; {{ date('Y') }} SMK Pesat. All rights reserved.
    </footer>

</body>
</html>
