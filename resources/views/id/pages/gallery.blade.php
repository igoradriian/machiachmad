@extends('id.layouts.app')

@section('title', 'Galeri Pengacara')

@section('content')
<section class="py-5 text-center bg-dark text-white min-vh-100">
    <div class="container">
        <h1 class="mb-5" style="color: #FFD700;">Galeri Pengacara Kami</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse($galleries as $lawyer)
            <div class="col">
                <div class="card h-100 shadow border-0 text-white text-center p-3"
                    style="background-color: #2c2f33; border: 2px solid #FFD700; border-radius: 12px;">

                    {{-- Wrapper div untuk gambar --}}
                    <div style="background-color: #2c2f33; padding: 6px; border-radius: 8px; border: 2px solid #FFD700;">
                        <img src="{{ asset('storage/' . $lawyer->photo) }}"
                            class="img-fluid mx-auto d-block rounded"
                            alt="{{ $lawyer->lawyer_name }}"
                            style="max-height: 300px; object-fit: contain; background-color: #2c2f33;">
                    </div>

                    <h5 class="mt-3 mb-1 fw-bold" style="color: #FFD700;">{{ $lawyer->lawyer_name }}</h5>
                    <p class="text-light small">{{ Str::limit($lawyer->description, 80) }}</p>
                    <a href="{{ route('gallery.show.id', $lawyer->id) }}"
                        class="btn btn-sm mt-auto"
                        style="color: #FFD700; border: 1px solid #FFD700; background-color: transparent;">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                    <p class="text-muted mb-0">Belum ada pengacara yang ditampilkan.</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection