<x-layouts.homepage title="Biodata Sekolah">

    <style>
        .bio-section {
            padding: 80px 0;
        }

        .bio-title {
            font-size: 3.5rem;
            font-weight: 900;
            color: #1a1a1a;
            margin-bottom: 15px;
            text-align: center;
            letter-spacing: -1px;
        }

        .bio-subtitle {
            font-size: 1.2rem;
            color: #64748b;
            text-align: center;
            margin-bottom: 60px;
            font-weight: 500;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .bio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .bio-item {
            padding: 35px 30px;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.05) 0%, transparent 100%);
            border-left: 5px solid #ef4444;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .bio-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(239, 68, 68, 0.15);
            border-left-width: 8px;
        }

        .bio-label {
            font-size: 0.85rem;
            font-weight: 700;
            color: #ef4444;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            display: block;
        }

        .bio-value {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1a1a1a;
            line-height: 1.6;
        }

        .bio-value a {
            color: #ef4444;
            text-decoration: none;
            transition: all 0.3s ease;
            border-bottom: 2px solid #ef4444;
        }

        .bio-value a:hover {
            color: #dc2626;
        }

        .bio-highlight-section {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            padding: 50px 40px;
            border-radius: 16px;
            color: white;
            margin: 60px 0;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(239, 68, 68, 0.3);
        }

        .bio-highlight-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            filter: blur(40px);
        }

        .bio-highlight-title {
            font-size: 2rem;
            font-weight: 900;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .bio-highlight-text {
            font-size: 1.1rem;
            line-height: 1.8;
            position: relative;
            z-index: 1;
            font-weight: 500;
        }

        .bio-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .bio-list li {
            padding: 15px 0;
            padding-left: 30px;
            position: relative;
            font-size: 1.05rem;
            line-height: 1.8;
            color: #475569;
            font-weight: 500;
        }

        .bio-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #ef4444;
            font-weight: bold;
            font-size: 1.3rem;
        }

        body.dark-mode .bio-title {
            color: #e5e7eb;
        }

        body.dark-mode .bio-subtitle {
            color: #cbd5e1;
        }

        body.dark-mode .bio-item {
            background: rgba(31, 41, 55, 0.6);
            border-color: rgba(239, 68, 68, 0.3);
        }

        body.dark-mode .bio-value {
            color: #e5e7eb;
        }

        body.dark-mode .bio-list li {
            color: #cbd5e1;
        }

        @media (max-width: 768px) {
            .bio-title {
                font-size: 2rem;
            }

            .bio-subtitle {
                font-size: 1rem;
            }

            .bio-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .bio-highlight-title {
                font-size: 1.5rem;
            }
        }

    </style>

    <div class="container bio-section">
        <h1 class="bio-title">Biodata Sekolah</h1>
        <p class="bio-subtitle">Informasi lengkap tentang SMA Negeri 28 Jakarta</p>

        <div class="bio-grid">
            <div class="bio-item">
                <span class="bio-label">Nama Sekolah</span>
                <div class="bio-value">SMA Negeri 28 Jakarta</div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Status Sekolah</span>
                <div class="bio-value">Sekolah Plus Standar Nasional</div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Akreditasi</span>
                <div class="bio-value">A (Unggul)</div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Kurikulum</span>
                <div class="bio-value">Sekolah Penggerak</div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Kepala Sekolah</span>
                <div class="bio-value">Drs. H. Sugeng Riyadi, M.Pd.</div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Telepon</span>
                <div class="bio-value">(021) 7806293</div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Email</span>
                <div class="bio-value">mail28jkt@gmail.com</div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Website</span>
                <div class="bio-value"><a href="https://sman28jkt.sch.id/" target="_blank">sman28jkt.sch.id</a></div>
            </div>

            <div class="bio-item">
                <span class="bio-label">Alamat Lengkap</span>
                <div class="bio-value">Jl. Raya Ragunan No.33, RT.5/RW.7, Jati Padang, Ps. Minggu, Jakarta Selatan 12540</div>
            </div>
        </div>

        <div class="bio-highlight-section">
            <h2 class="bio-highlight-title">Komitmen Kami</h2>
            <p class="bio-highlight-text">
                SMA Negeri 28 Jakarta berkomitmen memberikan pendidikan berkualitas tinggi yang mengintegrasikan nilai-nilai IMTAK dan IPTEK untuk membentuk generasi yang cerdas, berkarakter, dan siap menghadapi tantangan masa depan.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h3 style="font-size: 2rem; font-weight: 900; color: #1a1a1a; margin-bottom: 30px; text-align: center;">Fasilitas Unggulan</h3>
                <ul class="bio-list">
                    <li>Ruang kelas modern dengan teknologi multimedia</li>
                    <li>Laboratorium sains lengkap (Fisika, Kimia, Biologi)</li>
                    <li>Laboratorium komputer dan bahasa dengan fasilitas mutakhir</li>
                    <li>Perpustakaan digital dengan koleksi buku dan e-resource</li>
                    <li>Aula serba guna dengan kapasitas 1000 orang</li>
                    <li>Lapangan olahraga lengkap (basket, voli, badminton, atletik)</li>
                    <li>Studio musik dan seni terpadu</li>
                    <li>Kantin dan cafeteria dengan standar kebersihan internasional</li>
                    <li>Asrama siswa untuk program khusus</li>
                    <li>Sistem keamanan 24 jam dengan CCTV</li>
                </ul>
            </div>
        </div>
    </div>

</x-layouts.homepage>
