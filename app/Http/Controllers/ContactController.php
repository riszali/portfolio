<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Message; // (Opsional) Buka komentar ini jika Anda sudah membuat tabel/model Message

class ContactController extends Controller
{
    /**
     * Menyimpan pesan dari halaman formulir kontak.
     */
    public function store(Request $request)
    {
        // 1. Validasi input form secara ketat
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. Simpan ke Database
        // Menggunakan Eloquent untuk menyimpan data yang divalidasi
        // Message::create($validated);

        // 3. Mengembalikan (redirect) pengguna ke halaman sebelumnya dengan session status sukses
        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah berhasil dikirim.');
    }
}