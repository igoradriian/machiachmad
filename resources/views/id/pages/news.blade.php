@extends('id.layouts.app')

@section('title', 'Berita Kami')

@section('content')
<section class="py-5 bg-dark text-center">
    <div class="container">
        <h1 class="mb-4 text-gold">Berita Terbaru</h1>
        <p class="mb-5 text-muted">Informasi, opini, dan update penting dari dunia hukum.</p>

        <div class="row g-4">
            @foreach([
            ['title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, praesentium sed recusandae dolores doloribus, eius illo iusto sit optio cum hic aspernatur vero quaerat labore voluptates atque excepturi error possimus.', 'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, praesentium. Qui nemo beatae necessitatibus cum pariatur officiis explicabo excepturi unde itaque! Ex deleniti nobis quaerat officia sed! Aut, porro laboriosam.', 'img' => 'assets/images/practice1.jpg'],
            ['title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, praesentium sed recusandae dolores doloribus, eius illo iusto sit optio cum hic aspernatur vero quaerat labore voluptates atque excepturi error possimus.', 'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, praesentium. Qui nemo beatae necessitatibus cum pariatur officiis explicabo excepturi unde itaque! Ex deleniti nobis quaerat officia sed! Aut, porro laboriosam.', 'img' => 'assets/images/practice1.jpg'],
            ] as $news)
            <div class="col-12">
                <div class="card border-0 shadow-sm d-flex flex-md-row align-items-stretch h-100 bg-transparent">
                    <div class="col-md-4" style="height: 250px;">
                        <img src="{{ $news['img'] }}" class="img-fluid w-100 h-100" style="object-fit: cover; border-radius: 12px 0 0 12px;" alt="{{ $news['title'] }}">
                    </div>
                    <div class="col-md-8 d-flex">
                        <div class="card-body text-start w-100" style="background: rgba(0, 0, 0, 0.5); padding: 1.25rem; border-radius: 0 12px 12px 0;">
                            <h5 class="card-title text-gold fw-semibold mb-2">{{ $news['title'] }}</h5>
                            <p class="card-text text-muted mb-0">{{ $news['content'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection