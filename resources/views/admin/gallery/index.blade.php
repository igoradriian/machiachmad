@extends('admin.layouts.app')

@section('title', 'Kelola Galeri')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Daftar Pengacara</h1>

    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary mb-3">+ Tambah Pengacara</a>

    @if($galleries->isEmpty())
    <div class="alert alert-info">
        Belum ada data pengacara yang ditambahkan.
    </div>
    @else
    <table class="table table-bordered bg-white text-black">
        <thead class="bg-dark text-white">
            <tr>
                <th class="w-32 text-center">Foto</th>
                <th class="w-32 text-center">Nama</th>
                <th class="w-32 text-center">Deskripsi</th>
                <th class="w-32 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $lawyer)
            <tr>
                <td class="w-32 text-center"><img src="{{ asset('storage/' . $lawyer->photo) }}" width="80"></td>
                <td class="w-32 text-center">{{ $lawyer->lawyer_name }}</td>
                <td>{{ Str::limit($lawyer->description, 80) }}</td>
                <td class="w-32 text-center">
                    <a href="{{ route('admin.gallery.edit', $lawyer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.gallery.destroy', $lawyer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">← Kembali ke Dashboard</a>
</div>


@endsection