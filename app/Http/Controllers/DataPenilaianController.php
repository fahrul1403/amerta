<?php

namespace App\Http\Controllers;

use App\Models\DataIbuHamil;
use App\Models\DataPenilaian;
use App\Models\DataPenilaianFaktorRisiko;
use Illuminate\Http\Request;

class DataPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data['getDataPenilaianCount'] = DataPenilaian::count();
        return view('datapenilaian.index', $data)->with([
            'datapenilaian' => DataPenilaian::all(),
        ]);
        // return view('datapenilaian.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listUser()
    {
        $data['getDataIbuHamilCount'] = DataIbuHamil::count();
        $data['datas'] = DataPenilaianFaktorRisiko::join('dataibuhamil', 'datapenilaianfaktorrisiko.id_ibuhamil', '=', 'dataibuhamil.id')->get();

        return view('datapenilaian.listUser', $data);
    }

    public function create()
    {
        return view('datapenilaian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataPenilaian::create($request->all());
        return redirect()->route('datapenilaian.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datapenilaian = DataPenilaian::findorFail($id);
        return view('datapenilaian.show', compact('datapenilaian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datapenilaian = DataPenilaian::findOrFail($id);
        return view('datapenilaian.edit', compact('datapenilaian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datapenilaian = DataPenilaian::findOrFail($id);
        $datapenilaian->update($request->all());

        return redirect()->route('datapenilaian.index')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datapenilaian = DataPenilaian::findOrFail($id);
        $datapenilaian->delete();

        return redirect()->route('datapenilaian.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
