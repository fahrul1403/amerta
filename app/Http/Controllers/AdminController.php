<?php

namespace App\Http\Controllers;

use App\Models\DataIbuHamil;
use App\Models\DataPemeriksaan;
use App\Models\DataPenilaian;
use App\Models\Kota;
use DB;

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

        $data['kabupaten'] = Kota::where('id_provinsi', 14)->pluck('kota');
        $kabupaten = Kota::where('id_provinsi', 14)->get();
        $data_total = [];

        $year = date('Y');

        foreach ($kabupaten as $key => $value) {
            $counts = DB::table('pemantauan')
            ->select('id_kota', DB::raw('count(*) as total'))
            ->where('status', 'MENINGGAL')
            ->where('id_kota', $value->id_kota)
            ->whereYear('created_at', $year)
            ->groupBy('id_kota')
            ->get();


            if(count($counts) < 1){
                array_push($data_total, 0);
            }else{
                array_push($data_total, (int)$counts[0]->total);
            }
        }

        $data['data_total'] = $data_total;
        return view('dashboard.dashboard', $data);
    }
}
