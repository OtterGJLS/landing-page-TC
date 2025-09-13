<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('client.home.index');
    }

    public function klien(): View
    {
        return view('client.klien.index');
    }

    public function tentangKami(): View
    {
        return view('client.tentang-kami.index');
    }

    public function pelatihan(): View
    {
        return view('client.pelatihan.index');
    }
    
    public function sertifikat(): View
    {
        return view('client.sertifikat.index');
    }

    public function layanan(): View
    {
        return view('client.layanan.index');
    }
}