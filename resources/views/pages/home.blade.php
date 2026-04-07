@extends('layouts.app')

@section('konten')

<style>
    body {
        background: #0b0f19;
        color: #eaeaea;
        font-family: 'Poppins', sans-serif;
    }

    /* HERO SECTION */
    .hero {
        padding: 100px 20px 60px;
        text-align: center;
    }

    .hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.2rem;
        color: #aaa;
        margin-bottom: 30px;
    }

    .btn-cta {
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        color: #000;
        font-weight: 600;
        padding: 12px 35px;
        border-radius: 30px;
        border: none;
        transition: 0.3s;
    }

    .btn-cta:hover {
        transform: scale(1.05);
    }

    /* SERVICES SECTION */
    .services {
        padding: 80px 20px;
        max-width: 1200px;
        margin: auto;
    }

    .service-card {
        background: rgba(255,255,255,0.05);
        border-radius: 25px;
        padding: 30px;
        text-align: center;
        transition: 0.3s;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.1);
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    }

    .service-icon {
        font-size: 40px;
        color: #00f5ff;
        margin-bottom: 20px;
    }

    .service-title {
        font-weight: 600;
        margin-bottom: 15px;
    }

    .service-desc {
        color: #aaa;
        font-size: 0.95rem;
    }

    /* PROFILE CARD */
    .startup-card {
        background: rgba(255,255,255,0.05);
        border-radius: 25px;
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 10px 40px rgba(0,0,0,0.5);
        overflow: hidden;
        margin: 60px 0;
        padding: 30px;
    }

    .profile-img {
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.6);
        transition: 0.3s;
    }

    .profile-img:hover {
        transform: scale(1.03);
    }

    .gradient-text {
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
    }

    .info-box {
        background: rgba(255,255,255,0.04);
        border-radius: 15px;
        padding: 15px;
        transition: 0.3s;
        height: 100%;
    }

    .info-box:hover {
        background: rgba(255,255,255,0.08);
        transform: translateY(-3px);
    }

    .icon {
        color: #00f5ff;
        font-size: 18px;
    }

    hr {
        border-color: rgba(255,255,255,0.1);
    }

    /* FOOTER CTA */
    .footer-cta {
        text-align: center;
        padding: 60px 20px;
        background: #070a12;
        border-radius: 25px;
        margin-bottom: 60px;
    }

    .footer-cta h3 {
        font-weight: 700;
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
    }

</style>

<!-- HERO -->
<div class="hero">
    <h1>Welcome to SainTech</h1>
    <p>Membangun solusi digital modern untuk startup & bisnis Anda. Website, branding, marketing, IT support – semua di satu tempat.</p>
    <a href="/services" class="btn btn-cta">Explore Our Services</a>
</div>

<!-- SERVICES SECTION -->
<div class="services row g-4">
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="service-icon">💻</div>
            <div class="service-title">Website Development</div>
            <div class="service-desc">Membuat website modern, responsif, dan SEO-friendly untuk bisnis Anda.</div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="service-icon">📈</div>
            <div class="service-title">Digital Marketing</div>
            <div class="service-desc">Strategi digital marketing untuk meningkatkan reach dan engagement pelanggan.</div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="service-icon">🎨</div>
            <div class="service-title">Branding & Design</div>
            <div class="service-desc">Membangun identitas brand yang kuat & konsisten agar mudah dikenali.</div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="service-card">
            <div class="service-icon">🛠️</div>
            <div class="service-title">IT Support & Maintenance</div>
            <div class="service-desc">Dukungan teknis untuk website dan sistem Anda agar selalu optimal.</div>
        </div>
    </div>
</div>

<!-- PROFILE CARD -->
<div class="container">
    <div class="startup-card row g-4 align-items-center">

        <div class="col-md-5 text-center">
            <img 
                src="{{ asset('storage/' . $data->image) }}" 
                class="img-fluid profile-img" 
                style="max-height: 320px; object-fit: cover;" 
                alt="Company Image"
            >
            <h5 class="gradient-text mt-3">{{ $data->name }}</h5>
        </div>

        <div class="col-md-7">
            <h2 class="gradient-text mb-3">{{ $data->name }}</h2>
            <p class="mb-4 text-light opacity-75">{{ $data->description }}</p>
            <hr>
            <div class="row g-3">
                <div class="col-sm-6">
                    <div class="info-box">
                        <h6 class="fw-bold"><i class="bi bi-geo-alt-fill me-2 icon"></i>Alamat</h6>
                        <p class="mb-0 small opacity-75">{{ $data->address }}</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box">
                        <h6 class="fw-bold"><i class="bi bi-telephone-fill me-2 icon"></i>Telepon</h6>
                        <p class="mb-0 small opacity-75">{{ $data->phone }}</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box">
                        <h6 class="fw-bold"><i class="bi bi-envelope-fill me-2 icon"></i>Email</h6>
                        <p class="mb-0 small opacity-75">{{ $data->email }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- FOOTER CTA -->
<div class="footer-cta">
    <h3>Ready to Grow Your Startup?</h3>
    <a href="/contact" class="btn btn-cta">Contact Us Now</a>
</div>

@endsection