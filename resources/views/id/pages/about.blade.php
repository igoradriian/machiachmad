@extends('id.layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="mb-4 fw-bold text-gold" data-aos="fade-up">Tentang Machi Achmad & Partners Law Firm</h1>
        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
            Firma hukum profesional sejak 2019, melayani masyarakat & perusahaan dengan integritas tinggi di seluruh Indonesia.
        </p>

        {{-- SECTION: Gambar Firma + Deskripsi di bawah --}}
        <div class="row justify-content-center mb-5">
            <div class="col-md-6" data-aos="zoom-in">
                <img src="/assets/images/hero.png" class="img-fluid rounded-4 shadow mb-3" alt="Firma Hukum" style="max-height: 320px; object-fit: cover;">
                <div class="text-center small text-white">
                    <h5 class="text-gold fw-semibold">Profesional & Terpercaya</h5>
                    <p>Kami memberikan layanan hukum yang berizin, berpengalaman, dan dapat dipercaya oleh klien individu maupun korporasi. Ditangani langsung oleh lawyer dengan komitmen tinggi.</p>
                </div>
            </div>
        </div>

        {{-- SECTION: Logo & Pilar bersampingan dengan gambar lebih kecil --}}
        <div class="row mb-5">
            <div class="col-md-6 text-start text-md-center mb-4 mb-md-0" data-aos="fade-right">
                <img src="/assets/images/logo.jpg" class="img-fluid rounded-4 shadow mb-3" alt="Makna Logo Firma" style="max-height: 250px;">
                <h5 class="text-gold fw-semibold mb-3">Makna Logo Kami</h5>
                <ul class="list-unstyled ps-3 ps-md-0">
                    <li class="mb-2"><strong class="text-gold">Hitam</strong> — Permasalahan hukum & kekuatan dalam penyelesaiannya.</li>
                    <li class="mb-2"><strong class="text-gold">Emas</strong> — Simbol kemakmuran & profesionalitas tanpa diskriminasi.</li>
                    <li class="mb-2"><strong class="text-gold">Merah</strong> — Supremasi hukum yang harus lebih tinggi dari segalanya.</li>
                    <li class="mb-2"><strong class="text-gold">Hitam & Emas sejajar</strong> — Keseimbangan hak, kewajiban, dan integritas profesional.</li>
                </ul>
            </div>
            <div class="col-md-6 text-start text-md-center" data-aos="fade-left">
                <img src="/assets/images/symbol.jpg" class="img-fluid rounded-4 shadow mb-3" alt="Pilar Hukum Indonesia" style="max-height: 250px;">
                <h5 class="text-gold fw-semibold mb-3">Berlandaskan Nilai Hukum Bangsa</h5>
                <p>Kami berkomitmen pada prinsip hukum Indonesia berdasarkan Pancasila & UUD 1945 melalui pilar Catur Wangsa: Hakim, Jaksa, Polisi, & Advokat.</p>
            </div>
        </div>

        {{-- SECTION: Tim Lawyer di tengah bawah --}}
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
                <img src="/assets/images/lawyer-team.jpg" class="img-fluid rounded-4 shadow mb-3" alt="Tim Lawyer" style="max-height: 350px; object-fit: cover;">
                <h5 class="text-gold fw-semibold mb-3">Keahlian dalam Kompleksitas Hukum</h5>
                <p>Tim kami terdiri dari lawyer berpengalaman dalam bidang hukum bisnis, perdata, dan litigasi. Kami mengutamakan pendekatan strategis dan rahasia, serta menjaga keadilan dan keseimbangan klien.</p>
            </div>
        </div>

        {{-- CTA --}}
        <div class="mt-5" data-aos="zoom-in">
            <a href="https://wa.me/6281299610223" target="_blank" class="btn btn-gold btn-lg px-5 py-3 shadow">Konsultasi Sekarang</a>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection