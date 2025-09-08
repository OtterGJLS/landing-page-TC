<x-client.layout>
    <x-slot name="title">Klien & Case</x-slot>

    <header id="hero">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                
                <section class="col-lg-7 animate-on-scroll fade-in-left">
                    <h1 class="header-1 fw-bold mb-4">Klien & Studi Kasus</h1>
                    <p class="body-1 text-muted mb-4 ">Lebih dari 100+ perusahaan terkemuka telah mempercayai kami untuk mengembangkan SDM mereka. Lihat bagaimana kami membantu mereka mencapai target bisnis.</p>
                </section>

            </div>
        </div>
    </header>

    <section id="client" class="py-5">
        <div class="container">
            <div>
                <h2 class="header-2 text-center mb-5 fw-bold animate-on-scroll fade-in-up">Dipercaya oleh Perusahaan Terkemuka</h2>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4 bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/mandiri.png') }}" alt="Mandiri" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4  bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/telkom.jpg') }}" alt="Telkom" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4  bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/pertamina.jpg') }}" alt="Pertamina" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4  bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/astra.png') }}" alt="Astra" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4  bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/garuda.png') }}" alt="Garuda ID" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4  bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/bca.png') }}" alt="BCA" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4  bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/unilever.png') }}" alt="Unilever" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center animate-on-scroll fade-in-up">
                    <div class="client-logo p-4  bg-white h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/indofood.png') }}" alt="Indofood" class="img-fluid" style="max-height: 80px;">
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="testimoni">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Apa Kata Mereka</h2>
                <p>Testimoni dari klien yang telah menggunakan layanan kami.</p>
            </div>

            <div class="glide-testimoni animate-on-scroll fade-in-up">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">

                        <li class="glide__slide">
                            <div class="card testimonial-card h-100 shadow">
                                <div class="card-header">
                                    <div class="d-flex flex-column align-items-left">
                                        <img src="{{ asset('images/budi.png') }}" class="rounded-circle mb-3" alt="Budi Santoso" style="width: 60px; height: 60px;">
                                        <div>
                                            <h5 class="mb-0 fw-bold">Budi Santoso</h5>
                                            <small>HR Director<br>PT Teknologi Maju</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <img src="{{ asset('images/quote.png') }}">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="card-text">"Program pelatihan dari Training Corp sangat membantu meningkatkan produktivitas tim kami hingga 35%."</p>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="card testimonial-card h-100 shadow">
                                <div class="card-header">
                                    <div class="d-flex flex-column align-items-left">
                                        <img src="{{ asset('images/sari.png') }}" class="rounded-circle mb-3" alt="Sari Dewi" style="width: 60px; height: 60px;">
                                        <div>
                                            <h5 class="mb-0 fw-bold">Sari Dewi</h5>
                                            <small>Learning & Development Manager<br>PT Finansial Sejahtera</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <img src="{{ asset('images/quote.png') }}">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="card-text">"Trainer yang profesional dan materi yang up-to-date. Sertifikasi internasional sangat membantu kredibilitas perusahaan kami."</p>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="card testimonial-card h-100 shadow">
                                <div class="card-header">
                                    <div class="d-flex flex-column align-items-left">
                                        <img src="{{ asset('images/ahmad.png') }}" class="rounded-circle mb-3" alt="Ahmad Rahman" style="width: 60px; height: 60px;">
                                        <div>
                                            <h5 class="mb-0 fw-bold">Ahmad Rahman</h5>
                                            <small>Operations Director<br>PT Manufaktur Indonesia</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <img src="{{ asset('images/quote.png') }}">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="card-text">"ROI yang terukur dari program pelatihan ini luar biasa. Tim menjadi lebih efisien dan engagement karyawan meningkat drastis."</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
                </div>

            </div>

        </div>
    </section>

    <section id="proses">
        <div class="container">
            <div class="row gx-4 gy-4 justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="header-2 fw-bold mb-3 animate-on-scroll fade-in-up">Testimoni Video</h2>
                    <p class="body-1 text-muted mb-3 animate-on-scroll fade-in-up">Dengar langsung dari para HR Manager dan peserta training tentang pengalaman mereka</p>
                </div>

                <div class="col-lg-6 col-md-6 animate-on-scroll fade-in-left">
                    <div class="card h-100 shadow">
                        <div class="card-body d-flex flex-column justify-content-between"> {{-- Tambahkan d-flex flex-column justify-content-between --}}
                            <div> {{-- Bungkus konten atas di sini --}}
                                <div class="embed-responsive embed-responsive-16by9 justify-content-center d-flex mb-3"> {{-- Ubah mb-2 menjadi mb-3 --}}
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/t00JmxGWq4I?si=eO6cAP6Yp2DWrsu3" allowfullscreen></iframe>
                                </div>
                                <p class="body-1-card text-center mb-4">"Program leadership development terbaik yang pernah kami ikuti. Metodologi yang praktis dan applicable."</p> {{-- Tambahkan mb-4 --}}
                            </div>
                            <div class="text-left"> {{-- Tambahkan text-center di sini --}}
                                <h4 class="mb-1 fw-bold color-primary">Sari Dewi</h4> {{-- Ubah mb-0 menjadi mb-1 --}}
                                <small class="text-muted">Learning & Development Manager, PT Finansial Sejahtera</small> {{-- Tambahkan text-muted --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 animate-on-scroll fade-in-right">
                    <div class="card h-100 shadow">
                        <div class="card-body d-flex flex-column justify-content-between"> {{-- Tambahkan d-flex flex-column justify-content-between --}}
                            <div> {{-- Bungkus konten atas di sini --}}
                                <div class="embed-responsive embed-responsive-16by9 justify-content-center d-flex mb-3"> {{-- Ubah mb-2 menjadi mb-3 --}}
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0ywIfmzx6yQ?si=YRIW7x4jlqvQU3pB" allowfullscreen></iframe>
                                </div>
                                <p class="body-1-card text-center mb-4">"Training Center memberikan solusi pembelajaran yang sangat efektif. Tim kami berhasil meningkatkan skill digital secara signifikan."</p> {{-- Tambahkan mb-4 --}}
                            </div>
                            <div class="text-left"> {{-- Tambahkan text-center di sini --}}
                                <h4 class="mb-1 fw-bold color-primary">Budi Santoso</h4> {{-- Ubah mb-0 menjadi mb-1 --}}
                                <small class="text-muted">HR Director, PT Teknologi Maju</small> {{-- Tambahkan text-muted --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    @push('css')
        @vite(['resources/css/client/pages/klien/styles.css'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    @endpush

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script>
            const testimoniSlider = document.querySelector('.glide-testimoni');
            if (testimoniSlider) {
                new Glide(testimoniSlider, {
                    type: 'carousel',
                    startAt: 0,
                    perView: 3,
                    gap: 5,
                    autoplay: 2500,
                    hoverpause: true,
                    breakpoints: {
                        1200: { perView: 3 }, 
                        992: { perView: 2 },
                        768: { perView: 1 }
                    }
                }).mount();
            }

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