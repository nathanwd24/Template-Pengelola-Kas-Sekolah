<x-layouts.homepage title="Beranda Sekolah">

    <style>
        .home-section {
            padding: 80px 0;
        }

        .section-heading {
            font-size: 3.2rem;
            font-weight: 900;
            color: #1a1a1a;
            margin-bottom: 15px;
            text-align: center;
            letter-spacing: -1px;
        }

        .section-subheading {
            font-size: 1.2rem;
            color: #64748b;
            text-align: center;
            margin-bottom: 50px;
            font-weight: 500;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .intro-text {
            font-size: 1.1rem;
            line-height: 1.9;
            color: #475569;
            margin-bottom: 40px;
            text-align: center;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 500;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin: 60px 0;
        }

        .stat-item {
            text-align: center;
            padding: 40px 25px;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.05) 0%, rgba(239, 68, 68, 0.02) 100%);
            border-left: 5px solid #ef4444;
            border-radius: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(239, 68, 68, 0.15);
            border-left-width: 8px;
        }

        .stat-item:hover::before {
            opacity: 1;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            color: #ef4444;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .stat-label {
            font-size: 1.05rem;
            color: #64748b;
            font-weight: 600;
            letter-spacing: 0.3px;
            position: relative;
            z-index: 1;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin: 60px 0;
        }

        .feature-item {
            text-align: left;
            padding: 30px;
            background: white;
            border-radius: 12px;
            border: 1px solid rgba(239, 68, 68, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-item:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: #ef4444;
        }

        .feature-icon {
            font-size: 3rem;
            color: #ef4444;
            margin-bottom: 20px;
            display: inline-block;
        }

        .feature-title {
            font-size: 1.4rem;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 12px;
        }

        .feature-desc {
            font-size: 1rem;
            line-height: 1.8;
            color: #64748b;
            font-weight: 500;
        }

        .motto-section {
            text-align: center;
            padding: 60px 40px;
            margin: 70px 0;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 50%, #991b1b 100%);
            color: white;
            border-radius: 16px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(239, 68, 68, 0.3);
        }

        .motto-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            filter: blur(40px);
        }

        .motto-text {
            font-size: 2.5rem;
            font-weight: 900;
            letter-spacing: 3px;
            position: relative;
            z-index: 1;
            text-transform: uppercase;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .quick-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .quick-link {
            display: flex;
            align-items: center;
            padding: 30px;
            border-left: 5px solid #ef4444;
            background: white;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .quick-link:hover {
            border-left-width: 8px;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.08) 0%, transparent 100%);
            transform: translateX(12px);
            box-shadow: 0 12px 30px rgba(239, 68, 68, 0.15);
            color: #ef4444;
        }

        .quick-link-icon {
            font-size: 3rem;
            color: #ef4444;
            margin-right: 25px;
            flex-shrink: 0;
        }

        .quick-link-title {
            font-size: 1.3rem;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 8px;
            display: block;
        }

        .quick-link-desc {
            font-size: 0.95rem;
            color: #64748b;
            margin: 0;
            font-weight: 500;
        }

        body.dark-mode .section-heading,
        body.dark-mode .feature-title,
        body.dark-mode .quick-link-title {
            color: #e5e7eb;
        }

        body.dark-mode .intro-text,
        body.dark-mode .section-subheading,
        body.dark-mode .feature-desc,
        body.dark-mode .stat-label,
        body.dark-mode .quick-link-desc {
            color: #cbd5e1;
        }

        body.dark-mode .stat-item,
        body.dark-mode .feature-item,
        body.dark-mode .quick-link {
            background: rgba(31, 41, 55, 0.6);
            border-color: rgba(239, 68, 68, 0.2);
        }

        body.dark-mode .stat-number,
        body.dark-mode .feature-icon,
        body.dark-mode .quick-link-icon {
            color: #fca5a5;
        }

        @media (max-width: 768px) {
            .section-heading {
                font-size: 2rem;
            }

            .section-subheading {
                font-size: 1rem;
            }

            .feature-grid {
                gap: 25px;
            }

            .motto-text {
                font-size: 1.8rem;
            }

            .stats-grid {
                gap: 20px;
            }
        }

    </style>

    <div class="container home-section">
        
        <h1 class="section-heading">Selamat Datang di SMAN 28 Jakarta</h1>
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
                <div class="stat-number">150+</div>
                <div class="stat-label">Guru Profesional</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">A</div>
                <div class="stat-label">Akreditasi</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1500+</div>
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
                    tetapi juga membentuk karakter unggul generasi penerus bangsa.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-award-fill feature-icon"></i>
                <h3 class="feature-title">Terakreditasi A</h3>
                <p class="feature-desc">
                    Kualitas pendidikan terjamin dengan akreditasi A yang memberikan peluang 
                    lebih luas untuk melanjutkan pendidikan ke tingkat lebih tinggi.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-trophy-fill feature-icon"></i>
                <h3 class="feature-title">Prestasi Gemilang</h3>
                <p class="feature-desc">
                    Raihan prestasi akademik dan non-akademik di tingkat nasional 
                    maupun internasional sebagai bukti kualitas pendidikan.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-book-fill feature-icon"></i>
                <h3 class="feature-title">Kurikulum Penggerak</h3>
                <p class="feature-desc">
                    Menerapkan Kurikulum Sekolah Penggerak yang inovatif dan berbasis 
                    teknologi untuk pembelajaran yang lebih efektif dan relevan.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-cpu-fill feature-icon"></i>
                <h3 class="feature-title">Fasilitas Modern</h3>
                <p class="feature-desc">
                    Sarana dan prasarana lengkap dengan teknologi terkini mendukung 
                    proses pembelajaran yang interaktif dan menyenangkan.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-lightning-fill feature-icon"></i>
                <h3 class="feature-title">Pengembangan Karakter</h3>
                <p class="feature-desc">
                    Program pembinaan karakter komprehensif mengutamakan nilai moral, 
                    etika, dan kepribadian unggul dalam kehidupan bermasyarakat.
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
                    <span class="quick-link-title">Biodata Sekolah</span>
                    <p class="quick-link-desc">Informasi lengkap profil dan data sekolah</p>
                </div>
            </a>

            <a href="/sejarah" class="quick-link">
                <i class="bi bi-clock-history quick-link-icon"></i>
                <div>
                    <span class="quick-link-title">Sejarah & Visi Misi</span>
                    <p class="quick-link-desc">Perjalanan panjang SMAN 28 Jakarta</p>
                </div>
            </a>

            <a href="/contact" class="quick-link">
                <i class="bi bi-telephone-fill quick-link-icon"></i>
                <div>
                    <span class="quick-link-title">Hubungi Kami</span>
                    <p class="quick-link-desc">Informasi kontak dan lokasi sekolah</p>
                </div>
            </a>
        </div>

    </div>

</x-layouts.homepage>
