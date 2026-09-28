@extends('layouts.app')

@section('title', 'Agentic AI Platform')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Agentic AI Platform</h2>
        
        @if(request('mode') === 'dark')
            <a href="{{ route('agent.tema', ['tema' => $tema ?? 'general']) }}" class="btn btn-outline-light btn-sm">
                ☀️ Mode Terang
            </a>
        @else
            <a href="{{ route('agent.tema', ['tema' => $tema ?? 'general', 'mode' => 'dark']) }}" class="btn btn-outline-dark btn-sm">
                🌙 Mode Gelap
            </a>
        @endif
    </div>

    <x-info-card :judul="'Tema: ' . ucfirst($tema ?? 'General')" tipe="info">
        
        <p class="fs-5">
            Konsep platform Agentic AI dengan tema 
            <span class="badge bg-primary fs-6">{{ $tema ?? 'General' }}</span>.
        </p>

        <p class="text-muted">
            Sistem ini dapat dikembangkan menjadi agent yang mampu membantu pengguna secara otomatis berdasarkan konteks, kebutuhan, dan tujuan tertentu.
        </p>

        <hr>

        <div class="d-flex gap-2 flex-wrap mt-3">
            <a class="btn btn-outline-primary"
               href="{{ route('agent.tema', ['tema' => 'education', 'mode' => request('mode')]) }}">
               📚 Tema Education
            </a>

            <a class="btn btn-outline-success"
               href="{{ route('agent.tema', ['tema' => 'healthcare', 'mode' => request('mode')]) }}">
               🏥 Tema Healthcare
            </a>

            <a class="btn btn-secondary"
               href="{{ route('home') }}">
               ⬅️ Kembali
            </a>
        </div>

    </x-info-card>

@endsection