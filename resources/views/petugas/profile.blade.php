@extends('layouts.app')
@section('title', 'Profil Petugas BPBD')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card shadow border-0">
            <div class="card-header bg-danger text-white fw-bold p-3">
                <i class="fas fa-id-card me-2"></i>Informasi Akun Petugas Active
            </div>
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light border rounded-circle p-3 me-3 text-danger">
                        <i class="fas fa-user-shield fa-3x"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0">{{ Auth::user()->name }}</h4>
                        <span class="text-muted">{{ Auth::user()->email }}</span>
                    </div>
                </div>
                <hr>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <small class="text-muted d-block">Status Akun</small>
                        <span class="fw-bold text-success"><i class="fas fa-circle-check me-1"></i> Petugas Resmi BPBD</span>
                    </div>
                    <div class="col-sm-6">
                        <small class="text-muted d-block">Terdaftar Sejak</small>
                        <span class="fw-bold text-dark">{{ Auth::user()->created_at ? Auth::user()->created_at->diffForHumans() : 'Baru Saja' }}</span>
                    </div>
                </div>
                <div class="mt-4 pt-2">
                    <a href="{{ route('laporan.index') }}" class="btn btn-secondary btn-custom">
                        <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar Laporan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection