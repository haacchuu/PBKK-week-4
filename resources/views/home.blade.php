@extends('layouts.app')

@section('title', 'Home - Profile Akademis')

@section('content')

    <!-- Challenge Week 4: Banner Sambutan Dinamis -->
    @isset($user)
        <x-status-banner tipe="success">
            Selamat datang kembali, <strong>{{ $user }}</strong>!
        </x-status-banner>
    @endisset

    <!-- Hero Section Asli Anda -->
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
        <h1 class="display-5 fw-bold text-primary">Selamat Datang!</h1>
        <p class="fs-4">
            Selamat datang di aplikasi profile akademis mahasiswa Institut Teknologi Sepuluh Nopember.
        </p>
    </div>

    <!-- Card Grid Asli Anda Menggunakan Component / Styling Bootstrap -->
    <div class="row g-4">

        <!-- Card 1: Profil Mahasiswa -->
        <div class="col-md-4">
            <x-info-card judul="Profil Mahasiswa" tipe="primary">
                <p>Lihat informasi lengkap mahasiswa berdasarkan NRP.</p>
                <a class="btn btn-primary"
                   href="{{ route('mahasiswa.detail', ['nrp' => '1234567890']) }}">
                   Lihat Profil
                </a>
            </x-info-card>
        </div>

        <!-- Card 2: Agentic AI -->
        <div class="col-md-4">
            <x-info-card judul="Agentic AI" tipe="info">
                <p>Jelajahi ide platform Agentic AI berdasarkan tema.</p>
                <a class="btn btn-info text-white"
                   href="{{ route('agent.tema') }}">
                   Buka Agent AI
                </a>
            </x-info-card>
        </div>

        <!-- Card 3: Kalkulator IPK -->
        <div class="col-md-4">
            <x-info-card judul="Kalkulator IPK" tipe="success">
                <p>Hitung rata-rata IPK dari dua semester.</p>
                <a class="btn btn-success"
                   href="{{ route('ipk.hitung', ['ipk1' => 3.50, 'ipk2' => 3.80]) }}">
                   Hitung IPK
                </a>
            </x-info-card>
        </div>

    </div>

@endsection