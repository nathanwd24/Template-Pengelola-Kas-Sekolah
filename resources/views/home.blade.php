<x-layouts.homepage title="Beranda Sekolah">

    <style>
        .home-section {
            padding: 60px 0;
        }

        .intro-text {
            font-size: 1.2rem;
            line-height: 2;
            color: #334155;
            margin-bottom: 30px;
            text-align: center;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .stat-item {
            text-align: center;
            padding: 30px;
            border-left: 4px solid #2563eb;
            background: rgba(37, 99, 235, 0.03);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: #2563eb;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1rem;
            color: #64748b;
            font-weight: 500;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin: 50px 0;
        }

        .feature-item {
            text-align: left;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #2563eb;
            margin-bottom: 15px;
        }

        .feature-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .feature-desc {
            font-size: 1rem;
            line-height: 1.7;
            color: #64748b;
        }

        .section-heading {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-subheading {
            font-size: 1.1rem;
            color: #64748b;
            text-align: center;
            margin-bottom: 40px;
        }

        .quick-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .quick-link {
            display: flex;
            align-items: center;
            padding: 25px;
            border-left: 4px solid #2563eb;
            background: rgba(37, 99, 235, 0.03);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .quick-link:hover {
            border-left-width: 8px;
            background: rgba(37, 99, 235, 0.08);
        }

        .quick-link-icon {
            font-size: 2.5rem;
            color: #2563eb;
            margin-right: 20px;
        }

        .quick-link-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .quick-link-desc {
            font-size: 0.9rem;
            color: #64748b;
            margin: 0;
        }

        .motto-section {
            text-align: center;
            padding: 40px;
            margin: 50px 0;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
        }

        .motto-text {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 3px;
        }

        body.dark-mode .section-heading,
        body.dark-mode .feature-title,
        body.dark-mode .quick-link-title {
            color: #e2e8f0;
        }

        body.dark-mode .intro-text,
        body.dark-mode .section-subheading,
        body.dark-mode .feature-desc,
        body.dark-mode .stat-label,
        body.dark-mode .quick-link-desc {
            color: #94a3b8;
        }

        body.dark-mode .stat-item,
        body.dark-mode .quick-link {
            background: rgba(96, 165, 250, 0.1);
            border-left-color: #60a5fa;
        }

        body.dark-mode .stat-number,
        body.dark-mode .feature-icon,
        body.dark-mode .quick-link-icon {
            color: #60a5fa;
        }
    </style>

    <div class="container home-section">
        
        <h1 class="section-heading">Selamat Datang di SMA Negeri 28 Jakarta</h1>
        <p class="intro-text">
            Sekolah Plus Standar Nasional yang telah berdiri sejak 1970, berkomitmen mencetak 
            generasi unggul berdasarkan IMTAK dan IPTEK dengan mengusung motto 
            <strong>TAQWA, CERDAS, SANTUN, PRESTASI</strong>.
        </p>

        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">55+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100+</div>
                <div class="stat-label">Guru Profesional</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">A</div>
                <div class="stat-label">Akreditasi</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">Siswa Aktif</div>
            </div>
        </div>

        <h2 class="section-heading mt-5">Keunggulan Kami</h2>
        <p class="section-subheading">Fasilitas dan program unggulan untuk masa depan gemilang</p>

        <div class="feature-grid">
            <div class="feature-item">
                <i class="bi bi-people-fill feature-icon"></i>
                <h3 class="feature-title">Guru Berpengalaman</h3>
                <p class="feature-desc">
                    Tenaga pengajar profesional dan berdedikasi yang tidak hanya mengajarkan ilmu, 
                    tetapi juga membentuk karakter unggul.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-award-fill feature-icon"></i>
                <h3 class="feature-title">Terakreditasi A</h3>
                <p class="feature-desc">
                    Kualitas pendidikan terjamin dengan akreditasi A yang memberikan peluang 
                    lebih luas untuk masa depan.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-trophy-fill feature-icon"></i>
                <h3 class="feature-title">Prestasi Gemilang</h3>
                <p class="feature-desc">
                    Raihan prestasi akademik dan non-akademik di tingkat nasional 
                    maupun internasional.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-book-fill feature-icon"></i>
                <h3 class="feature-title">Kurikulum Penggerak</h3>
                <p class="feature-desc">
                    Menerapkan Kurikulum Sekolah Penggerak yang inovatif dan berbasis 
                    teknologi untuk pembelajaran efektif.
                </p>
            </div>
        </div>

        <div class="motto-section">
            <div class="motto-text">TAQWA • CERDAS • SANTUN • PRESTASI</div>
        </div>

        <h2 class="section-heading">Jelajahi Lebih Lanjut</h2>
        
        <div class="quick-links">
            <a href="/biodata" class="quick-link">
                <i class="bi bi-info-circle-fill quick-link-icon"></i>
                <div>
                    <div class="quick-link-title">Biodata Sekolah</div>
                    <p class="quick-link-desc">Informasi lengkap profil dan data sekolah</p>
                </div>
            </a>

            <a href="/sejarah" class="quick-link">
                <i class="bi bi-clock-history quick-link-icon"></i>
                <div>
                    <div class="quick-link-title">Sejarah & Visi Misi</div>
                    <p class="quick-link-desc">Perjalanan panjang SMAN 28 Jakarta</p>
                </div>
            </a>

            <a href="/contact" class="quick-link">
                <i class="bi bi-telephone-fill quick-link-icon"></i>
                <div>
                    <div class="quick-link-title">Hubungi Kami</div>
                    <p class="quick-link-desc">Informasi kontak dan lokasi sekolah</p>
                </div>
            </a>
        </div>

    </div>

</x-layouts.homepage>
