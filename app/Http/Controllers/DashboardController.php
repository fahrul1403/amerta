<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use App\Models\Klasifikasi;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $data['getKlasifikasiCount'] = Klasifikasi::count();
    $data['getInstansiCount'] = Instansi::count();
    $data['getSuratmasukCount'] = SuratMasuk::count();
    
    return view('dashboard.dashboard', $data);
   
  }

}
