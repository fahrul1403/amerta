<?php

namespace App\Http\Controllers;

use App\Models\DataIbuHamil;
use App\Models\DataPenilaianIbuHamil;
use App\Models\User;
use Illuminate\Http\Request;

class DataIbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataibuhamil['getDataIbuHamilCount'] = DataIbuHamil::count();
        return view('dataibuhamil.index', $dataibuhamil)->with([
            'dataibuhamil' => DataIbuHamil::all(),
        ]);
        // return view('dataibuhamil.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataibuhamil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan data ibu hamil
        $dataIbuHamil = DataIbuHamil::create($request->all());

        // Buat akun pengguna dengan email yang disesuaikan dan password adalah nama ibu hamil itu sendiri
        $user = User::create([
            'name' => $request->nama,
            'email' => strtolower(str_replace(' ', '', $request->nama)) . '@gmail.com',
            'password' => $request->nama,
            'level' => 'user', // Atur level sesuai kebutuhan Anda
        ]);

        // Jika kedua operasi berhasil, kembalikan respons berhasil
        if ($dataIbuHamil && $user) {
            return redirect()->route('dataibuhamil.index')->with('success', 'Data Berhasil di Tambahkan');
        } else {
            // Jika salah satu operasi gagal, kembalikan respons gagal
            return redirect()->route('dataibuhamil.index')->with('error', 'Gagal menambahkan data');
        }
    }

    /**
     * Store a newly created penilaian in storage.
     */
    public function storePenilaian(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'hpht' => 'required|date',
            'usia_kehamilan' => 'required|integer',
            'tempat_periksa' => 'required|string',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'lila' => 'required|numeric',
            'tekanan_darah' => 'required|string',
            'tfu' => 'required|numeric',
            'letak' => 'required|string',
            'djj' => 'required|integer',
            'status_imunisasi' => 'required|string',
            'konseling' => 'required|string',
            'ttd' => 'required|string',
            'ppia_hiv' => 'required|string',
            'ppia_sifilis' => 'required|string',
            'ppia_hepatitis_b' => 'required|string',
            'tata_laksana_kasus' => 'required|string',
            'nama' => 'required|string',
            'nik' => 'required|string',
        ]);

        // Store the data in the datapenilaianibuhamil table
        $penilaian = new DataPenilaianIbuHamil($validatedData);
        $penilaian->data_ibu_hamil_id = $id;
        $penilaian->save();

        return redirect()->route('dataibuhamil.index')->with('success', 'Penilaian berhasil disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataibuhamil = DataIbuHamil::findOrFail($id);
        return view('dataibuhamil.show', compact('dataibuhamil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataibuhamil = DataIbuHamil::findOrFail($id);
        return view('dataibuhamil.edit', compact('dataibuhamil'));
    }

    public function inputdatasuami(string $id)
    {
        $dataibuhamil = DataIbuHamil::findOrFail($id);
        return view('dataibuhamil.inputdatasuami', compact('dataibuhamil'));
    }

    public function inputdatapenilaianibuhamil(string $id)
    {
        $dataibuhamil = DataIbuHamil::findOrFail($id);
        return view('dataibuhamil.inputdatapenilaianibuhamil', compact('dataibuhamil'));
    }

    /**
     * Show the form for creating a new penilaian.
     */
    public function createPenilaian($id)
    {
        $data['ibuHamil'] = DataIbuHamil::findOrFail($id);
        return view('dataibuhamil.create_datapenilaianibuhamil', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataibuhamil = DataIbuHamil::findOrFail($id);
        $dataibuhamil->update($request->all());

        return redirect()->route('dataibuhamil.index')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataibuhamil = DataIbuHamil::findOrFail($id);
        $dataibuhamil->delete();

        return redirect()->route('dataibuhamil.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
