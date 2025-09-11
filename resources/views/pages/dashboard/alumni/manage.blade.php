@extends('layouts.dashboard')

@section('title', $alumni ? 'Edit Alumni' : 'Tambah Alumni')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="mb-0">{{ $alumni ? 'Edit Alumni' : 'Tambah Alumni' }}</h3>
            <small class="text-muted">{{ $alumni ? 'Perbarui data alumni' : 'Tambahkan data alumni baru' }}</small>
        </div>
    </div>
    <div class="card-body">
        {{-- Alert Messages --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboards.alumni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($alumni)
                <input type="hidden" name="id" value="{{ $alumni->id }}">
            @endif

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $alumni->name ?? '') }}" placeholder="Masukkan nama lengkap">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror"
                           accept="image/*">
                    @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if (!empty($alumni->photo))
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $alumni->photo) }}" class="rounded" width="100" />
                            <small class="text-muted d-block">Foto saat ini</small>
                        </div>
                    @endif
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Tahun Lulus <span class="text-danger">*</span></label>
                    <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror"
                           value="{{ old('tahun_lulus', $alumni->tahun_lulus ?? '') }}"
                           placeholder="Contoh: {{ date('Y') }}" min="1900" max="{{ date('Y') }}">
                    @error('tahun_lulus')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Angkatan <span class="text-danger">*</span></label>
                    <input type="number" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror"
                           value="{{ old('angkatan', $alumni->angkatan ?? '') }}"
                           placeholder="Contoh: {{ date('Y') - 3 }}" min="1900" max="{{ date('Y') }}">
                    @error('angkatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="">Pilih Status</option>
                        <option value="bekerja" {{ old('status', $alumni->status ?? '') == 'kerja' ? 'selected' : '' }}>Kerja</option>
                        <option value="kuliah" {{ old('status', $alumni->status ?? '') == 'kuliah' ? 'selected' : '' }}>Kuliah</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tempat <span class="text-danger">*</span></label>
                    <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror"
                           value="{{ old('tempat', $alumni->tempat ?? '') }}"
                           placeholder="Nama perusahaan atau universitas">
                    @error('tempat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jurusan <span class="text-danger">*</span></label>
                    <select name="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror">
                        <option value="">Pilih Jurusan</option>
                        @foreach($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ old('jurusan_id', $alumni->jurusan_id ?? '') == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('jurusan_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Caption</label>
                    <textarea name="caption" id="description" class="form-control description @error('caption') is-invalid @enderror"
                              rows="3" placeholder="Masukkan caption atau deskripsi tambahan">{{ old('caption', $alumni->caption ?? '') }}</textarea>
                    @error('caption')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('dashboards.alumni') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left me-2"></i>Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="ti ti-device-floppy me-2"></i>{{ $alumni ? 'Perbarui' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
