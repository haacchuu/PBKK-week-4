<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profile Akademis')</title>
    
    <!-- Integrasi Aset Vite Bootstrap / CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="{{ request('mode') === 'dark' ? 'bg-dark text-white' : 'bg-light text-dark' }}">

                <!-- Navbar Global -->
<nav class="navbar navbar-expand-lg {{ request('mode') === 'dark' ? 'navbar-dark bg-secondary' : 'navbar-dark bg-primary' }}">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">ITS Academic Profile</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" 
                   href="{{ route('home') }}">Home</a>
                
                <a class="nav-link {{ request()->routeIs('mahasiswa.detail') ? 'active fw-bold' : '' }}" 
                   href="{{ route('mahasiswa.detail', ['nrp' => '5025241174']) }}">Profil Mahasiswa</a>
                
                <a class="nav-link {{ request()->routeIs('agent.tema') ? 'active fw-bold' : '' }}" 
                   href="{{ route('agent.tema') }}">Agent AI</a>
            </div>
        </div>
    </div>
</nav>

    </nav>

    <!-- Tempat Menyisipkan Konten Halaman Anak -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer Global ITS -->
    <footer class="text-center py-4 border-top mt-auto {{ request('mode') === 'dark' ? 'bg-secondary text-white' : 'bg-white text-muted' }}">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Departemen Teknik Informatika ITS</p>
        </div>
    </footer>

</body>
</html>