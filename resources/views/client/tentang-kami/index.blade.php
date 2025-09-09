<x-client.layout>
    <x-slot name="title">Tentang Kami</x-slot>

    <header id="hero">
        <div class="container">
            <div class="row align-items-center text-lg-start">
                
                <section class="col-lg-7 animate-on-scroll fade-in-left">
                    <h1 class="header-1 fw-bold mb-4">Tentang Training Corp</h1>
                    <p class="body-1 fw-normal mb-4 ">Membangun SDM Unggul melalui Pelatihan Profesional yang Inovatif dan Aplikatif</p>
                    <a href="#" class="btn btn-primary-custom mb-2"> Jelajahi </a>
                </section>

            </div>
        </div>
    </header>

    <section id="about-us">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Profil Perusahaan</h2>
                <p>Menjadi mitra terpercaya dalam pengembangan kompetensi SDM korporasi</p>
            </div>
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 d-none d-lg-block animate-on-scroll fade-in-left">
                    <img src="{{ asset('images\about.png') }}" class="img-fluid tim-img" alt="Tim">
                </div>
                <div class="col-lg-6 animate-on-scroll fade-in-right">
                    <h2 class="header-4 fw-bold mb-3">Tentang Kami</h2>
                    <img src="{{ asset('images\about.png') }}" class="img-fluid d-lg-none tim-img mb-3" alt="Tim">
                    <p class="body-1-card">Sejak tahun 2010, EduCorp telah menjadi penyedia layanan pelatihan profesional yang berfokus pada pengembangan sumber daya manusia dan peningkatan kompetensi korporasi. Dengan pengalaman bertahun-tahun di berbagai sektor industri, kami berkomitmen membantu perusahaan dan individu mencapai potensi terbaik mereka.</p>
                    <p class="body-1-card">Program pelatihan kami dirancang secara inovatif, relevan, dan aplikatif, memastikan bahwa setiap peserta dapat menerapkan pengetahuan yang diperoleh secara langsung di lingkungan kerja mereka.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="goals">
        <div class="container">
            <div class="row gx-4 gy-4 justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="header-2 fw-bold mb-3 animate-on-scroll fade-in-up">Visi & Misi</h2>
                    <p class="mb-3 animate-on-scroll fade-in-up">Bekerja sama dengan perusahaan-perusahaan terkemuka</p>
                </div>

                <div class="col-lg-5 col-md-6 animate-on-scroll fade-in-left">
                    <div class="card h-100 shadow">
                        <div class="card-body d-flex align-items-center p-4"> {{-- Tambahkan d-flex flex-column justify-content-between --}}
                            <div class="visi-icon me-4 flex-shrink-0"> {{-- Bungkus konten atas di sini --}}
                                <img src="{{ asset('images\visi.png') }}" class="img-fluid mb-2" alt="visi">
                            </div>
                            <p class="body-1-card mb-4">“Menjadi mitra terpercaya dalam menciptakan SDM unggul yang mampu bersaing secara global dan mendorong pertumbuhan korporasi yang berkelanjutan.”</p> {{-- Tambahkan mb-4 --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 animate-on-scroll fade-in-right">
                    <div class="card h-100 shadow">
                        <div class="card-body d-flex align-items-center p-4"> {{-- Tambahkan d-flex flex-column justify-content-between --}}
                            <div class="misi-icon me-0 flex-shrink-0">
                                <img src="{{ asset('images\misi.png') }}" class="img-fluid mb-2" alt="misi">
                            </div>
                            <ul class="body-1-card mb-3">
                                <li>Menyediakan pelatihan berkualitas tinggi yang berorientasi pada pengembangan kompetensi.</li>
                                <li>Mendorong transformasi budaya kerja yang produktif dan inovatif.</li>
                                <li>Mengembangkan program pelatihan yang adaptif terhadap kebutuhan industri.</li>
                                <li>Membangun ekosistem pembelajaran yang inklusif dan berkelanjutan.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="tim">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Tim Pengajar & Fasilitator</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 animate-on-scroll fade-in-up">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/ahmadTim.png') }}" class="rounded-circle mb-3" alt="Ahmad" style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="card-title mb-1 fw-bold">Ahmad Rizki</h5>
                            <p class="card-text">Senior Trainer</p>    
                            <p class="body-1-card">5+ tahun pengalaman di bidang HR Development dan Corporate Training</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-on-scroll fade-in-up">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/budiTim.png') }}" class="rounded-circle mb-3" alt="Budi" style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="card-title mb-1 fw-bold">Budi Santoso</h5>
                            <p class="card-text">Business Consultant</p>
                            <p class="body-1-card">Ahli dalam transformasi digital dan perubahan organisasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-on-scroll fade-in-up">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/sariTim.png') }}" class="rounded-circle mb-3" alt="Sari" style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="card-title mb-1 fw-bold">Sari Dewi</h5>
                            <p class="card-text">Leadership Coach</p>
                            <p class="body-1-card">Spesialis pengembangan leadership dan manajemen strategis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-on-scroll fade-in-up">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/indraTim.png') }}" class="rounded-circle mb-3" alt="Indra" style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="card-title mb-1 fw-bold">Indra Setiawan</h5>
                            <p class="card-text">Soft Skill Trainer</p>
                            <p class="body-1-card">Spesialis komunikasi efektif dan pengembangan interpersonal skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="legalitas">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold mb-3">Legalitas & Sertifikasi</h2>
                <p>Kami beroperasi dengan standar profesional tertinggi</p>
            </div>
            <div class="row g-4 animate-on-scroll fade-in-up">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                             <img src="{{ asset('images/bnsp.png') }}" class="tantangan-icon mb-3" alt="BNSP">
                            <p class="card-text">Badan Nasional Sertifikasi Profesi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/akreditasi.png') }}" class="tantangan-icon mb-3" alt="Akreditasi Internasional">
                            <p class="card-text">Standar kualitas global</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/hr.png') }}" class="tantangan-icon mb-3" alt="HR">
                            <p class="card-text">Anggota aktif asosiasi HR profesional</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/iso.png') }}" class="tantangan-icon mb-3" alt="ISO">
                            <p class="card-text">Standar manajemen mutu internasional</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 animate-on-scroll fade-in-up">
                <div class="callout-box">
                    <div class="row align-items-center g-3 mb-3">
                        <div class="text-md-start">
                            <h3 class="fw-semi-bold mb-3">Komitmen terhadap Kualitas</h3>
                            <p class="mb-0">Dengan dukungan legalitas dan sertifikasi yang lengkap, kami memastikan kualitas dan kredibilitas layanan pelatihan yang kami berikan kepada klien. Setiap program dirancang sesuai dengan standar industri terbaru dan diawasi oleh tim quality assurance profesional.</p>
                        </div>
                    </div>
                    <div class="row align-items-center g-3 mb-1">
                        <div class="col-lg-6 col-md-8">
                            <p>Legalitas Perusahaan</p>
                            <ul class="body-1-card mb-0">
                                <li>PT. EduCorp Training Indonesia</li>
                                <li>NPWP: 01.234.567.8-912.000</li>
                                <li>SIUP: 1234/5678/IX/2023</li>
                                <li>TDP: 9876543210</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <p>Afiliasi Profesional</p>
                            <ul class="body-1-card mb-0">
                                <li>Asosiasi HRD Indonesia (AHRI)</li>
                                <li>Indonesia Training Association (ITA)</li>
                                <li>International Coach Federation (ICF)</li>
                                <li>ASEAN Association of Training Providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @push('css')
        @vite(['resources/css/client/pages/tentang-kami/styles.css'])
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