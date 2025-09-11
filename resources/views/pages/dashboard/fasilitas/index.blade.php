@extends('layouts.dashboard')

@section('title', 'Data fasilitas')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2 fw-bold">Daftar fasilitas</h1>
        <a href="{{ route('dashboards.fasilitas.manage') }}" class="btn btn-primary">+ Tambah fasilitas</a>
    </div>

    <form method="GET" action="{{ route('dashboards.fasilitas') }}" class="mb-4">
        <div class="row g-2">
            <div class="col-auto">
                <input type="text" name="search" placeholder="Cari fasilitas..." value="{{ request('search') }}"
                       class="form-control" style="width: 300px;" />
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark">Cari</button>
            </div>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped bg-white shadow-sm rounded">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($fasilitas as $i => $item)
                    <tr>
                        <td>{{ $fasilitas->firstItem() + $i }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" class="img-thumbnail" style="height: 48px;" />
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                        <td>
                            <a href="{{ route('dashboards.fasilitas.manage', $item->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                            <form action="{{ route('dashboards.fasilitas.destroy', $item->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus fasilitas ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">Data tidak ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $fasilitas->links() }}
    </div>
</div>
@endsection
