@extends('layouts.app')
@section('title', 'Login Petugas BPBD')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-md-5">
        <div class="card shadow border-0">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="bg-danger text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-user-shield fa-2x"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Portal Login Petugas</h4>
                    <p class="text-muted small">Masukkan kredensial akun instansi BPBD Anda</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
                        <label for="floatingEmail"><i class="fas fa-envelope me-2 text-muted"></i>Email Instansi</label>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword"><i class="fas fa-lock me-2 text-muted"></i>Password</label>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label text-secondary small" for="remember">Ingat Sesi Saya</label>
                    </div>

                    <button type="submit" class="btn btn-danger btn-custom w-100 shadow-sm">
                        <i class="fas fa-sign-in-alt me-2"></i> Masuk Sistem
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection