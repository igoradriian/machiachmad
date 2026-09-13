@extends('id.layouts.app')

@section('title', 'Detail Pengacara')

@section('content')
<section class="py-5 bg-dark text-white">
    <div class="container">
        <h1 class="text-center mb-4 text-gold">{{ $gallery->name }}</h1>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $gallery->photo) }}" alt="{{ $gallery->name }}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h4 class="text-white">Tentang Pengacara</h4>
                <p class="text-light">{{ $gallery->description }}</p>
            </div>
        </div>

        <hr class="text-secondary">

        {{-- Flash Messages --}}
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Error Validation --}}
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Form Ulasan --}}
        <h4 class="text-gold mb-3">Tinggalkan Penilaian</h4>

        @if(auth()->check() && auth()->user()->email === 'khususbuatadmin@gmail.com')
        <div class="alert alert-warning">Akun admin tidak dapat memberikan ulasan.</div>
        @else
        <form action="{{ route('gallery.review.id', $gallery->id) }}" method="POST" class="mb-5">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control"
                        value="{{ auth()->check() ? auth()->user()->name : old('name') }}"
                        {{ auth()->check() ? 'readonly' : 'required' }}>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ auth()->check() ? auth()->user()->email : old('email') }}"
                        {{ auth()->check() ? 'readonly' : 'required' }}>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Rating (1–5)</label>
                    <input type="number" name="rating" class="form-control" required min="1" max="5" value="{{ old('rating') }}">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Komentar</label>
                    <textarea name="comment" class="form-control" rows="4" required>{{ old('comment') }}</textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger mt-2">Kirim Penilaian</button>
                </div>
            </div>
        </form>
        @endif

        {{-- Ulasan Pengguna --}}
        <h4 class="text-gold mb-3">Ulasan Pengguna</h4>
        @forelse($gallery->reviews as $review)
        <div class="mb-4 p-3 bg-secondary text-white rounded shadow-sm">
            <div class="d-flex justify-content-between">
                <strong>{{ $review->name }}</strong>
                <small class="text-warning">Rating: {{ $review->rating }}/5</small>
            </div>
            <p class="mb-1">{{ $review->comment }}</p>
            <small class="text-light">Email: {{ $review->email }}</small>
        </div>
        @empty
        <p class="text-muted">Belum ada ulasan untuk pengacara ini.</p>
        @endforelse
    </div>
</section>
@endsection