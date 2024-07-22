<?php

namespace App\Http\Controllers;

use App\Models\DataPemeriksaan;
use App\Models\DataPenilaianIbuHamil;
use App\Models\DataPenilaianFaktorRisiko;
use Illuminate\Http\Request;
use DB;

class DataPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data['getdatapenilaianibuhamilCount'] = DataPemeriksaan::count();
        $data['datapenilaianibuhamil'] = DataPenilaianIbuHamil::get();
        // dd($data['datapenilaianibuhamil']);
        return view('datapemeriksaan.index', $data)->with([
            'datapemeriksaan' => DataPemeriksaan::all(),
        ]);
        // return view('datapemeriksaan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datapemeriksaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'frekuensi' => 'required',
            'fileBuku' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Gambar maksimum 2MB
        ]);

        // Cek apakah ada file yang diunggah
        if ($request->hasFile('fileBuku')) {
            // Simpan file gambar ke dalam folder 'public/img'
            $file = $request->file('fileBuku');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $namaFile); // Simpan di public/img

            // Buat entri baru dalam database dengan nama file gambar
            DataPemeriksaan::create([
                'frekuensi' => $request->frekuensi,
                'fileBuku' => $namaFile,
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('datapemeriksaan.index')->with('success', 'Data berhasil ditambahkan.');
        } else {
            // Jika tidak ada file yang diunggah, kembalikan dengan pesan kesalahan
            return redirect()->back()->with('error', 'File buku ibu hamil tidak ditemukan.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $datapemeriksaan = DataPemeriksaan::findorFail($id);
        $data['id'] = $id;
        // dd($data['id']);
        return view('datapenilaian.create_penilaian_faktor_risiko', $data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datapemeriksaan = DataPemeriksaan::findOrFail($id);
        return view('datapemeriksaan.edit', compact('datapemeriksaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datapemeriksaan = DataPemeriksaan::findOrFail($id);
        $datapemeriksaan->update($request->all());

        return redirect()->route('datapemeriksaan.index')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datapemeriksaan = DataPemeriksaan::findOrFail($id);
        $datapemeriksaan->delete();

        return redirect()->route('datapemeriksaan.index')->with('success', 'Data Berhasil Di Hapus');
    }
    public function approve(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|exists:data_pemeriksaans,id',
        ]);

        try {
            $dataPemeriksaan = DataPemeriksaan::findOrFail($id);
            $dataPemeriksaan->approval_status = 1; // Set approval_status menjadi true (approve)
            $dataPemeriksaan->approval_note = $request->input('approval_note'); // Catatan approval
            $dataPemeriksaan->save();

            return redirect()->route('verificator.check')->with('success', 'Data berhasil di-approve.');
        } catch (\Exception $e) {
            return redirect()->route('verificator.check')->with('error', 'Gagal menyetujui data: ' . $e->getMessage());
        }
    }

    /**
     * Reject the specified resource.
     */
    public function reject(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|exists:data_pemeriksaans,id',
        ]);

        try {
            $dataPemeriksaan = DataPemeriksaan::findOrFail($id);
            $dataPemeriksaan->approval_status = 0; // Set approval_status menjadi false (reject)
            $dataPemeriksaan->approval_note = $request->input('approval_note'); // Catatan penolakan
            $dataPemeriksaan->save();

            return redirect()->route('verificator.check')->with('success', 'Data berhasil direject.');
        } catch (\Exception $e) {
            return redirect()->route('verificator.check')->with('error', 'Gagal menolak data: ' . $e->getMessage());
        }
    }

    public function ibuhamil()
    {
        $data['getDataIbuHamilCount'] = DataPenilaianFaktorRisiko::count();

        $datanya = DataPenilaianFaktorRisiko::join('dataibuhamil', 'datapenilaianfaktorrisiko.id_ibuhamil', '=', 'dataibuhamil.id')
            ->get();

        foreach ($datanya as $key => $value) {
            if ($value->risk_level == "Risiko tinggi") {
                $datanya[$key]->saran = "Lakukan pemeriksaan  ke fasilitas kesehatan puskesmas/Rumah Sakit dan atau konsultasi dengan dokter";
            } else if ($value->risk_level == "Risiko rendah") {
                $datanya[$key]->saran = "Lakukan pemeriksaan kehamilan secara rutin kepada bidan/dokter";
            } else {
                $datanya[$key]->saran = "Lakukan rujukan ke Rumah Sakit";
            }
        }

        $data['datas'] = $datanya;

        return view('ibuhamil.index', $data);
    }
}
