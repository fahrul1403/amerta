<?php
namespace App\Http\Controllers;

use App\Models\DataPenilaianIbuHamil;
use App\Models\DataPemeriksaan;
use Illuminate\Http\Request;
use DB;

class DataPenilaianIbuHamilController extends Controller
{
    public function create()
    {
        return view('dataibuhamil.create_datapenilaianibuhamil', compact('id'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hpht' => 'required|date',
            'usia_kehamilan' => 'required|integer',
            'tempat_periksa' => 'required|string|max:255',
            'berat_badan' => 'required|integer',
            'tinggi_badan' => 'required|integer',
            'lila' => 'required|integer',
            'tekanan_darah' => 'required|string|max:255',
            'tfu' => 'required|integer',
            'periksa_letak' => 'required|string|max:255',
            'djj' => 'required|integer',
            'status_imunisasi' => 'required|string|max:255',
            'konseling' => 'required|string|max:255',
            'ttd' => 'required|in:Ya,Tidak',
            'ppia_hiv' => 'required|in:+,-',
            'ppia_sifilis' => 'required|in:+,-',
            'ppia_hepatitis_b' => 'required|in:+,-',
            'tata_laksana_kasus' => 'required|string|max:255',
        ]);

        DataPenilaianIbuHamil::create($validatedData);

        return redirect()->route('dataibuhamil.index')->with('success', 'Data successfully added.');
    }
    public function index()
    {
        // Fetch all records from the DataPenilaianIbuHamil table
        $datapenilaianibuhamil = DataPenilaianIbuHamil::all();

        // Count of records
        $getdatapenilaianibuhamilCount = $datapenilaianibuhamil->count();

        // Fetch all records from the DataPemeriksaan table
        $datapemeriksaan = DataPemeriksaan::all();

        // Pass the data to the view
        return view('datapemeriksaan.index', compact('datapenilaianibuhamil', 'getdatapenilaianibuhamilCount', 'datapemeriksaan'));
    }

    public function show($id)
    {
        $data['dataibuhamil'] = DB::table('datapenilaianibuhamil')->where('data_ibu_hamil_id', $id)->first();
        return view('datapemeriksaan.view', $data);
    }

    public function detail_faktor_resiko($id){
        $data['dataibuhamil'] = DB::table('datapenilaianfaktorrisiko')->where('id_ibuhamil', $id)->first();
        return view('datapenilaian.faktor_resiko_detail', $data);
    }


}
