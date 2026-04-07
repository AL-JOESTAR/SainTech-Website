<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <style>
        .navbar {
            background: rgba(11, 15, 25, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(90deg, #00f5ff, #4facfe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-link {
            color: #ccc !important;
            margin-right: 15px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #00f5ff !important;
        }

        .nav-link.active {
            color: #00f5ff !important;
            font-weight: 600;
        }

        .btn-start {
            background: linear-gradient(90deg, #00f5ff, #4facfe);
            border: none;
            border-radius: 30px;
            padding: 8px 20px;
            color: #000;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-start:hover {
            transform: scale(1.05);
        }
    </style>

    <div class="container">
        <a class="navbar-brand" href="/">SainTech</a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>

            <div class="d-flex justify-content-center">
                <a href="/admin" class="btn btn-start">Dashboard</a>
            </div>

        </div>
    </div>
</nav>

<!-- Spacer biar konten gak ketutup navbar -->
<div style="height:80px;"></div>