@extends('layouts.app')
@section('title', 'Buat Laporan Kejadian Banjir')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card shadow border-0">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <span class="badge bg-danger p-2 mb-2"><i class="fas fa-triangle-exclamation me-1"></i> Laporan Darurat Warga</span>
                    <h3 class="fw-bold text-dark">Lapor Kejadian Banjir</h3>
                    <p class="text-muted small">Warga dapat menyampaikan informasi situasi banjir tanpa harus melakukan login.</p>
                </div>

                <form method="POST" action="{{ route('laporan.store') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="namaPelapor" placeholder="Nama Lengkap" required>
                        <label for="namaPelapor"><i class="fas fa-user me-2 text-muted"></i>Nama Lengkap Pelapor</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi Banjir" required>
                        <label for="lokasi"><i class="fas fa-map-marker-alt me-2 text-muted"></i>Lokasi / Kec / Desa</label>
                    </div>

                    <div class="form-floating mb-4">
                        <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Detail Kejadian" style="height: 120px" required></textarea>
                        <label for="keterangan"><i class="fas fa-comment-dots me-2 text-muted"></i>Detail Ketinggian Air & Kondisi</label>
                    </div>

                    <button type="submit" class="btn btn-danger btn-custom w-100 shadow-sm">
                        <i class="fas fa-paper-plane me-2"></i> Kirim Laporan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection