<section class="py-5">
    <div class="container">
        <h2 class="mb-5 text-center fw-bold text-gold">Daftar Kasus Publik</h2>
        <div class="row g-4">
            @foreach ([
            [
            'title' => 'Hukum Korporasi & Kepailitan',
            'desc' => 'Layanan pembentukan perusahaan, merger-akuisisi, hingga solusi masalah kepailitan.',
            'img' => 'assets/images/caselist1.jpg'
            ],
            [
            'title' => 'Hukum Keluarga & Perburuhan',
            'desc' => 'Pendampingan perceraian, warisan, kontrak kerja, perselisihan dan jaminan sosial.',
            'img' => 'assets/images/caselist2.jpg'
            ],
            [
            'title' => 'Litigasi, Perbankan & Administrasi',
            'desc' => 'Penanganan perkara perdata/pidana, sengketa bisnis, dan solusi kredit perbankan.',
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
                        <a href="{{ route('practice.' . $prefix) }}" class="btn btn-gold btn-sm mt-auto align-self-start">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>