@extends('layouts.dashboard')

@section('title', isset($data->id) ? 'Edit fasilitas' : 'Tambah fasilitas')

@section('content')
<div class="container">

            <div class="card shadow">
                <div class="card-header text-primary">
                    <h4 class="mb-0">

                        {{ isset($data->id) ? 'Edit fasilitas' : 'Tambah fasilitas' }}
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ isset($data->id)
                        ? route('dashboards.fasilitas.update', $data->id)
                        : route('dashboards.fasilitas.store') }}"
                        method="POST" enctype="multipart/form-data">

                        @csrf
                        @if(isset($data->id))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">
                              Nama fasilitas
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                   name="nama"
                                   id="nama"
                                   value="{{ old('nama', $data->nama ?? '') }}"
                                   class="form-control @error('nama') is-invalid @enderror"
                                   placeholder="Masukkan nama fasilitas"
                                   required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label fw-semibold">
                            Gambar (Opsional)
                            </label>
                            <input type="file"
                                   name="gambar"
                                   id="gambar"
                                   class="form-control @error('gambar') is-invalid @enderror"
                                   accept="image/*">

                            @if(isset($data->gambar) && $data->gambar)
                                <div class="mt-2">
                                    <label class="form-label text-muted small">Gambar saat ini:</label>
                                    <div>
                                        <img src="{{ asset('storage/' . $data->gambar) }}"
                                             alt="Gambar fasilitas"
                                             class="img-thumbnail border-2"
                                             style="height: 80px; object-fit: cover;">
                                    </div>
                                </div>
                            @endif

                            @error('gambar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div class="form-text">
                                <i class="fas fa-info-circle me-1"></i>
                                Format yang didukung: JPG, PNG, GIF. Maksimal 2MB.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi" class="form-label fw-semibold">
                                Deskripsi
                            </label>
                            <textarea name="deskripsi"
                                      id="deskripsi"
                                      rows="4"
                                      class="form-control @error('deskripsi') description is-invalid @enderror"
                                      placeholder="Masukkan deskripsi fasilitas">{{ old('deskripsi', $data->deskripsi ?? '') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2 justify-content-end">
                            <a href="{{ route('dashboards.fasilitas') }}"
                               class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i>Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>
                                {{ isset($data->id) ? 'Update' : 'Simpan' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection
