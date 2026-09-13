@extends('admin.layouts.app')

@section('title', 'Edit Pengacara')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Edit Data Pengacara</h1>

    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="language" class="form-label">Bahasa</label>
            <select name="language" class="form-select" required>
                <option value="id">🇮🇩 Bahasa Indonesia</option>
                <option value="en">🇬🇧 English</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="lawyer_name" value="{{ $gallery->lawyer_name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Foto Baru (opsional)</label>
            <input type="file" name="photo" class="form-control" accept="image/*">
            <img src="{{ asset('storage/' . $gallery->photo) }}" width="100" class="mt-2">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" rows="4" class="form-control" required>{{ $gallery->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection