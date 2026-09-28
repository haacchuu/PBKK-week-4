@extends('layouts.app')

@section('title', 'Kalkulator Portofolio IPK')

@section('content')

    <div class="mb-4">
        <h2>Kalkulator IPK Akademis</h2>
        <p class="text-muted">Simulasi perhitungan Rata-Rata IPK Kumulatif.</p>
    </div>

    <x-info-card judul="Hasil Perhitungan IPK" tipe="success">
        <div class="row text-center my-3">
            <div class="col-md-4">
                <div class="p-3 border rounded bg-light">
                    <h6>IPK Semester 1</h6>
                    <span class="fs-3 fw-bold text-primary">{{ number_format($ipk1, 2) }}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border rounded bg-light">
                    <h6>IPK Semester 2</h6>
                    <span class="fs-3 fw-bold text-primary">{{ number_format($ipk2, 2) }}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border rounded bg-success text-white">
                    <h6>IPK Akhir / Rata-Rata</h6>
                    <span class="fs-3 fw-bold">{{ number_format($ipkAkhir, 2) }}</span>
                </div>
            </div>
        </div>

        <hr>

        <div class="mt-3">
            <a href="{{ route('home') }}" class="btn btn-secondary">
                ⬅️ Kembali ke Home
            </a>
        </div>
    </x-info-card>

@endsection