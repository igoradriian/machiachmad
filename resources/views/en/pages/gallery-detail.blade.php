@extends('en.layouts.app')

@section('title', 'Lawyer Detail')

@section('content')
<section class="py-5 bg-dark text-white">
    <div class="container">
        <h1 class="text-center mb-4 text-gold">{{ $gallery->lawyer_name }}</h1>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $gallery->photo) }}" alt="{{ $gallery->lawyer_name }}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h4 class="text-white">About the Lawyer</h4>
                <p class="text-light">{{ $gallery->description }}</p>
            </div>
        </div>

        <hr class="text-secondary">

        <h4 class="text-gold mb-3">Leave a Review</h4>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('gallery.review.en', $gallery->id) }}" method="POST" class="mb-5">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Rating (1–5)</label>
                    <input type="number" name="rating" class="form-control" required min="1" max="5" value="{{ old('rating') }}">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Comment</label>
                    <textarea name="comment" class="form-control" rows="4" required>{{ old('comment') }}</textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger mt-2">Submit Review</button>
                </div>
            </div>
        </form>

        <h4 class="text-gold mb-3">User Reviews</h4>
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
        <p class="text-muted">No reviews available for this lawyer.</p>
        @endforelse
    </div>
</section>
@endsection