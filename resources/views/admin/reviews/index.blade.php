@extends('admin.layouts.app')

@section('title', 'Daftar Review Galeri')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Daftar Review Galeri</h1>

    @if(session('success'))
    <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif

    @if($reviews->isEmpty())
    <div class="alert alert-info">
        Belum ada review yang masuk.
    </div>
    @else
    <div class="overflow-auto">
        <table class="table table-bordered bg-white text-black w-full min-w-max">
            <thead class="bg-dark text-white">
                <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Rating</th>
                    <th class="text-center">Komentar</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr>
                    <td class="text-center">{{ $review->name }}</td>
                    <td class="text-center">{{ $review->email }}</td>
                    <td class="text-center">{{ $review->rating }}</td>
                    <td>{{ $review->comment }}</td>
                    <td class="text-center">
                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus review ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">← Kembali ke Dashboard</a>
</div>

@endsection