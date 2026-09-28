<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes - Tugas Week 4
|--------------------------------------------------------------------------
*/

// Route 1: Halaman Utama / Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Route 2: Detail Profil Mahasiswa
Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswaDetail'])
    ->where('nrp', '[0-9]{10}')
    ->name('mahasiswa.detail');

// Route 3: Ide Platform Agentic AI
Route::get('/agent/{tema?}', [PageController::class, 'agentTema'])->name('agent.tema');

// Route 4: Kalkulator IPK
Route::get('/hitung-ipk/{ipk1}/{ipk2}', [PageController::class, 'hitungIpk'])->name('ipk.hitung');

// Fallback Route untuk Halaman 404
Route::fallback(function () {
    return response()->view('404', [], 404);
});