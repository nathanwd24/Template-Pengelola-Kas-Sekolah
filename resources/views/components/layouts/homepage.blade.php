<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Homepage Sekolah' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }

        /* Navbar Premium */
        .navbar-modern {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(30px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 12px 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .navbar-modern.scrolled {
            padding: 8px 0;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
        }

        .navbar-modern .logo-container {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .navbar-modern .logo-img {
            width: 55px;
            height: 55px;
            object-fit: contain;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
            transition: transform 0.3s ease;
        }

        .navbar-modern .logo-img:hover {
            transform: scale(1.05);
        }

        .navbar-modern .school-name {
            font-size: 1.25rem;
            font-weight: 800;
            color: #1a1a1a;
            line-height: 1.1;
            letter-spacing: -0.5px;
        }

        .navbar-modern .school-name small {
            display: block;
            font-size: 0.7rem;
            font-weight: 500;
            color: #6b7280;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 2px;
        }

        .navbar-modern .nav-link {
            color: #374151;
            font-weight: 600;
            padding: 6px 16px !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            font-size: 0.95rem;
        }

        .navbar-modern .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #ef4444, #f97316);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 3px;
        }

        .navbar-modern .nav-link:hover::after,
        .navbar-modern .nav-link.active::after {
            width: 65%;
        }

        .navbar-modern .nav-link:hover {
            color: #ef4444;
            transform: translateY(-2px);
        }

        .btn-login-modern {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 10px 28px;
            border-radius: 25px;
            border: none;
            font-weight: 700;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
        }

        .btn-login-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
            color: white;
        }

        /* Hero Slider Premium */
        .hero-slider {
            height: 100vh;
            position: relative;
            margin-top: 0;
            width: 100%;
            background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%);
        }

        .heroSwiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        .slide-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.45) contrast(1.1);
            animation: zoomIn 8s ease-out forwards;
        }

        @keyframes zoomIn {
            from {
                transform: scale(1.1);
            }
            to {
                transform: scale(1);
            }
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%);
            z-index: 2;
        }

        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 90%;
            max-width: 1100px;
            z-index: 10;
            padding: 40px;
        }

        .slide-content h1 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.6);
            animation: slideDown 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            line-height: 1.2;
            letter-spacing: -1px;
        }

        .slide-content p {
            font-size: 1.4rem;
            margin-bottom: 35px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.6);
            animation: slideUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.2s both;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .slide-content .btn-explore {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 16px 48px;
            border-radius: 30px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            animation: slideUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.4s both;
            box-shadow: 0 8px 20px rgba(239, 68, 68, 0.3);
            font-size: 1rem;
            letter-spacing: 0.5px;
        }

        .slide-content .btn-explore:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(239, 68, 68, 0.5);
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Swiper Custom Navigation */
        .swiper-button-next,
        .swiper-button-prev {
            background: rgba(255, 255, 255, 0.15);
            width: 55px;
            height: 55px;
            border-radius: 50%;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.25);
            transition: all 0.3s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(239, 68, 68, 0.8);
            border-color: rgba(239, 68, 68, 1);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 22px;
            color: white;
            font-weight: bold;
        }

        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.5);
            opacity: 0.7;
            width: 12px;
            height: 12px;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet:hover {
            background: white;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 35px;
            border-radius: 6px;
            background: linear-gradient(90deg, #ef4444, #dc2626);
        }

        /* Content Area */
        main {
            background: #fafafa;
            min-height: 100vh;
        }

        /* Footer Premium */
        footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%);
            color: white;
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(239, 68, 68, 0.5), transparent);
        }

        .footer-section {
            margin-bottom: 30px;
        }

        .footer-section h5 {
            font-weight: 800;
            margin-bottom: 20px;
            color: #ef4444;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 12px;
        }

        .footer-section ul li a {
            color: #d1d5db;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .footer-section ul li a:hover {
            color: #ef4444;
            padding-left: 8px;
        }

        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: rgba(239, 68, 68, 0.1);
            border-radius: 50%;
            margin-right: 12px;
            color: #ef4444;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid rgba(239, 68, 68, 0.2);
        }

        .footer-social a:hover {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            transform: translateY(-6px);
            border-color: #ef4444;
        }

        .footer-bottom {
            border-top: 1px solid rgba(239, 68, 68, 0.2);
            padding-top: 30px;
            margin-top: 50px;
            text-align: center;
            color: #9ca3af;
            font-weight: 500;
        }

        /* Dark Mode Toggle */
        .theme-switch {
            position: fixed;
            bottom: 35px;
            right: 35px;
            z-index: 1000;
        }

        .theme-switch-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            border: none;
            font-size: 1.6rem;
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .theme-switch-btn:hover {
            transform: scale(1.12);
            box-shadow: 0 12px 35px rgba(239, 68, 68, 0.6);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background: #0f1419;
            color: #e5e7eb;
        }

        body.dark-mode .navbar-modern {
            background: rgba(15, 20, 25, 0.95);
            border-bottom-color: rgba(239, 68, 68, 0.1);
        }

        body.dark-mode .navbar-modern .school-name {
            color: #f3f4f6;
        }

        body.dark-mode .navbar-modern .school-name small {
            color: #9ca3af;
        }

        body.dark-mode .navbar-modern .nav-link {
            color: #d1d5db;
        }

        body.dark-mode main {
            background: #111827;
        }

        @media (max-width: 768px) {
            .hero-slider {
                height: 80vh;
            }

            .slide-content {
                padding: 20px;
            }

            .slide-content h1 {
                font-size: 2.2rem;
            }

            .slide-content p {
                font-size: 1rem;
            }

            .navbar-modern .school-name {
                font-size: 1rem;
            }

            .navbar-modern .logo-img {
                width: 45px;
                height: 45px;
            }

            .swiper-button-next,
            .swiper-button-prev {
                width: 45px;
                height: 45px;
            }
        }

    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-modern sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <div class="logo-container">
                    <img src="https://sman28jkt.sch.id/wp-content/uploads/elementor/thumbs/LOGO-SMA-28-HD-rej9fvskijrcbaoteaf31u8kmsqcsqiw40nyvqc4dc.png" 
                         alt="Logo SMAN 28 Jakarta" 
                         class="logo-img">
                    <div class="school-name">
                        SMAN 28 JAKARTA
                        <small>Excellence in Education</small>
                    </div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/biodata">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Hubungi Kami</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="/login" class="btn btn-login-modern">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO SLIDER --}}
    <div class="hero-slider">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                {{-- Slide 1 --}}
                <div class="swiper-slide">
                    <img src="https://sman28jkt.sch.id/wp-content/uploads/2025/05/sman28-1-1024x687.png" 
                         alt="School Building" 
                         class="slide-background">
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h1>Selamat Datang di SMAN 28 Jakarta</h1>
                        <p>Mewujudkan Generasi Unggul Berdasarkan IMTAK dan IPTEK</p>
                        <a href="#about" class="btn-explore">Jelajahi Lebih Lanjut</a>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="swiper-slide">
                    <img src="https://sman28jkt.sch.id/wp-content/uploads/2025/05/Gedung-768x513.jpg" 
                         alt="School Facilities" 
                         class="slide-background">
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h1>Taqwa • Cerdas • Santun • Prestasi</h1>
                        <p>Membentuk Karakter Siswa yang Berakhlak Mulia dan Berprestasi</p>
                        <a href="/sejarah" class="btn-explore">Pelajari Visi Misi</a>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="swiper-slide">
                    <img src="https://sman28jkt.sch.id/robotik/uploads/slider/1760086654_slider.png" 
                         alt="Robotics" 
                         class="slide-background">
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h1>Sekolah Plus Standar Nasional</h1>
                        <p>Terakreditasi A dengan Kurikulum Sekolah Penggerak</p>
                        <a href="/biodata" class="btn-explore">Info Lengkap</a>
                    </div>
                </div>
            </div>
            
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- KONTEN --}}
    <main id="about">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-section">
                    <h5>SMAN 28 Jakarta</h5>
                    <p style="color: #d1d5db; line-height: 1.9; font-size: 0.95rem;">
                        Sekolah Plus Standar Nasional yang berkomitmen mencetak generasi unggul berdasarkan IMTAK dan IPTEK. Berdiri sejak 1970 dengan prestasi gemilang di tingkat nasional dan internasional.
                    </p>
                    <div class="footer-social mt-4">
                        <a href="https://www.instagram.com/sman28jkt/" target="_blank" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/p/SMAN-28-Jakarta-100063583988467/" target="_blank" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://sman28jkt.sch.id/" target="_blank" title="Website">
                            <i class="bi bi-globe"></i>
                        </a>
                        <a href="https://id.linkedin.com/school/sma-negeri-28-jakarta/" target="_blank" title="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 footer-section">
                    <h5>Menu Cepat</h5>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/biodata">Biodata Sekolah</a></li>
                        <li><a href="/sejarah">Sejarah & Visi Misi</a></li>
                        <li><a href="/contact">Kontak Kami</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 footer-section">
                    <h5>Kontak Informasi</h5>
                    <ul style="color: #d1d5db; font-size: 0.95rem;">
                        <li>
                            <i class="bi bi-geo-alt-fill me-2" style="color: #ef4444;"></i>
                            Jl. Raya Ragunan No.33, RT.5/RW.7, Jati Padang<br>
                            <span style="padding-left: 24px;">Ps. Minggu, Jakarta Selatan 12540</span>
                        </li>
                        <li class="mt-3">
                            <i class="bi bi-telephone-fill me-2" style="color: #ef4444;"></i>
                            (021) 7806293
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill me-2" style="color: #ef4444;"></i>
                            mail28jkt@gmail.com
                        </li>
                        <li>
                            <i class="bi bi-globe me-2" style="color: #ef4444;"></i>
                            sman28jkt.sch.id
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="mb-0">© {{ date('Y') }} SMA Negeri 28 Jakarta. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    {{-- THEME TOGGLE --}}
    <div class="theme-switch">
        <button class="theme-switch-btn" id="themeToggle" title="Toggle Dark Mode">
            <i class="bi bi-moon-stars-fill"></i>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
        // Hero Slider
        const heroSwiper = new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 1000,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Navbar scroll effect
        const navbar = document.querySelector('.navbar-modern');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Active nav link
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.navbar-modern .nav-link');
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === currentPath || 
                (currentPath === '/' && link.getAttribute('href') === '/') ||
                (currentPath.includes(link.getAttribute('href')) && link.getAttribute('href') !== '/')) {
                link.classList.add('active');
            }
        });

        // Dark Mode Toggle
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        const icon = themeToggle.querySelector('i');

        // Check saved theme
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            body.classList.add('dark-mode');
            icon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
        }

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                icon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
                localStorage.setItem('theme', 'dark');
            } else {
                icon.classList.replace('bi-sun-fill', 'bi-moon-stars-fill');
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>
</html>
