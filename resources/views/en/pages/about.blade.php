@extends('en.layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="mb-4 fw-bold text-gold" data-aos="fade-up">About Machi Achmad & Partners Law Firm</h1>
        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
            Professional law firm since 2019, serving the community & companies with high integrity throughout Indonesia.
        </p>

        <div class="row justify-content-center mb-5">
            <div class="col-md-6" data-aos="zoom-in">
                <img src="/assets/images/hero.png" class="img-fluid rounded-4 shadow mb-3" alt="Law Firm" style="max-height: 320px; object-fit: cover;">
                <div class="text-center small text-white">
                    <h5 class="text-gold fw-semibold">Professional & Trusted</h5>
                    <p>We provide licensed, experienced, and trusted legal services to individual and corporate clients. Handled directly by lawyers with high commitment.</p>
                </div>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-md-6 text-start text-md-center mb-4 mb-md-0" data-aos="fade-right">
                <img src="/assets/images/logo.jpg" class="img-fluid rounded-4 shadow mb-3" alt="The meaning of logo" style="max-height: 250px;">
                <h5 class="text-gold fw-semibold mb-3">The meaning of our logo</h5>
                <ul class="list-unstyled ps-3 ps-md-0">
                    <li class="mb-2"><strong class="text-gold">Black</strong> — Legal issues & power in resolving them.</li>
                    <li class="mb-2"><strong class="text-gold">Gold</strong> — Symbol of prosperity & professionalism without discrimination.</li>
                    <li class="mb-2"><strong class="text-gold">Red</strong> — Supremasi hukum yang harus lebih tinggi dari segalanya.</li>
                    <li class="mb-2"><strong class="text-gold">Black & Gold aligned</strong> — The supremacy of law must be higher than anything else.</li>
                </ul>
            </div>
            <div class="col-md-6 text-start text-md-center" data-aos="fade-left">
                <img src="/assets/images/symbol.jpg" class="img-fluid rounded-4 shadow mb-3" alt="Indonesian Law" style="max-height: 250px;">
                <h5 class="text-gold fw-semibold mb-3">Based on Nation's Legal Values</h5>
                <p>We are committed to the principles of Indonesian law based on Pancasila & the 1945 Constitution through the pillars of Catur Wangsa: Judges, Prosecutors, Police, & Advocates.</p>
            </div>
        </div>


        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
                <img src="/assets/images/lawyer-team.jpg" class="img-fluid rounded-4 shadow mb-3" alt="Lawyer Team" style="max-height: 350px; object-fit: cover;">
                <h5 class="text-gold fw-semibold mb-3">Expertise in Legal Complexity</h5>
                <p>Our team consists of experienced lawyers in business, civil and litigation law. We prioritize a strategic and confidential approach, and maintain fairness and balance for clients.</p>
            </div>
        </div>

        {{-- CTA --}}
        <div class="mt-5" data-aos="zoom-in">
            <a href="https://wa.me/6281299610223" target="_blank" class="btn btn-gold btn-lg px-5 py-3 shadow">Consult Now</a>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection