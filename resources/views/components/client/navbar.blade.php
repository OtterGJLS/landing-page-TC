<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid px-3 px-lg-5">
        <!-- <a href="#"><img src="{{ asset('images/VectorLaptop.png') }}" class="img-fluid logo" alt="Logo"></a> -->
        <a class="navbar-brand" href="#">Training Corp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{ request()->is('/') ? '#' : route('client.home') . '#' }}">Beranda</a></li>
                <li class="nav-item ms-lg-3"><a class="nav-link" href="{{ request()->is('/') ? '#program' : route('client.home') . '#program' }}">Program</a></li>
                <li class="nav-item ms-lg-3"><a class="nav-link" href="{{ route('client.klien') }}">Klien</a></li>
                <li class="nav-item ms-lg-3"><a class="nav-link" href="{{ request()->is('/') ? '#testimoni' : route('client.home') . '#testimoni' }}">Testimoni</a></li>
                <li class="nav-item ms-lg-3 disabled"><a class="nav-link" href="{{ route('client.tentang-kami') }}">Tentang Kami</a></li>
            </ul>
        </div>
    </div>
</nav>