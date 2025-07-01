@extends('layouts.landing')


@section('content')
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow p-4 w-100" style="max-width: 420px;">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Login Sekolah</h3>
            <p class="text-muted">Masuk untuk melanjutkan</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Ingat Saya</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">Belum punya akun? Hubungi admin sekolah.</small>
        </div>
    </div>
</div>
@endsection
