<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid px-3 px-lg-5">
        <a class="navbar-brand" href="#">Training Corp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{ route('client.home') }}">Beranda</a></li>
                
                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarProgramDropdown" role="button" data-bs-toggle="dropdown">
                        Program & Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('client.layanan') }}">Leadership Program</a></li>
                        <li><a class="dropdown-item" href="{{ route('client.pelatihan') }}">Metode Pelatihan</a></li>
                        <li><a class="dropdown-item" href="{{ route('client.sertifikat') }}">Sertifikasi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarTentangDropdown" role="button" data-bs-toggle="dropdown">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('client.tentang-kami') }}">Tentang Perusahaan</a></li>
                        <li><a class="dropdown-item" href="{{ route('client.klien') }}">Klien Kami</a></li>
                        <li><a class="dropdown-item" href="{{ route('client.home') . '#testimoni' }}">Testimoni</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-lg-3"><a class="nav-link" href="{{ route('client.insight') }}">Insight</a></li>
                <li class="nav-item ms-lg-3"><a class="nav-link" href="{{ route('client.kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>