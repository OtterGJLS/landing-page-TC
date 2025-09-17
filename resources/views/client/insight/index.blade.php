<x-client.layout>
    <x-slot name="title">Insight</x-slot>

    <header id="hero">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <section class="col-lg-8 animate-on-scroll fade-in-left">
                    <h1 class="header-1 fw-bold mb-4">Insights & Resources</h1>
                    <p class="body-1 text-muted mb-4">Tetap update dengan tren terbaru, best practices, dan insights dari dunia pengembangan SDM. Akses konten eksklusif dari para ahli industri.</p>
                </section>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari artikel, ebook, webinar...">
                        <button class="btn btn-warning" type="button">
                            <i class="fas fa-search me-1"></i>Cari
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="resources">
        <div class="container">

            <div class="text-center">
                <ul class="nav nav-pills justify-content-center mb-5" id="insightTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="artikel-tab" data-bs-toggle="pill" data-bs-target="#artikel-content" type="button" role="tab">Artikel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ebook-tab" data-bs-toggle="pill" data-bs-target="#ebook-content" type="button" role="tab">Ebooks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="webinar-tab" data-bs-toggle="pill" data-bs-target="#webinar-content" type="button" role="tab">Webinars</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="insightTabContent">
                
                <div class="tab-pane fade show active" id="artikel-content" role="tabpanel">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="artikel-card">
                                <img src="{{ asset('images/artikel1.png') }}" class="artikel-card-img" alt="Artikel 1">
                                <div class="artikel-card-body">
                                    <div class="artikel-meta">
                                        <span class="meta-tag">Digital Transformation</span>
                                        <span><i class="far fa-clock"></i> 8 min read</span>
                                        <span><i class="far fa-eye"></i> 2.1 k</span>
                                    </div>
                                    <h5 class="fw-bold my-3">Trend Pengembangan SDM di Era Digital 2024</h5>
                                    <p class="small text-muted">Analisis mendalam tentang perubahan kebutuhan skill dan strategi pengembangan SDM di era transformasi digital.</p>
                                    <div class="artikel-footer">
                                        <span class="text-muted small">15 Jan 2025</span>
                                        <a href="#">
                                            Baca Artikel <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="artikel-card">
                                <img src="{{ asset('images/artikel2.png') }}" class="artikel-card-img" alt="Artikel 2">
                                <div class="artikel-card-body">
                                    <div class="artikel-meta">
                                        <span class="meta-tag">Training Management</span>
                                        <span><i class="far fa-clock"></i> 6 min read</span>
                                        <span><i class="far fa-eye"></i> 1.8 k</span>
                                    </div>
                                    <h5 class="fw-bold my-3">ROI Training: Mengukur Efektivitas Program Pelatihan</h5>
                                    <p class="small text-muted">Metodologi dan tools untuk mengukur return on investment dari program training perusahaan.</p>
                                    <div class="artikel-footer">
                                        <span class="text-muted small">10 Jan 2025</span>
                                        <a href="#">
                                            Baca Artikel <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="ebook-content" role="tabpanel">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="ebook-card">
                                <span class="ebook-tag">Digital HR</span>
                                <img src="{{ asset('images/artikel1.png') }}" class="ebook-card-img" alt="Ebook 1">
                                
                                <div class="ebook-card-content">
                                    <h5 class="fw-bold">Panduan Lengkap Transformasi Digital SDM</h5>
                                    <p class="small text-muted">eBook komprehensif tentang strategi dan implementasi transformasi digital dalam manajemen SDM.</p>
                                </div>

                                <div class="ebook-meta">
                                    <span>45 halaman</span> • <span>850+ downloads</span>
                                </div>

                                <a href="#" class="btn btn-primary w-100 mt-3">
                                    <i class="fas fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="ebook-card">
                                <span class="ebook-tag">Leadership</span>
                                <img src="{{ asset('images/artikel1.png') }}" class="ebook-card-img" alt="Ebook 2">

                                <div class="ebook-card-content">
                                    <h5 class="fw-bold">Framework Pengembangan Leadership Milenial</h5>
                                    <p class="small text-muted">Whitepaper tentang pendekatan baru dalam mengembangkan leader generasi milenial dan Gen-Z.</p>
                                </div>
                                
                                <div class="ebook-meta">
                                    <span>32 halaman</span> • <span>650+ downloads</span>
                                </div>

                                <a href="#" class="btn btn-primary w-100 mt-3">
                                    <i class="fas fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="webinar-content" role="tabpanel">
                    
                    <div class="text-center mb-5">
                        <h2 class="header-2 fw-bold">Event & Webinar Mendatang</h2>
                    </div>
                    <div class="row gy-4 mb-5 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="event-card">
                                <div class="event-header">
                                    <i class="far fa-calendar"></i>
                                    <div>
                                        <p class="mb-0 fw-bold">20 Des 2025</p>
                                        <p class="small text-muted mb-0">14:00 - 15:30 WIB</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="event-body">
                                    <h5 class="fw-bold mb-3">Webinar: Future of Work & Skills Development</h5>
                                    <div class="event-details">
                                        <div class="detail-row">
                                            <span>Speaker:</span>
                                            <span class="fw-bold">Dr. Maya Sari, PhD</span>
                                        </div>
                                        <div class="detail-row">
                                            <span>Peserta:</span>
                                            <span class="fw-bold">500+</span>
                                        </div>
                                        <div class="detail-row">
                                            <span>Harga:</span>
                                            <span class="fw-bold text-success">Gratis</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary w-100 mt-auto">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="event-card">
                                <div class="event-header">
                                    <i class="far fa-calendar"></i>
                                    <div>
                                        <p class="mb-0 fw-bold">22 Des 2025</p>
                                        <p class="small text-muted mb-0">09:00 - 12:30 WIB</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="event-body">
                                    <h5 class="fw-bold mb-3">Design Thinking for HR Innovation</h5>
                                    <div class="event-details">
                                        <div class="detail-row">
                                            <span>Speaker:</span>
                                            <span class="fw-bold">Agus Firmanto, CHRP</span>
                                        </div>
                                        <div class="detail-row">
                                            <span>Peserta:</span>
                                            <span class="fw-bold">50</span>
                                        </div>
                                        <div class="detail-row">
                                            <span>Harga:</span>
                                            <span class="fw-bold">Rp 2.500.000</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary w-100 mt-auto">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="event-card">
                                <div class="event-header">
                                    <i class="far fa-calendar"></i>
                                    <div>
                                        <p class="mb-0 fw-bold">15 Des 2025</p>
                                        <p class="small text-muted mb-0">08:00 - 15:30 WIB</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="event-body">
                                    <h5 class="fw-bold mb-3">HR Excellence Summit 2024</h5>
                                    <div class="event-details">
                                        <div class="detail-row">
                                            <span>Speaker:</span>
                                            <span class="fw-bold">Multiple Speakers</span>
                                        </div>
                                        <div class="detail-row">
                                            <span>Peserta:</span>
                                            <span class="fw-bold">1000+</span>
                                        </div>
                                        <div class="detail-row">
                                            <span>Harga:</span>
                                            <span class="fw-bold">Rp 5.000.000</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary w-100 mt-auto">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5 mb-5">
                        <h2 class="header-2 fw-bold">Record Webinar</h2>
                    </div>
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="record-card">
                                <div class="record-thumbnail">
                                    <img src="{{ asset('images/webinar.png') }}" alt="Webinar 1">
                                    <i class="fas fa-play-circle"></i>
                                    <span class="record-tag">Digital HR</span>
                                </div>
                                <div class="record-body">
                                    <h5 class="fw-bold">Future of Learning: AI & Personalization</h5>
                                    <p class="small text-muted">Speaker: Ahmad Supratman</p>
                                </div>
                                <div class="record-meta">
                                    <span><i class="far fa-clock"></i> 60 menit</span>
                                    <span><i class="far fa-eye"></i> 1.2k views</span>
                                    <span><i class="far fa-calendar-alt"></i> 20 Des 2023</span>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-outline-secondary w-100">
                                    <i class="far fa-play-circle"></i> Tonton Webinar
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="record-card">
                                <div class="record-thumbnail">
                                    <img src="{{ asset('images/webinar.png') }}" alt="Webinar 2">
                                    <i class="fas fa-play-circle"></i>
                                    <span class="record-tag">Remote Management</span>
                                </div>
                                <div class="record-body">
                                    <h5 class="fw-bold">Building High-Performance Teams Remotely</h5>
                                    <p class="small text-muted">Speaker: Dr. Sarah Wijaya</p>
                                </div>
                                <div class="record-meta">
                                    <span><i class="far fa-clock"></i> 45 menit</span>
                                    <span><i class="far fa-eye"></i> 980 views</span>
                                    <span><i class="far fa-calendar-alt"></i> 15 Des 2023</span>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-outline-secondary w-100">
                                    <i class="far fa-play-circle"></i> Tonton Webinar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('css')
        @vite(['resources/css/client/pages/insight/styles.css'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @endpush

    @push('js')
        <script>
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