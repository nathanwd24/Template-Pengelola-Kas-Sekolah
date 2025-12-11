<x-layouts.homepage title="Sejarah Sekolah">

    <style>
        .sejarah-section {
            padding: 80px 0;
        }

        .sejarah-title {
            font-size: 3.5rem;
            font-weight: 900;
            color: #1a1a1a;
            margin-bottom: 15px;
            text-align: center;
            letter-spacing: -1px;
        }

        .sejarah-subtitle {
            font-size: 1.2rem;
            color: #64748b;
            text-align: center;
            margin-bottom: 50px;
            font-weight: 500;
        }

        .sejarah-text {
            font-size: 1.1rem;
            line-height: 2;
            color: #475569;
            margin-bottom: 30px;
            text-align: justify;
            font-weight: 500;
        }

        .timeline-item {
            margin: 40px 0;
            padding: 30px;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.05) 0%, transparent 100%);
            border-left: 5px solid #ef4444;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .timeline-item:hover {
            transform: translateX(12px);
            box-shadow: 0 12px 30px rgba(239, 68, 68, 0.15);
        }

        .timeline-year {
            font-size: 1.5rem;
            font-weight: 900;
            color: #ef4444;
            margin-bottom: 10px;
        }

        .timeline-description {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #475569;
            font-weight: 500;
        }

        .visi-misi-section {
            margin-top: 80px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .visi-item,
        .misi-item {
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(239, 68, 68, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .visi-item:hover,
        .misi-item:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.15);
        }

        .vm-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .vm-icon.visi {
            color: #ef4444;
        }

        .vm-icon.misi {
            color: #dc2626;
        }

        .vm-title {
            font-size: 1.8rem;
            font-weight: 900;
            color: #1a1a1a;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #ef4444;
        }

        .vm-text {
            font-size: 1.05rem;
            line-height: 1.9;
            color: #475569;
            font-weight: 500;
        }

        .misi-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .misi-list li {
            font-size: 1rem;
            line-height: 1.9;
            color: #475569;
            margin-bottom: 18px;
            padding-left: 30px;
            position: relative;
            font-weight: 500;
        }

        .misi-list li::before {
            content: "→";
            position: absolute;
            left: 0;
            color: #ef4444;
            font-weight: bold;
            font-size: 1.3rem;
        }

        .motto-banner {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 50px;
            border-radius: 16px;
            text-align: center;
            margin: 60px 0;
            box-shadow: 0 20px 60px rgba(239, 68, 68, 0.3);
            position: relative;
            overflow: hidden;
        }

        .motto-banner::before {
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

        .motto-text {
            font-size: 2.2rem;
            font-weight: 900;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
            text-transform: uppercase;
        }

        body.dark-mode .sejarah-title,
        body.dark-mode .vm-title {
            color: #e5e7eb;
        }

        body.dark-mode .sejarah-text,
        body.dark-mode .vm-text,
        body.dark-mode .misi-list li,
        body.dark-mode .timeline-description {
            color: #cbd5e1;
        }

        body.dark-mode .visi-item,
        body.dark-mode .misi-item,
        body.dark-mode .timeline-item {
            background: rgba(31, 41, 55, 0.6);
            border-color: rgba(239, 68, 68, 0.2);
        }

        @media (max-width: 768px) {
            .sejarah-title {
                font-size: 2rem;
            }

            .visi-misi-section {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .motto-text {
                font-size: 1.6rem;
            }
        }

    </style>

    <div class="container sejarah-section">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="sejarah-title">Sejarah SMAN 28 Jakarta</h1>
                <p class="sejarah-subtitle">Perjalanan Panjang Menuju Keunggulan Pendidikan</p>

                <div class="timeline-item">
                    <div class="timeline-year">1970</div>
                    <div class="timeline-description">
                        Berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 343/UKK.3/1970 
                        tertanggal 5 Maret 1970, pada tanggal <strong>1 Januari 1970</strong> SMA 11 Filial resmi menjadi 
                        <strong>SMA Negeri 28 Jakarta</strong>. Sekolah ini berlokasi di Pasar Minggu, Jakarta Selatan 
                        dan telah menjadi salah satu institusi pendidikan terkemuka di wilayah tersebut.
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">2004</div>
                    <div class="timeline-description">
                        Sejak tahun pelajaran 2004/2005, <strong>SMA Negeri 28 Jakarta ditetapkan sebagai Sekolah Plus Standar Nasional</strong>.
                        Penetapan ini merupakan pengakuan atas dedikasi dan komitmen sekolah dalam memberikan pendidikan berkualitas tinggi.
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Kini</div>
                    <div class="timeline-description">
                        Sekolah ini telah berkembang menjadi institusi pendidikan modern yang menerapkan <strong>Kurikulum Sekolah Penggerak</strong>,
                        dengan misi mewujudkan lulusan yang unggul berdasarkan IMTAK dan IPTEK dalam persaingan global,
                        serta mengusung motto: <strong>TAQWA, CERDAS, SANTUN, PRESTASI</strong>.
                    </div>
                </div>

                <div class="motto-banner">
                    <div class="motto-text">TAQWA • CERDAS • SANTUN • PRESTASI</div>
                </div>

                <div class="visi-misi-section">
                    <div class="visi-item">
                        <div class="vm-icon visi"><i class="bi bi-eye-fill"></i></div>
                        <h2 class="vm-title">Visi SMAN 28</h2>
                        <p class="vm-text">
                            Mewujudkan lulusan yang unggul berdasarkan <strong>IMTAK</strong> (Iman dan Takwa) 
                            dan <strong>IPTEK</strong> (Ilmu Pengetahuan dan Teknologi) dalam persaingan global, 
                            dengan menjunjung tinggi nilai-nilai <strong>Taqwa, Cerdas, Santun, dan Prestasi</strong>.
                        </p>
                    </div>

                    <div class="misi-item">
                        <div class="vm-icon misi"><i class="bi bi-target"></i></div>
                        <h2 class="vm-title">Misi SMAN 28</h2>
                        <ul class="misi-list">
                            <li>Menanamkan nilai-nilai ketaqwaan dan budi pekerti luhur kepada peserta didik.</li>
                            <li>Mengembangkan kecerdasan akademik dan keterampilan peserta didik.</li>
                            <li>Membentuk karakter santun dalam berinteraksi dan berkomunikasi.</li>
                            <li>Mendorong prestasi akademik dan non-akademik di tingkat nasional maupun internasional.</li>
                            <li>Menerapkan pembelajaran berbasis teknologi dan inovasi.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.homepage>
