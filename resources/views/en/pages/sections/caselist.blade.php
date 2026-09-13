<section class="py-5">
    <div class="container">
        <h2 class="mb-5 text-center fw-bold text-gold">Our Public Cases</h2>
        <div class="row g-4">
            @foreach ([
            [
            'title' => 'Corporate Law & Bankruptcy',
            'desc' => 'We help you set up companies, handle mergers & acquisitions, and solve bankruptcy issues.',
            'img' => 'assets/images/caselist1.jpg'
            ],
            [
            'title' => 'Family & Labour Law',
            'desc' => 'Need help with divorce, inheritance, work contracts, or social security issues? We’ve got you covered.',
            'img' => 'assets/images/caselist2.jpg'
            ],
            [
            'title' => 'Litigation, Banking & Admin',
            'desc' => 'Handling civil/criminal cases, business disputes, and banking credit solutions.',
            'img' => 'assets/images/caselist3.jpg'
            ],
            ] as $case)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset($case['img']) }}" class="card-img-top" style="height: 220px; object-fit: cover;" alt="{{ $case['title'] }}">
                    <div class="card-body d-flex flex-column justify-content-between" style="background: rgba(0,0,0,0.50); border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                        <h5 class="card-title text-gold fw-semibold">{{ $case['title'] }}</h5>
                        <p class="card-text text-white">{{ $case['desc'] }}</p>
                        @php
                        $prefix = request()->segment(1);
                        @endphp
                        <a href="{{ route('practice.' . $prefix) }}" class="btn btn-gold btn-sm mt-auto align-self-start">Check It Out</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>