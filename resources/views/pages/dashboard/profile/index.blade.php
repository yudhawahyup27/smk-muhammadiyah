@extends('layouts.dashboard')

@section('title', "Profile Data")

@section('content')

<div class="container">
    <h2>Form Profil</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.save') }}">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $profile->name ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Slogan</label>
            <input type="text" name="slogan" class="form-control" value="{{ old('slogan', $profile->slogan ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Tahun Berdiri</label>
            <input type="text" name="tahun_berdiri" class="form-control" value="{{ old('tahun_berdiri', $profile->tahun_berdiri ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Akreditasi</label>
            <input type="text" name="akreditasi" class="form-control" value="{{ old('akreditasi', $profile->akreditasi ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control description">{{ old('alamat', $profile->alamat ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Sejarah</label>
            <textarea name="sejarah" class="form-control description">{{ old('sejarah', $profile->sejarah ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Visi</label>
            <textarea name="visi" class="form-control description">{{ old('visi', $profile->visi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Misi</label>
            <textarea name="misi" class="form-control description">{{ old('misi', $profile->misi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $profile->email ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $profile->telepon ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Instagram</label>
            <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $profile->instagram ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Website</label>
            <input type="text" name="web" class="form-control" value="{{ old('web', $profile->web ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
