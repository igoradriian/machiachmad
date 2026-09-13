@extends('en.layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<section class="py-5 bg-dark text-white text-center">
    <div class="container" data-aos="fade-up">
        <h1 class="mb-4 text-gold">Contact</h1>
        <p class="lead mb-5">Contact us for consultation or further information.</p>

        <div class="row text-start justify-content-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="bg-secondary bg-opacity-25 p-4 rounded shadow-sm h-100">
                    <h5 class="text-gold mb-3"><i class="fas fa-envelope me-2"></i>Email</h5>
                    <p>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=legal.machiachmadpartners@gmail.com"
                            target="_blank"
                            class="text-white">
                            legal.machiachmadpartners@gmail.com
                        </a>
                    </p>
                    <h5 class="text-gold mt-4 mb-3"><i class="fas fa-phone me-2"></i>Telephone / WhatsApp</h5>
                    <p><a href="https://wa.me/6281299610223" class="text-white" target="_blank">+62 812-9961-0223</a></p>

                    <h5 class="text-gold mt-4 mb-3"><i class="fas fa-map-marker-alt me-2"></i>Office Address</h5>
                    <p>Sona Topas Tower <br> St. Jenderal Sudirman Kav. 26 12th Floor, Unit 1202 <br>Setiabudi, South Jakarta <br> Special Capital Region of Jakarta 12920</p>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="ratio ratio-4x3 shadow-sm rounded overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.743991288061!2d106.81789!3d-6.2124947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5a954acb5a9%3A0xebda84f9360d6a75!2sMachi%20Achmad%20%26%20Partners!5e0!3m2!1sen!2sid!4v1713871234567!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <a href="https://wa.me/6281299610223" target="_blank" class="btn btn-gold btn-lg px-4 py-2 shadow-sm mt-3">
            <i class="fab fa-whatsapp me-2"></i>Contact via WhatsApp</a>
    </div>
</section>

<!-- AOS JS (jika belum dipasang) -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection