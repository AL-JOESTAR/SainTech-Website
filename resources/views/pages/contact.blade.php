@extends('layouts.app')

@section('konten')

<style>
    body {
        background: #0b0f19;
        color: #eaeaea;
        font-family: 'Poppins', sans-serif;
    }

    .contact-hero {
        padding: 80px 20px 40px;
        text-align: center;
    }

    .contact-hero h1 {
        font-size: 3rem;
        font-weight: 700;
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 10px;
    }

    .contact-hero p {
        color: #aaa;
        font-size: 1.1rem;
    }

    .contact-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .contact-card {
        background: rgba(255,255,255,0.05);
        border-radius: 25px;
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255,255,255,0.1);
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    }

    .form-control {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.2);
        color: #eaeaea;
        border-radius: 10px;
        padding: 12px 15px;
        transition: 0.3s;
    }

    .form-control:focus {
        background: rgba(255,255,255,0.1);
        border-color: #00f5ff;
        color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(0,245,255,0.25);
    }

    .btn-contact {
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        border: none;
        color: #000;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 30px;
        transition: 0.3s;
    }

    .btn-contact:hover {
        transform: scale(1.05);
    }

    .contact-info {
        margin-top: 30px;
    }

    .contact-info .info-box {
        background: rgba(255,255,255,0.04);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 15px;
        text-align: center;
        transition: 0.3s;
    }

    .contact-info .info-box:hover {
        background: rgba(255,255,255,0.08);
        transform: translateY(-3px);
    }

    .info-icon {
        font-size: 25px;
        color: #00f5ff;
        margin-bottom: 10px;
    }
</style>

<!-- HERO -->
<div class="contact-hero">
    <h1>Contact Us</h1>
    <p>Hubungi kami untuk konsultasi gratis atau pertanyaan terkait layanan digital kami.</p>
</div>

<!-- CONTACT FORM + INFO -->
<div class="contact-container">
    <div class="contact-card row g-4">

        <!-- FORM -->
        <div class="col-md-7">
            <form method="POST" action="#">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subjek</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Judul pesan" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tulis pesan Anda..." required></textarea>
                </div>
                <button type="submit" class="btn btn-contact">Kirim Pesan</button>
            </form>
        </div>

        <!-- CONTACT INFO -->
        <div class="col-md-5">
            <div class="contact-info">
                <div class="info-box">
                    <div class="info-icon">📍</div>
                    <p>Jl. Startup No. 123, Jakarta, Indonesia</p>
                </div>
                <div class="info-box">
                    <div class="info-icon">📞</div>
                    <p>+62 812 3456 7890</p>
                </div>
                <div class="info-box">
                    <div class="info-icon">✉️</div>
                    <p>info@saintech.com</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection