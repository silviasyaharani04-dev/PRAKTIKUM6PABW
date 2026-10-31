@extends('layouts.app')
@section('title', 'Registrasi Petugas BPBD')

@section('content')
<div class="row justify-content-center py-3">
    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <h4 class="fw-bold text-dark">Registrasi Petugas Baru</h4>
                    <p class="text-muted small">Daftarkan akun petugas untuk mengelola laporan warga</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="regName" value="{{ old('name') }}" placeholder="Nama" required autofocus>
                        <label for="regName"><i class="fas fa-user me-2 text-muted"></i>Nama Lengkap</label>
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="regEmail" value="{{ old('email') }}" placeholder="Email" required>
                        <label for="regEmail"><i class="fas fa-envelope me-2 text-muted"></i>Alamat Email</label>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="regPassword" placeholder="Password" required>
                        <label for="regPassword"><i class="fas fa-key me-2 text-muted"></i>Password</label>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" name="password_confirmation" class="form-control" id="regPasswordConfirm" placeholder="Konfirmasi Password" required>
                        <label for="regPasswordConfirm"><i class="fas fa-check-double me-2 text-muted"></i>Ulangi Password</label>
                    </div>

                    <button type="submit" class="btn btn-danger btn-custom w-100 shadow-sm">
                        <i class="fas fa-user-plus me-2"></i> Buat Akun Petugas
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection