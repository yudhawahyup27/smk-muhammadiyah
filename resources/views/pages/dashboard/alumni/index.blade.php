@extends('layouts.dashboard')

@section('title', 'Alumni')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="card-title">
            <h3 class="mb-0">Alumni</h3>
            <small class="text-muted">Kelola data alumni</small>
        </div>
        <div>
            <a href="{{ route('dashboards.alumni.manage') }}" class="btn btn-primary btn-lg shadow-sm">
                <i class="ti ti-plus me-2"></i>Tambah Alumni
            </a>
        </div>
    </div>

    <div class="card-body">
        {{-- Filter --}}
        <form method="GET" class="row mb-4">
            <div class="col-md-2">
                <select name="jurusan" class="form-control">
                    <option value="">Semua Jurusan</option>
                    @foreach($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}" {{ request('jurusan') == $jurusan->id ? 'selected' : '' }}>
                            {{ $jurusan->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <input type="text" name="tahun" class="form-control" placeholder="Tahun Lulus" value="{{ request('tahun') }}">
            </div>
            <div class="col-md-2">
                <input type="text" name="angkatan" class="form-control" placeholder="Angkatan" value="{{ request('angkatan') }}">
            </div>
            <div class="col-md-2">
                <select name="status" class="form-control">
                    <option value="">Semua Status</option>
                    <option value="kerja" {{ request('status') == 'kerja' ? 'selected' : '' }}>Kerja</option>
                    <option value="kuliah" {{ request('status') == 'kuliah' ? 'selected' : '' }}>Kuliah</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-secondary w-100">Filter</button>
            </div>
            <div class="col-md-2">
                <a href="{{ route('dashboards.alumni') }}" class="btn btn-outline-secondary w-100">Reset</a>
            </div>
        </form>

        {{-- Alert Messages --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Photo</th>
                        <th>Tahun Lulus</th>
                        <th>Angkatan</th>
                        <th>Status</th>
                        <th>Tempat</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alumnis as $key => $item)
                        <tr>
                            <td>{{ $alumnis->firstItem() + $key }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                @if($item->photo)
                                    <img src="{{ asset('storage/' . $item->photo) }}" width="50" class="rounded">
                                @else
                                    <span class="text-muted">Tidak Ada</span>
                                @endif
                            </td>
                            <td>{{ $item->tahun_lulus }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>
                                <span class="badge {{ $item->status == 'kerja' ? 'bg-success' : 'bg-primary' }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->jurusan->nama ?? '-' }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('dashboards.alumni.manage', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="ti ti-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('dashboards.alumni.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data {{ $item->name }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="ti ti-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-muted py-4">
                                <i class="ti ti-users-off fs-1 text-muted"></i>
                                <p class="mt-2">Data alumni tidak ditemukan.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if($alumnis->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Menampilkan {{ $alumnis->firstItem() }} sampai {{ $alumnis->lastItem() }} dari {{ $alumnis->total() }} data
                </div>
                <div>
                    {{ $alumnis->links() }}
                </div>
            </div>
        @endif
    </div>
</div>

@endsection
