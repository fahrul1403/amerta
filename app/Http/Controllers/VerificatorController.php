<?php

namespace App\Http\Controllers;

use App\Models\DataPemeriksaan;
use Illuminate\Http\Request;

class VerificatorController extends Controller
{
    public function index()
    {
        return view('verificator.index');
    }

    public function check()
    {
        $datapemeriksaan = DataPemeriksaan::all();
        $getDataPemeriksaanCount = $datapemeriksaan->count();

        return view('verificator.check', compact('datapemeriksaan', 'getDataPemeriksaanCount'));
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
