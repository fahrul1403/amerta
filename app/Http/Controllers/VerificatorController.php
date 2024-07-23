<?php

namespace App\Http\Controllers;

use App\Models\DataPemeriksaan;
use App\Models\DataPenilaianFaktorRisiko;
use Illuminate\Http\Request;

class VerificatorController extends Controller
{
    public function index()
    {
        return view('verificator.index');
    }

    public function check()
    {
        $data['verif'] = DataPenilaianFaktorRisiko::join('dataibuhamil', 'datapenilaianfaktorrisiko.id_ibuhamil', '=', 'dataibuhamil.id')->get();
        $data['count'] = DataPenilaianFaktorRisiko::join('dataibuhamil', 'datapenilaianfaktorrisiko.id_ibuhamil', '=', 'dataibuhamil.id')->count();

        return view('verificator.check', $data);
    }
    public function approve(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|exists:data_pemeriksaans,id',
        ]);

        $hasil = DataPemeriksaan::findOrFail($id);
        $hasil->approval = 1; // Set approval ke 1 (approve)
        $hasil->save();

        return redirect()->route('verificator.check')->with('success', 'Data has been approved successfully.');
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|exists:data_pemeriksaans,id',
        ]);

        $hasil = DataPemeriksaan::findOrFail($id);
        $hasil->approval = 0; // Set approval ke 0 (reject)
        $hasil->save();

        return redirect()->route('verificator.check')->with('success', 'Data has been rejected successfully.');
    }

}
