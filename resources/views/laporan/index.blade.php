@extends('layouts.app')
@section('title', 'Daftar Laporan Petugas')

@section('content')
<div class="card shadow border-0">
    <div class="card-header bg-dark text-white p-3 d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fw-bold"><i class="fas fa-list-check me-2"></i> Dashboard Kelola Laporan Banjir</h5>
        <span class="badge bg-success"><i class="fas fa-user-check me-1"></i> Terautentikasi</span>
    </div>
    <div class="card-body p-4">
        <div class="alert alert-light border shadow-sm mb-4">
            <i class="fas fa-info-circle text-primary me-2"></i> Selamat bertugas, <strong>{{ Auth::user()->name }}</strong>. Berikut adalah daftar pengaduan darurat dari warga:
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover align-middle border">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Waktu</th>
                        <th>Nama Pelapor</th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laporans as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->created_at->format('d M Y, H:i') }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->keterangan }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">Belum ada laporan masuk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection