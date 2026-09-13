@php $lang = 'en'; @endphp

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container fade-page">
        <a class="navbar-brand fw-bold text-black" href="{{ route('home.en') }}">
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
                <li class="nav-item"><a class="nav-link {{ request()->is('en') ? 'active' : '' }}" href="{{ route('home.en') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('en/about') ? 'active' : '' }}" href="{{ route('about.en') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('en/practice') ? 'active' : '' }}" href="{{ route('practice.en') }}">Services</a></li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('en/gallery') ? 'active' : '' }}" href="{{ route('gallery.index.en') }}">
                        Gallery
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link {{ request()->is('en/news') ? 'active' : '' }}" href="{{ route('news.en') }}">News</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('en/contact') ? 'active' : '' }}" href="{{ route('contact.en') }}">Contact</a></li>

                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle text-black fw-medium" href="#" id="langDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        🌐 Language: EN
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li>
                            <a class="dropdown-item lang-switch" href="{{ url('id/' . request()->segment(2)) }}">🇮🇩 Indonesia</a>
                        </li>
                        <li><a class="dropdown-item active" href="#">🇬🇧 English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>