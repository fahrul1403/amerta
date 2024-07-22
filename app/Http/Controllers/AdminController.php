<?php

namespace App\Http\Controllers;

use App\Models\DataIbuHamil;
use App\Models\DataPemeriksaan;
use App\Models\DataPenilaian;
use App\Models\Instansi;
use App\Models\Klasifikasi;
use App\Models\SuratMasuk;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     // Tambahkan middleware di sini
    //     $this->middleware('admin');
    // }

    public function index()
    {
        $data['getDataPenilaianCount'] = DataPenilaian::count();
        $data['getDataPemeriksaanCount'] = DataPemeriksaan::count();
        $data['getDataibuhamilCount'] = DataIbuHamil::count();

        return view('dashboard.dashboard', $data);
    }
}
