@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row">
        {{-- Gallery --}}
        <div class="col-md-4 mb-4">
            <div class="card border-primary shadow-sm h-100">
                <div class="card-body bg-light">
                    <h5 class="card-title text-primary">Kelola Pengacara / Galeri</h5>
                    <p class="card-text">Tambah, Edit, atau Hapus data pengacara pada galeri.</p>
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-primary btn-sm">Lihat Detailnya</a>
                </div>
            </div>
        </div>

        {{-- Reviews --}}
        <div class="col-md-4 mb-4">
            <div class="card border-success shadow-sm h-100">
                <div class="card-body bg-light">
                    <h5 class="card-title text-success">Ulasan Klien</h5>
                    <p class="card-text">Lihat dan moderasi ulasan klien yang pernah bekerja sama secara langsung.</p>
                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-success btn-sm">Lihat Ulasan</a>
                </div>
            </div>
        </div>

        {{-- Users --}}
        <div class="col-md-4 mb-4">
            <div class="card border-warning shadow-sm h-100">
                <div class="card-body bg-light">
                    <h5 class="card-title text-warning">Kelola Pengguna</h5>
                    <p class="card-text">Kelola akun pengguna yang terdaftar.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-warning btn-sm text-white">Kelola Pengguna</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection