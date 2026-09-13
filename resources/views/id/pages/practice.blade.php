@extends('id.layouts.app')

@section('title', 'Layanan Kami')

@section('content')
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="mb-4 text-gold">Layanan Hukum Kami</h1>
        <p class="mb-5">Solusi hukum profesional di berbagai bidang praktik utama, disampaikan dengan cara yang mudah dipahami oleh semua kalangan.</p>

        <div class="row g-4">
            @foreach ([
            ['title' => 'Hukum Perusahaan', 'desc' => 'Pendirian perusahaan, perubahan AD, merger & akuisisi, serta nasihat hukum bagi pemegang saham & direksi.', 'img' => 'assets/images/practice1.jpg'],
            ['title' => 'Masalah kebangkrutan & Kepailitan', 'desc' => 'Pendampingan pailit, restrukturisasi utang, dan evaluasi keuangan sebagai kurator atau administrator.', 'img' => 'assets/images/practice2.jpg'],
            ['title' => 'Hukum Ketenagakerjaan', 'desc' => 'Penyusunan kontrak kerja, aturan perusahaan, pesangon, jaminan sosial, dan mediasi perselisihan kerja.', 'img' => 'assets/images/practice3.jpg'],
            ['title' => 'Hukum Perkawinan & Keluarga', 'desc' => 'Perjanjian pranikah, perceraian, warisan, dan dokumen hukum keluarga lainnya.', 'img' => 'assets/images/practice4.jpg'],
            ['title' => 'Hukum Administrasi', 'desc' => 'Negosiasi & kontrak bisnis, akuisisi perusahaan, dan penyelesaian sengketa administratif.', 'img' => 'assets/images/practice5.jpg'],
            ['title' => 'Litigasi', 'desc' => 'Perwakilan hukum di pengadilan, arbitrase, kasus pidana/perdata, HKI, dan niaga.', 'img' => 'assets/images/practice6.jpg'],
            ['title' => 'Hukum Perbankan', 'desc' => 'Pendampingan kredit & kartu kredit, solusi pelunasan bunga flat/discount hingga 70%, serta hukum perbankan lainnya.', 'img' => 'assets/images/practice7.jpg'],
            ] as $service)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset($service['img']) }}" class="card-img-top" style="height: 220px; object-fit: cover;" alt="{{ $service['title'] }}">
                    <div class="card-body d-flex flex-column justify-content-between" style="background: rgba(0,0,0,0.50); border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                        <h5 class="card-title text-gold fw-semibold">{{ $service['title'] }}</h5>
                        <p class="card-text text-white">{{ $service['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <a href="https://wa.me/6281299610223" class="btn btn-gold btn-lg mt-5" target="_blank" rel="noopener">
            <i class="fab fa-whatsapp me-2"></i> Konsultasi Sekarang via WhatsApp
        </a>
    </div>
</section>
@endsection