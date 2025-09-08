<x-client.layout>
    <header id="hero">
        <div class="container">
            <div class="row align-items-center text-lg-start">
                
                <section class="col-lg-7 animate-on-scroll fade-in-left">
                    <h1 class="header-1 fw-bold mb-0">Solusi Pelatihan</h1>
                    <h1 class="header-1 fw-bold mb-4">Korporasi yang Teruji</h1>
                    <p class="body-1 fw-normal mb-4 ">Tingkatkan kompetensi SDM perusahaan Anda dengan program pelatihan yang dirancang khusus untuk menghadapi tantangan bisnis modern</p>
                    <a href="#" class="btn btn-primary-custom mb-2"> Join Us </a>
                </section>

            </div>
        </div>
    </header>

    <section id="tantangan">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Tantangan Perusahaan & Solusi Kami</h2>
                <p>Menghadapi era digital dengan SDM yang kompeten dan siap bersaing.</p>
            </div>

            <div class="row text-center gy-5 animate-on-scroll fade-in-up">
                <div class="col-md-4">
                    <img src="{{ asset('images/sdm.png') }}" class="tantangan-icon mb-5" alt="SDM Tidak Siap">
                    <p>Keterampilan yang tidak sesuai dengan kebutuhan pasar modern menghambat pertumbuhan perusahaan.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/digitalisasi.png') }}" class="tantangan-icon mb-3" alt="Digitalisasi">
                    <p>Transformasi digital membutuhkan adaptasi cepat dan penguasaan teknologi baru.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/leadership.png') }}" class="tantangan-icon mb-3" alt="Leadership">
                    <p>Kepemimpinan yang visioner diperlukan untuk mengarahkan tim menuju kesuksesan.</p>
                </div>
            </div>

            <div class="mt-5 animate-on-scroll fade-in-up">
                <div class="callout-box">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-8 col-md-12 text-center text-md-start">
                            <h3 class="fw-semi-bold">Bingung? Pilih Trainin Comp</h3>
                            <p class="mb-0">Kami menyediakan program pelatihan komprehensif yang dirancang khusus untuk mengatasi tantangan bisnis Anda.</p>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center"> 
                            <img src="{{ asset('images/solusi.png') }}" class="callout-image img-fluid" alt="Solusi Trainin Comp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    {{-- Featured program Section --}}
    <section id="program">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Program Unggulan</h2>
                <p>Berbagai program pelatihan yang dirancang untuk kebutuhan korporasi.</p>
            </div>
            <div class="row g-4 animate-on-scroll fade-in-up">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                             <img src="{{ asset('images/program1.png') }}" class="tantangan-icon mb-3" alt="Leadership">
                            <p class="card-text">Pengembangan kepemimpinan dan manajemen strategis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/program2.png') }}" class="tantangan-icon mb-3" alt="Digital Transformation">
                            <p class="card-text">Penguasaan teknologi dan transformasi digital.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/program3.png') }}" class="tantangan-icon mb-3" alt="Compliance">
                            <p class="card-text">Pelatihan regulasi dan kepatuhan perusahaan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body">
                            <img src="{{ asset('images/program4.png') }}" class="tantangan-icon mb-3" alt="Finance">
                            <p class="card-text">Manajemen keuangan dan analisis finansial.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-lg">Lihat Semua Program</a>
            </div>
        </div>
    </section>
    {{-- End Featured program Section --}}

    <hr/>

    {{-- Partners & Clients Section --}}
    <section id="clients">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll fade-in-up">
                <h2 class="header-2 fw-bold">Partner & Klien Kami</h2>
                <p>Bekerja sama dengan perusahaan-perusahaan terkemuka.</p>
            </div>
            
            {{-- This would ideally be a scrolling marquee/slider --}}
            <div class="d-flex flex-wrap justify-content-center align-items-center mb-4 animate-on-scroll fade-in-up">
                <img src="{{ asset('images/clients.png') }}" alt="Client 1" class="p-0" style="height: 300px;">
                <img src="{{ asset('images/clients.png') }}" alt="Client 1" class="p-0" style="height: 300px;">
            </div>
                <!-- <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <img src="{{ asset('images/indomie.jpg') }}" alt="Indofood" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/tehbotol.jpg') }}" alt="Sosro" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/kai.jpg') }}" alt="Kereta Api Indonesia" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/bni.jpg') }}"alt="BNI" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/pln.jpg') }}" alt="PLN" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/garuda.jpg') }}" alt="Garuda Indonesia" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/tiket.jpg') }}" alt="tiket.com" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/tokopedia.jpg') }}" alt="Tokopedia" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/sctv.jpg') }}" alt="SCTV" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/gojek.jpg') }}" alt="Gojek" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/telkom.jpg') }}" alt="Telkom Indonesia" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/aqua.jpg') }}" alt="AQUA" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/djarum.jpg') }}" alt="Djarum" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/pertamina.jpg') }}" alt="Pertamina" class="p-3" style="height: 100px;">
                    <img src="{{ asset('images/rcti.jpg') }}" alt="RCTI" class="p-3" style="height: 100px;">
                </div> -->
        </div>
    </section>
    {{-- End Partners & Clients Section --}}


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

    {{-- End testimoni Section --}}

    
    @push('css')
        @vite(['resources/css/client/pages/home/styles.css'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    @endpush

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
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
            });
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