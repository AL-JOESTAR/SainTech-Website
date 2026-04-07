@extendS('layouts.app')

@section('konten')
<style>
    body {
        background: #0b0f19;
        font-family: 'Poppins', sans-serif;
        color: #eaeaea;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center;
    }

    .section-sub {
        text-align: center;
        color: #aaa;
        max-width: 600px;
        margin: 10px auto 40px;
    }

    .service-card {
        background: rgba(255,255,255,0.05);
        border-radius: 20px;
        padding: 25px;
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,0.1);
        transition: 0.3s;
        height: 100%;
    }

    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.5);
    }

    .icon {
        font-size: 35px;
        color: #00f5ff;
        margin-bottom: 15px;
    }

    .feature-list li {
        margin-bottom: 6px;
        font-size: 0.9rem;
        opacity: 0.8;
    }

    .why-box {
        background: rgba(255,255,255,0.04);
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        transition: 0.3s;
    }

    .why-box:hover {
        background: rgba(255,255,255,0.08);
    }

    .cta {
        background: linear-gradient(90deg, #00f5ff, #4facfe);
        border-radius: 20px;
        padding: 40px;
        text-align: center;
        color: #000;
        font-weight: 600;
    }

    .btn-cta {
        background: #000;
        color: #fff;
        border-radius: 30px;
        padding: 10px 25px;
        border: none;
        transition: 0.3s;
    }

    .btn-cta:hover {
        background: #111;
        transform: scale(1.05);
    }
</style>

<div class="container py-5">

    <!-- HEADER -->
    <h1 class="section-title">Our Services</h1>
    <p class="section-sub">
        Kami menyediakan berbagai layanan profesional untuk membantu bisnis Anda berkembang dan mencapai target secara maksimal.
    </p>

    <!-- SERVICES -->
    <div class="row g-4 mb-5">

        <!-- Website Dev -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <div class="icon">💻</div>
                <h5>Website Development</h5>
                <p class="small opacity-75">
                    Website modern, responsive, dan fokus konversi untuk bisnis Anda.
                </p>
                <ul class="feature-list">
                    <li>✔ Custom design</li>
                    <li>✔ Mobile friendly</li>
                    <li>✔ SEO basic</li>
                    <li>✔ Maintenance</li>
                </ul>
            </div>
        </div>

        <!-- Digital Marketing -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <div class="icon">📈</div>
                <h5>Digital Marketing</h5>
                <p class="small opacity-75">
                    Strategi pemasaran digital untuk meningkatkan jangkauan dan penjualan.
                </p>
                <ul class="feature-list">
                    <li>✔ Social Media</li>
                    <li>✔ Ads Campaign</li>
                    <li>✔ Content Marketing</li>
                    <li>✔ SEO Optimization</li>
                </ul>
            </div>
        </div>

        <!-- Branding -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <div class="icon">🎨</div>
                <h5>Branding & Design</h5>
                <p class="small opacity-75">
                    Bangun identitas brand yang kuat dan profesional.
                </p>
                <ul class="feature-list">
                    <li>✔ Logo Design</li>
                    <li>✔ Brand Identity</li>
                    <li>✔ Company Profile</li>
                    <li>✔ Social Media Design</li>
                </ul>
            </div>
        </div>

        <!-- IT Support -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <div class="icon">🛠️</div>
                <h5>IT Support</h5>
                <p class="small opacity-75">
                    Dukungan teknis untuk menjaga sistem tetap optimal.
                </p>
                <ul class="feature-list">
                    <li>✔ Monitoring</li>
                    <li>✔ Bug Fixing</li>
                    <li>✔ System Update</li>
                    <li>✔ Backup Data</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- WHY US -->
    <h3 class="text-center mb-4">Mengapa Memilih Kami?</h3>
    <div class="row g-3 mb-5 text-center">
        <div class="col-md-3"><div class="why-box">💼 Profesional & Berpengalaman</div></div>
        <div class="col-md-3"><div class="why-box">⚡ Cepat & Tepat Waktu</div></div>
        <div class="col-md-3"><div class="why-box">💰 Harga Kompetitif</div></div>
        <div class="col-md-3"><div class="why-box">📞 Support Responsif</div></div>
    </div>

    <!-- PROCESS -->
    <h3 class="text-center mb-4">Proses Kerja</h3>
    <div class="row text-center mb-5">
        <div class="col-md-3">1️⃣ Konsultasi</div>
        <div class="col-md-3">2️⃣ Perencanaan</div>
        <div class="col-md-3">3️⃣ Eksekusi</div>
        <div class="col-md-3">4️⃣ Evaluasi</div>
    </div>

    <!-- CTA -->
    <div class="cta">
        <h4>Siap Mengembangkan Bisnis Anda?</h4>
        <p>Konsultasi GRATIS sekarang dan temukan solusi terbaik!</p>
        <button class="btn-cta">Hubungi Kami</button>
    </div>

</div>  
@endsection