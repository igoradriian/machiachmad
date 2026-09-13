@extends('admin.layouts.app')

@section('title', 'Tambah Pengacara')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Tambah Pengacara Baru</h1>

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Pengacara</label>
            <input type="text" name="lawyer_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control" accept="image/*" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection