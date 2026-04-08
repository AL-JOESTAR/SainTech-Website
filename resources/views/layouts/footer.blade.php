<footer class="mt-5">
    <style>
        .startup-footer {
            background: #0b0f19;
            color: #eaeaea;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-container {
            padding: 50px 20px;
        }

        .footer-title {
            font-weight: 600;
            margin-bottom: 15px;
            background: linear-gradient(90deg, #00f5ff, #4facfe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .footer-text {
            color: #aaa;
            font-size: 0.9rem;
        }

        .footer-link {
            display: block;
            color: #aaa;
            text-decoration: none;
            margin-bottom: 8px;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: #00f5ff;
        }

        .btn-footer {
            background: linear-gradient(90deg, #00f5ff, #4facfe);
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            color: #000;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-footer:hover {
            transform: scale(1.05);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 15px;
            text-align: center;
            font-size: 0.85rem;
            color: #777;
        }
    </style>

    <div class="startup-footer">
        <div class="container footer-container">
            <div class="row">

                <!-- BRAND -->
                <div class="col-md-4 mb-4">
                    <h5 class="footer-title">SainTechnology</h5>
                    <p class="footer-text">
                        Solusi digital modern untuk membantu bisnis Anda berkembang lebih cepat dan profesional di era digital.
                    </p>
                </div>

                <!-- MENU -->
                <div class="col-md-4 mb-4">
                    <h6 class="fw-bold mb-3">Menu</h6>
                    <a href="/" class="footer-link">Home</a>
                    <a href="/about" class="footer-link">About</a>
                    <a href="/services" class="footer-link">Services</a>
                    <a href="/contact" class="footer-link">Contact</a>
                </div>

                <!-- CTA -->
                <div class="col-md-4 mb-4">
                    <h6 class="fw-bold mb-3">Siap Mulai?</h6>
                    <p class="footer-text">Hubungi kami sekarang dan mulai transformasi digital bisnis Anda.</p>
                    <a href="#" class="btn btn-footer">Hubungi Kami</a>
                </div>

            </div>
        </div>

        <!-- BOTTOM -->
        <div class="footer-bottom">
            © {{ date('Y') }} SainTechnology. All rights reserved.
        </div>
    </div>
</footer>