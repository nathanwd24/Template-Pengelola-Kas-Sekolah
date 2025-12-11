<x-layouts.homepage title="Kontak Sekolah">

    <style>
        .contact-section {
            padding: 80px 0;
        }

        .contact-title {
            font-size: 3.5rem;
            font-weight: 900;
            color: #1a1a1a;
            margin-bottom: 15px;
            text-align: center;
            letter-spacing: -1px;
        }

        .contact-subtitle {
            font-size: 1.2rem;
            color: #64748b;
            text-align: center;
            margin-bottom: 60px;
            font-weight: 500;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 35px;
            border-left: 5px solid #ef4444;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(239, 68, 68, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .contact-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.15);
        }

        .contact-icon {
            font-size: 2.2rem;
            color: #ef4444;
            margin-right: 25px;
            margin-top: 5px;
            flex-shrink: 0;
        }

        .contact-label {
            font-size: 0.75rem;
            font-weight: 900;
            color: #ef4444;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .contact-value {
            font-size: 1.1rem;
            font-weight: 500;
            color: #475569;
            line-height: 1.7;
        }

        .contact-value a {
            color: #ef4444;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .contact-value a:hover {
            color: #dc2626;
            text-decoration: underline;
        }

        .map-title {
            font-size: 2.5rem;
            font-weight: 900;
            color: #1a1a1a;
            margin-bottom: 40px;
            text-align: center;
            margin-top: 80px;
            position: relative;
            padding-bottom: 20px;
        }

        .map-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #ef4444, #dc2626);
            border-radius: 2px;
        }

        .map-container {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.1);
        }

        body.dark-mode .contact-title {
            color: #e5e7eb;
        }

        body.dark-mode .contact-subtitle {
            color: #cbd5e1;
        }

        body.dark-mode .contact-item {
            background: rgba(31, 41, 55, 0.6);
            border-color: rgba(239, 68, 68, 0.2);
        }

        body.dark-mode .contact-value {
            color: #cbd5e1;
        }

        body.dark-mode .map-title {
            color: #e5e7eb;
        }

        @media (max-width: 768px) {
            .contact-title {
                font-size: 2rem;
            }

            .contact-item {
                padding: 25px;
            }
        }
    </style>

    <div class="container contact-section">
        <h1 class="contact-title">Hubungi Kami</h1>
        <p class="contact-subtitle">Kami siap menerima pertanyaan, masukan, dan informasi dari Anda</p>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="contact-item">
                    <i class="bi bi-geo-alt-fill contact-icon"></i>
                    <div>
                        <div class="contact-label">Alamat</div>
                        <div class="contact-value">Jl. Raya Ragunan No.33, RT.5/RW.7, Jati Padang, Ps. Minggu, Jakarta Selatan 12540</div>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="bi bi-telephone-fill contact-icon"></i>
                    <div>
                        <div class="contact-label">Telepon</div>
                        <div class="contact-value"><a href="tel:+62217806293">(021) 7806293</a></div>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="bi bi-envelope-fill contact-icon"></i>
                    <div>
                        <div class="contact-label">Email</div>
                        <div class="contact-value"><a href="mailto:mail28jkt@gmail.com">mail28jkt@gmail.com</a></div>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="bi bi-globe contact-icon"></i>
                    <div>
                        <div class="contact-label">Website</div>
                        <div class="contact-value"><a href="https://sman28jkt.sch.id/" target="_blank">sman28jkt.sch.id</a></div>
                    </div>
                </div>

            </div>
        </div>

        <h2 class="map-title">Lokasi Sekolah</h2>
        <div class="map-container" style="overflow:hidden; height:400px;">
            <iframe 
                width="100%" 
                height="100%" 
                frameborder="0" 
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.465234567!2d106.8156789!3d-6.3003456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee38e2a4f7e9%3A0x3a9e3b3e5a8b7c6d!2sSMA%20Negeri%2028%20Jakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid">
            </iframe>
        </div>

    </div>

</x-layouts.homepage>
