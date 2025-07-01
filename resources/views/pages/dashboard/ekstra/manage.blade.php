@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data
            </div>
        </div>
        <div class="card-body">
            <form action="">
            <div class="mb-3">
            <label for="nama" class="form-label">Nama Kegiatan</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="pembina" class="form-label">Pembina</label>
            <input type="text" name="pembina" id="pembina" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        <div class="mb-3">
            <label for="jadwal" class="form-label">Jadwal</label>
            <input type="text" name="jadwal" id="jadwal" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi"  id="description" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('dashboards.ekstra') }}" class="btn btn-secondary">Kembali</a>
    </form>
        </div>

    </div>
</div>
@endsection
