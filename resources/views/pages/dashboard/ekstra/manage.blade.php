@extends('layouts.dashboard')

@section('title', isset($data->id) ? 'Edit Ekstrakurikuler' : 'Tambah Ekstrakurikuler')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            {{ isset($data->id) ? 'Edit Ekstrakurikuler' : 'Tambah Ekstrakurikuler' }}
        </h4>
    </div>
    <div class="card-body">
        <form
            action="{{ isset($data->id)
                ? route('dashboards.ekstra.update', $data->id)
                : route('dashboards.ekstra.store')
            }}"
            method="POST" enctype="multipart/form-data">

            @csrf
            @if(isset($data->id))
                @method('PUT')
            @endif

            {{-- Nama --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Ekstrakurikuler</label>
                <input type="text" name="nama" id="nama"
                    value="{{ old('nama', $data->nama) }}"
                    class="form-control @error('nama') is-invalid @enderror" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Gambar --}}
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar (Opsional)</label>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                @if(!empty($data->gambar))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $data->gambar) }}" class="img-thumbnail" width="120">
                    </div>
                @endif
            </div>

            {{-- Jadwal --}}
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="text" name="jadwal" id="jadwal"
                    value="{{ old('jadwal', $data->jadwal) }}"
                    class="form-control @error('jadwal') is-invalid @enderror" required>
                @error('jadwal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">

                   <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi"  id="description" class="form-control description @error('deskripsi') is-invalid @enderror" required rows="4">{{ old('deskripsi', $data->deskripsi) }}</textarea>
               @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('dashboards.ekstra') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
