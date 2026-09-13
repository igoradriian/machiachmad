@extends('en.layouts.app')

@section('title', 'Our Services')

@section('content')
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h1 class="mb-4 text-gold">Our Legal Services</h1>
        <p class="mb-5">We offer professional legal solutions in various key practice areas, explained in a way that everyone can easily understand.</p>

        <div class="row g-4">
            @foreach ([
            ['title' => 'Corporate Law', 'desc' => 'Company setup, articles of association changes, mergers & acquisitions, and legal advice for shareholders & directors.', 'img' => 'assets/images/practice1.jpg'],
            ['title' => 'Insolvency & Bankruptcy', 'desc' => 'Assistance with bankruptcy, debt restructuring, and financial evaluations as curators or administrators.', 'img' => 'assets/images/practice2.jpg'],
            ['title' => 'Labour Law', 'desc' => 'Drafting employment contracts, company rules, severance pay, social security, and mediation of labor disputes.', 'img' => 'assets/images/practice3.jpg'],
            ['title' => 'Marriage & Family', 'desc' => 'Prenuptial agreements, divorce, inheritance, and other family law documents.', 'img' => 'assets/images/practice4.jpg'],
            ['title' => 'Administrative Law', 'desc' => 'Negotiation & business contracts, company acquisitions, and resolving administrative disputes.', 'img' => 'assets/images/practice5.jpg'],
            ['title' => 'Litigation', 'desc' => 'Legal representation in court, arbitration, criminal/civil cases, IP, and commercial disputes.', 'img' => 'assets/images/practice6.jpg'],
            ['title' => 'Banking Law', 'desc' => 'Support with credit & credit cards, solutions for paying off loans with discounts up to 70%, and other banking legal issues.', 'img' => 'assets/images/practice7.jpg'],
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
            <i class="fab fa-whatsapp me-2"></i> Get in Touch Now via WhatsApp
        </a>
    </div>
</section>
@endsection