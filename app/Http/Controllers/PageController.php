<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // 1. Halaman Home
    public function home(Request $request)
    {
        $user = $request->query('user', 'Hoshida Ahmad');
        return view('home', compact('user'));
    }

    // 2. Detail Profil Mahasiswa
    public function mahasiswaDetail($nrp)
    {
        return view('mahasiswa', [
            'nrp' => $nrp,
            'nama' => 'Hoshida Ahmad Tsalatsu Fadlulloh',
            'jurusan' => 'Informatika',
            'kampus' => 'Institut Teknologi Sepuluh Nopember',
            'semester' => 5,
            'ipk' => 3.75
        ]);
    }

    // 3. Ide Platform Agentic AI
    public function agentTema($tema = null)
    {
        if (empty($tema)) {
            $tema = 'General Assistant Agent';
        }

        return view('agent', [
            'tema' => $tema
        ]);
    }

    // 4. Kalkulator IPK
    public function hitungIpk($ipk1, $ipk2)
    {
        $ipk1 = (float) $ipk1;
        $ipk2 = (float) $ipk2;
        $ipkAkhir = ($ipk1 + $ipk2) / 2;

        return view('ipk', [
            'ipk1' => $ipk1,
            'ipk2' => $ipk2,
            'ipkAkhir' => $ipkAkhir
        ]);
    }
}