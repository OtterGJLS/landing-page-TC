<x-client.layout>
    <x-slot name="title">Kontak</x-slot>

    <header id="hero">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <section class="col-lg-8 animate-on-scroll fade-in-left">
                    <h1 class="header-1 fw-bold mb-4">Hubungi Kami</h1>
                    <p class="body-1 text-muted mb-4">Siap mengembangkan SDM perusahaan Anda? Tim ahli kami siap membantu merancang program training yang sesuai dengan kebutuhan dan budget perusahaan.</p>
                </section>
            </div>
        </div>
    </header>

    <section id="kontak">
        <div class="container">
            <div class="row gy-5 gx-lg-5 justify-content-center">

                <div class="col-lg-7 col-md-7">
                    <h4 class="fw-bold">Request for Proposal (RFP)</h4>
                    <p class="text-muted">Isi form berikut untuk mendapatkan proposal training yang sesuai dengan kebutuhan perusahaan Anda.</p>
                    <div class="form-wrapper animate-on-scroll fade-in-up">
                        <form action="#" method="POST" class="mt-4">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama_perusahaan" class="form-label">Nama Perusahaan *</label>
                                    <input type="text" class="form-control" id="nama_perusahaan" placeholder="PT. Nama Perusahaan" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Anda" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="posisi" class="form-label">Posisi/Jabatan *</label>
                                    <input type="text" class="form-control" id="posisi" placeholder="HR Manager, Learning Development..." required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" placeholder="email@perusahaan.com" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="nomor_telepon" class="form-label">Nomor Telepon *</label>
                                    <input type="tel" class="form-control" id="nomor_telepon" placeholder="+62 812-3456-7890" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="kebutuhan_training" class="form-label">Kebutuhan Training *</label>
                                    <select class="form-select" id="kebutuhan_training" required>
                                        <option selected disabled value="">Pilih jenis training</option>
                                        <option value="leadership">Leadership & Management</option>
                                        <option value="sales">Sales & Marketing</option>
                                        <option value="it">IT & Digital Transformation</option>
                                        <option value="finance">Finance</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                                    <select class="form-select" id="jumlah_peserta">
                                        <option selected disabled value="">Pilih Jumlah Peserta</option>
                                        <option value="1-10">1 - 10 orang</option>
                                        <option value="11-25">11 - 25 orang</option>
                                        <option value="26-50">26 - 50 orang</option>
                                        <option value="50+">50+ orang</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="target_waktu" class="form-label">Target Waktu *</label>
                                    <select class="form-select" id="target_waktu" required>
                                        <option selected disabled value="">Kapan training dilaksanakan</option>
                                        <option value="q1">Q1 (Jan-Mar)</option>
                                        <option value="q2">Q2 (Apr-Jun)</option>
                                        <option value="q3">Q3 (Jul-Sep)</option>
                                        <option value="q4">Q4 (Okt-Des)</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="detail_kebutuhan" class="form-label">Detail Kebutuhan Training</label>
                                    <textarea class="form-control" id="detail_kebutuhan" rows="4" placeholder="Ceritakan lebih detail tentang kebutuhan training..."></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100 py-2">
                                        <i class="fas fa-paper-plane me-2"></i> Kirim Request Proposal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5">
                    <div class="info-wrapper animate-on-scroll fade-in-up delay-1">
                        <h5 class="fw-bold mb-3">Informasi Kontak</h5>
                        <div class="info-block">
                            <ul class="info-list">
                                <li><i class="fas fa-phone"></i><div><strong>Telepon</strong><p>+62 21-5555-0123</p></div></li>
                                <li><i class="far fa-envelope"></i><div><strong>Email</strong><p>info@trainingcorp.co.id</p></div></li>
                                <li><i class="far fa-clock"></i><div><strong>Jam Operasional</strong><p>Senin - Jumat: 08:00 - 17:00</p></div></li>
                            </ul>
                        </div>
                        
                        <div class="info-block mt-3 mb-3">
                            <h5 class="fw-bold mb-3">Lokasi Kantor</h5>
                            <ul class="info-list">
                                <li>
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <strong class="me-2">Jakarta</strong> <span class="badge bg-primary-light text-primary">Head Office</span>
                                        </div>
                                        <p>Menara Sudirman Lt. 15, Jl. Jend. Sudirman Kav. 60<br>+62 21-5555-0123</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <strong class="me-2">Surabaya</strong> <span class="badge bg-primary-light text-primary">Branch Office</span>
                                        </div>
                                        <p>Pakuwon Tower Lt. 20, Jl. Tunjungan 103-107<br>+62 31 8765-4321</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <strong class="me-2">Bandung</strong> <span class="badge bg-primary-light text-primary">Branch Office</span>
                                        </div>
                                        <p>Gedung Asia Afrika Lt. 12, Jl. Asia Afrika 133-137<br>+62 22 2468-1357</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="whatsapp-card text-center animate-on-scroll fade-in-up delay-1">
                            <i class="fab fa-whatsapp"></i>
                            <h6 class="fw-bold">Chat Via WhatsApp</h6>
                            <p class="small mb-3">Respon lebih cepat dan praktis</p>
                            <a href="#" class="btn btn-light-custom">Mulai chat WhatsApp</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="peta" class="g-0 text-center mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.902669469557!2d107.6186150153185!3d-6.902255995012471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e824773%3A0x26c3a7587d5e41a0!2sGedung%20Sate!5e0!3m2!1sen!2sid!4v1694602812345!5m2!1sen!2sid" width="70%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    @push('css')
        @vite(['resources/css/client/pages/kontak/styles.css'])
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