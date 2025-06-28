<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    // Metode ini tetap, untuk menampilkan halaman statis
    public function welcome()
    {
        // Siapkan data nama dan npm Anda di sini
        $namaLengkap = "Puderta Sinulingga"; // <-- Ganti dengan nama Anda
        $npmMahasiswa = "228160068";   // <-- Ganti dengan NPM Anda

        // Kirim data tersebut ke view 'welcome'
        return view('welcome', [
            'nama' => $namaLengkap,
            'npm'  => $npmMahasiswa
        ]);
    }
}
