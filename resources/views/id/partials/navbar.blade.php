@php $lang = 'id'; @endphp

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container fade-page">
        <a class="navbar-brand fw-bold text-black" href="{{ route('home.id') }}">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" height="40" class="me-2">
            Machiachmad & Partners
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link {{ request()->is('id') ? 'active' : '' }}" href="{{ route('home.id') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('id/about') ? 'active' : '' }}" href="{{ route('about.id') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('id/practice') ? 'active' : '' }}" href="{{ route('practice.id') }}">Layanan</a></li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('in/gallery') ? 'active' : '' }}" href="{{ route('gallery.index.id') }}">
                        Galeri
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link {{ request()->is('id/news') ? 'active' : '' }}" href="{{ route('news.id') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('id/contact') ? 'active' : '' }}" href="{{ route('contact.id') }}">Kontak</a></li>

                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle text-black fw-medium" href="#" id="langDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        🌐 Bahasa: ID
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li><a class="dropdown-item active" href="#">🇮🇩 Indonesia</a></li>
                        <li>
                            <a class="dropdown-item lang-switch" href="{{ url('en/' . request()->segment(2)) }}">🇬🇧 English</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>