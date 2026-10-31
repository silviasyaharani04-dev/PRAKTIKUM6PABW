<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporBanjir; // Panggil model LaporBanjir

class LaporBanjirController extends Controller
{
    // Form publik bagi warga untuk melapor
    public function create()
    {
        return view('laporan.create');
    }

    // Menyimpan data laporan ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        // Simpan ke database
        LaporBanjir::create([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('laporan.create')->with('success', 'Laporan berhasil dikirimkan kepada BPBD.');
    }

    // Halaman daftar laporan yang diproteksi untuk petugas
    public function index()
    {
        // Ambil semua data laporan dari database
        $laporans = LaporBanjir::latest()->get();
        return view('laporan.index', compact('laporans'));
    }
}