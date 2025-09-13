<x-client.layout>
    <x-slot name="title">Layanan Program</x-slot>    

    <header id="hero">
        <div class="container">
            <div class="row align-items-center text-lg-start">
                
                <section class="col-lg-7 animate-on-scroll fade-in-left">
                    <h1 class="header-1 fw-bold mb-0">Leadership & Management</h1>
                    <h1 class="header-1 fw-bold mb-4">Development Program</h1>
                    <p class="body-1 fw-normal mb-4 ">Transformasi pemimpin Anda menjadi penggerak perubahan yang inspiratif dan efektif untuk pertumbuhan bisnis yang berkelanjutan.</p>
                    <a href="#" class="btn btn-primary-custom mb-2"> Daftar Sekarang </a>
                </section>

            </div>
        </div>
    </header>

    <section id="manfaat">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Manfaat untuk Perusahaan Anda</h2>
                <p>Program ini dirancang khusus untuk memberikan dampak nyata pada perkembangan organisasi dan kinerja bisnis</p>
            </div>

            <div class="row text-center gy-5 animate-on-scroll fade-in-up">
                <div class="col-md-4">
                    <img src="{{ asset('images/icon-pengembangan.png') }}" class="manfaat-icon mb-0" alt="Pengembangan Tim">
                    <p class="fw-bold">Pengembangan Tim</p>
                    <p>Meningkatkan kemampuan dalam mengelola dan memotivasi tim secara efektif</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/icon-keputusan.png') }}" class="manfaat-icon mb-0" alt="Keputusan Strategis">
                    <p class="fw-bold">Keputusan Strategis</p>
                    <p>Kemampuan mengambil keputusan yang tepat untuk pertumbuhan bisnis</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/icon-peningkatan.png') }}" class="manfaat-icon mb-0" alt="Peningkatan Kinerja">
                    <p class="fw-bold">Peningkatan Kinerja</p>
                    <p>Meningkatkan produktivitas dan efisiensi operasional perusahaan</p>
                </div>
            </div>

        </div>
    </section>

    <section id="materi">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Materi Pelatihan</h2>
                <p>Kurikulum komprehensif yang dirancang untuk mengembangkan kompetensi kepemimpinan secara holistik.</p>
            </div>

            <div class="row gy-5 gx-lg-5 justify-content-center animate-on-scroll fade-in-up">
                <div class="col-lg-5 col-md-6">
                    <div class="materi-item">
                        <img src="{{ asset('images/icon-kepemimpinan.png') }}" class="materi-icon" alt="Ikon Kepemimpinan">
                        <div class="materi-content">
                            <h5 class="fw-bold">Dasar-dasar Kepemimpinan</h5>
                            <ul>
                                <li>Gaya kepemimpinan yang efektif</li>
                                <li>Emotional intelligence dalam kepemimpinan</li>
                                <li>Building leadership presence</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="materi-item">
                        <img src="{{ asset('images/icon-manajemen.png') }}" class="materi-icon" alt="Ikon Manajemen Tim">
                        <div class="materi-content">
                            <h5 class="fw-bold">Manajemen Tim & Organisasi</h5>
                            <ul>
                                <li>Team building dan development</li>
                                <li>Performance management</li>
                                <li>Change management</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="materi-item">
                        <img src="{{ asset('images/icon-strategic.png') }}" class="materi-icon" alt="Ikon Strategic Thinking">
                        <div class="materi-content">
                            <h5 class="fw-bold">Strategic Thinking</h5>
                            <ul>
                                <li>Decision making processes</li>
                                <li>Problem solving techniques</li>
                                <li>Strategic planning</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="materi-item">
                        <img src="{{ asset('images/icon-komunikasi.png') }}" class="materi-icon" alt="Ikon Komunikasi">
                        <div class="materi-content">
                            <h5 class="fw-bold">Communication Excellence</h5>
                            <ul>
                                <li>Effective communication</li>
                                <li>Conflict resolution</li>
                                <li>Coaching and mentoring</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="format">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Format Program</h2>
                <p>Fleksibilitas dalam pembelajaran dengan berbagai pilihan metode yang sesuai kebutuhan</p>
            </div>
            <div class="row gy-4 justify-content-center animate-on-scroll fade-in-up">
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <img src="{{ asset('images/icon-offline.png') }}" class="format-icon" alt="Offline Workshop">
                        <p class="fw-bold">Offline Workshop</p>
                        <p>3 hari intensif di lokasi terpilih. Interaksi langsung dengan trainer dan peserta lain.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <img src="{{ asset('images/icon-online.png') }}" class="format-icon" alt="Online Live Session">
                        <p class="fw-bold">Online Live Session</p>
                        <p>Sesi interaktif melalui platform digital. Fleksibel dan dapat diakses dari mana saja.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="format-card">
                        <img src="{{ asset('images/icon-blended.png') }}" class="format-icon" alt="Blended Learning">
                        <p class="fw-bold">Blended Learning</p>
                        <p>Kombinasi sesi offline dan online untuk pengalaman belajar yang komprehensif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="outcome">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Outcome & Sertifikasi</h2>
                <p>Kompetensi dan pengakuan yang akan diperoleh setelah menyelesaikan program</p>
            </div>
            
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-6 animate-on-scroll fade-in-left">
                    <div class="outcome-card">
                        <h5 class="fw-bold text-center mb-3">Kompetensi yang Diperoleh</h5>
                        <ul class="outcome-list">
                            <li>Kemampuan leadership yang matang dan efektif</li>
                            <li>Skills dalam mengelola tim dan proyek kompleks</li>
                            <li>Strategic thinking dan decision making capability</li>
                            <li>Communication dan interpersonal skills yang advanced</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 animate-on-scroll fade-in-right">
                    <div class="outcome-card">
                        <h5 class="fw-bold text-center mb-3">Sertifikasi</h5>
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <ol class="sertifikasi-list">
                                    <li>Digital certificate yang dapat diverifikasi online</li>
                                    <li>Physical certificate dengan kualitas premium</li>
                                    <li>Badge digital untuk profil Linkedin</li>
                                </ol>
                            </div>
                            <div class="col-md-5 d-none d-md-block">
                                <img src="{{ asset('images/sertifikat-preview.png') }}" class="sertifikat-preview-img" alt="Pratinjau Sertifikat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="impact">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Impact & Success Stories</h2>
                <p>Bukti nyata dampak positif program terhadap perkembangan bisnis klien kami.</p>
            </div>

            <div class="row gy-5 justify-content-center">
                
                <div class="col-lg-5 text-center animate-on-scroll fade-in-left">
                    <img src="{{ asset('images/ceo.png') }}" class="testimonial-avatar" alt="Fitrah Muhammad A">
                    <h6 class="fw-bold mt-3 mb-0">Fitrah Muhammad A</h6>
                    <p class="small text-muted">CEO, TechInnovate Indonesia</p>
                    <p class="testimonial-quote">"Program ini mengubah cara saya memimpin tim. Dalam 6 bulan, produktivitas meningkat 25% dan employee satisfaction naik signifikan."</p>
                    
                    <div class="row justify-content-center g-3 mt-3">
                        <div class="col-auto">
                            <div class="impact-card-new">+25%<span class="d-block">Produktivitas</span></div>
                        </div>
                        <div class="col-auto">
                            <div class="impact-card-new-2">-15%<span class="d-block">Turnover</span></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-center animate-on-scroll fade-in-right">
                    <img src="{{ asset('images/ceo-2.png') }}" class="testimonial-avatar" alt="Anggita Putri N">
                    <h6 class="fw-bold mt-3 mb-0">Anggita Putri N</h6>
                    <p class="small text-muted">Direktur, Manufacturing Excellence</p>
                    <p class="testimonial-quote">"Strategic thinking skills yang diajarkan membantu kami mengambil keputusan yang lebih tepat, mengurangi operational cost sebesar 18%."</p>

                    <div class="row justify-content-center g-3 mt-3">
                        <div class="col-auto">
                            <div class="impact-card-new">+30%<span class="d-block">Efisiensi</span></div>
                        </div>
                        <div class="col-auto">
                            <div class="impact-card-new-2">-15%<span class="d-block">Operational Cost</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lainnya">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Program Lainnya</h2>
                <p>Jelajahi berbagai program pelatihan yang kami tawarkan untuk pengembangan bisnis Anda</p>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6 animate-on-scroll fade-in-up">
                    <div class="program-card">
                        <img src="{{ asset('images/program-finance.png') }}" class="program-card-img" alt="Finance & Business Acumen">
                        <div class="program-card-body">
                            <h5 class="fw-bold">Finance & Business Acumen</h5>
                            <p>Tingkatkan pemahaman finansial untuk pengambilan keputusan yang lebih baik.</p>
                            <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 animate-on-scroll fade-in-up delay-1">
                    <div class="program-card">
                        <img src="{{ asset('images/program-digital.png') }}" class="program-card-img" alt="Digital Transformation & IT Training">
                        <div class="program-card-body">
                            <h5 class="fw-bold">Digital Transformation & IT Training</h5>
                            <p>Adaptasi teknologi terbaru untuk efisiensi bisnis yang optimal.</p>
                            <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 animate-on-scroll fade-in-up delay-2">
                    <div class="program-card">
                        <img src="{{ asset('images/program-marketing.png') }}" class="program-card-img" alt="Marketing & Sales Excellence">
                        <div class="program-card-body">
                            <h5 class="fw-bold">Marketing & Sales Excellence</h5>
                            <p>Tingkatkan penjualan dengan strategi pemasaran yang efektif.</p>
                            <a href="#" class="btn btn-primary mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @push('css')
        @vite(['resources/css/client/pages/layanan/styles.css'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    @endpush

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script>
            // Animasi On-Scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, {
                threshold: 0.1 
            });

            const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
            elementsToAnimate.forEach((el) => observer.observe(el));
        </script>
    @endpush
</x-client.layout>