<x-client.layout>
    <x-slot name="title">Pelatihan</x-slot>

    <header id="hero">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                
                <section class="col-lg-7 animate-on-scroll fade-in-left">
                    <h1 class="header-1 fw-bold mb-4">Metode Pelatihan Terdepan</h1>
                    <p class="body-1 text-muted mb-4 ">Pengalaman pembelajaran yang fleksibel dan efektif dengan berbagai metode yang disesuaikan kebutuhan perusahaan Anda.</p>
                </section>

            </div>
        </div>
    </header>

    <section id="pendekatan">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Pendekatan Multi-Metode</h2>
                <p>Tiga pendekatan utama yang dirancang untuk memberikan pengalaman belajar yang maksimal.</p>
            </div>

            <div class="row text-center gy-5 animate-on-scroll fade-in-up">
                <div class="col-md-4">
                    <img src="{{ asset('images/pengembangan.png') }}" class="pendekatan-icon mb-0" alt="Pengembangan Tim">
                    <p class="fw-bold">Pengembangan Tim</p>
                    <p>Meningkatkan kemampuan dalam mengelola dan memotivasi tim secara efektif</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/keputusan.png') }}" class="pendekatan-icon mb-0" alt="Keputusan Strategis">
                    <p class="fw-bold">Keputusan Strategis</p>
                    <p>Kemampuan mengambil keputusan yang tepat untuk pertumbuhan bisnis</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/peningkatan.png') }}" class="pendekatan-icon mb-0" alt="Peningkatan Kinerja">
                    <p class="fw-bold">Peningkatan Kinerja</p>
                    <p>Meningkatkan produktivitas dan efisiensi operasional perusahaan</p>
                </div>
            </div>
        </div>
    </section>
    

    <section id="metode">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Metode Pelatihan Kami</h2>
                <p class="text-muted">Tiga pendekatan utama yang dirancang untuk memberikan pengalaman belajar yang maksimal.</p>
            </div>
            
            <div class="text-center">
                <ul class="nav nav-pills justify-content-center mb-4" id="pelatihanTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="bootcamp-tab" data-bs-toggle="pill" data-bs-target="#bootcamp-content" type="button" role="tab" aria-controls="bootcamp-content" aria-selected="true">Bootcamp</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="mini-bootcamp-tab" data-bs-toggle="pill" data-bs-target="#mini-bootcamp-content" type="button" role="tab" aria-controls="mini-bootcamp-content" aria-selected="false">Mini Bootcamp</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="short-course-tab" data-bs-toggle="pill" data-bs-target="#short-course-content" type="button" role="tab" aria-controls="short-course-content" aria-selected="false">Short Course</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pelatihanTabContent">
                <div class="tab-pane fade show active" id="bootcamp-content" role="tabpanel" aria-labelledby="bootcamp-tab">
                    <div class="row g-4 align-items-center animate-on-scroll fade-in-left">
                        <div class="col-lg-6">
                            <img src="{{ asset('images/metode.png') }}" class="img-fluid rounded-4" alt="Team analyzing data">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <div class="info-box mb-4">
                                <h5 class="fw-bold">Metode Pembelajaran</h5>
                                <ul class="list-unstyled">
                                    <li>1. Self Learning</li>
                                    <li>2. Online-Live Interactive</li>
                                    <li>3. Hybrid (Online & Offline Class)</li>
                                    <li>4. Blended Learning (Online & Self Learning di LMS)</li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h5 class="fw-bold">Fasilitas Unggulan</h5>
                                <ul class="list-unstyled">
                                    <li>1. Job Connector</li>
                                    <li>2. Portfolio</li>
                                    <li>3. Virtual Internship Program</li>
                                    <li>4. Career Mentoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="metode-item animate-on-scroll fade-in-up mt-5">
                        <h5 class="metode-title">Bootcamp</h5>
                        <p class="metode-description">Kelas intensif interaktif untuk pemula sampai siap kerja dalam tiga bulan.</p>
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}"  alt="Bootcamp Image 1">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Bootcamp Image 2">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Bootcamp Image 3">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="mini-bootcamp-content" role="tabpanel" aria-labelledby="mini-bootcamp-tab">
                    <div class="row g-4 align-items-center animate-on-scroll fade-in-left">
                        <div class="col-lg-6">
                            <img src="{{ asset('images/metode.png') }}" class="img-fluid rounded-4" alt="Team analyzing data">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <div class="info-box mb-4">
                                <h5 class="fw-bold">Metode Pembelajaran</h5>
                                <ul class="list-unstyled">
                                    <li>1. Self Learning</li>
                                    <li>2. Online-Live Interactive</li>
                                    <li>3. Hybrid (Online & Offline Class)</li>
                                    <li>4. Blended Learning (Online & Self Learning di LMS)</li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h5 class="fw-bold">Fasilitas Unggulan</h5>
                                <ul class="list-unstyled">
                                    <li>1. Job Connector</li>
                                    <li>2. Portfolio</li>
                                    <li>3. Virtual Internship Program</li>
                                    <li>4. Career Mentoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="metode-item animate-on-scroll fade-in-up mt-5">
                        <h5 class="metode-title">Mini Bootcamp</h5>
                        <p class="metode-description">Kelas intensif interaktif untuk pemula sampai siap kerja dalam 5-7 minggu.</p>
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Mini Bootcamp Image 1">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Mini Bootcamp Image 2">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Mini Bootcamp Image 3">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="short-course-content" role="tabpanel" aria-labelledby="short-course-tab">
                    <div class="row g-4 align-items-center animate-on-scroll fade-in-left">
                        <div class="col-lg-6">
                            <img src="{{ asset('images/metode.png') }}" class="img-fluid rounded-4" alt="Team analyzing data">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <div class="info-box mb-4">
                                <h5 class="fw-bold">Metode Pembelajaran</h5>
                                <ul class="list-unstyled">
                                    <li>1. Self Learning</li>
                                    <li>2. Online-Live Interactive</li>
                                    <li>3. Hybrid (Online & Offline Class)</li>
                                    <li>4. Blended Learning (Online & Self Learning di LMS)</li>
                                </ul>
                            </div>
                            <div class="info-box">
                                <h5 class="fw-bold">Fasilitas Unggulan</h5>
                                <ul class="list-unstyled">
                                    <li>1. Job Connector</li>
                                    <li>2. Portfolio</li>
                                    <li>3. Virtual Internship Program</li>
                                    <li>4. Career Mentoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="metode-item animate-on-scroll fade-in-up mt-5">
                        <h5 class="metode-title">Short Course</h5>
                        <p class="metode-description">Kelas durasi pendek untuk memperdalam keahlianmu pada topik tertentu.</p>
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Short Course Image 1">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Short Course Image 2">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="training-card">
                                    <img src="{{ asset('images/bootcamp.png') }}" alt="Short Course Image 3">
                                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    
    <section id="cta">
        <div class="container">
            <div class="cta-box text-center p-5 animate-on-scroll fade-in-up">
                <h2 class="header-1 fw-bold">Temukan Metode Terbaik untuk Tim Anda </h2>
                <p class="my-4">Tim ahli kami siap membantu Anda memilih pendekatan pelatihan yang paling sesuai dengan visi dan tujuan perusahaan Anda.</p>
                <a href="#" class="btn btn-primary me-2">Jadwal Konsultasi </a>
                <a href="#" class="btn btn-primary">Download Panduan </a>
            </div>
        </div>
    </section>    


    @push('css')
        @vite(['resources/css/client/pages/pelatihan/styles.css'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    @endpush

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
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