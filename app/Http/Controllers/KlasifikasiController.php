<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use Illuminate\Http\Request;

class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $data['getKlasifikasiCount'] = Klasifikasi::count();
        return  view('klasifikasi.index', $data)->with([
            'klasifikasi' => Klasifikasi::all(),
        ]);
        // $hasil = Klasifikasi::all(); return view('Klasifikasi', compact('hasil'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('klasifikasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Klasifikasi::create($request->all());
        return redirect()->route('klasifikasi.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $klasifikasi = Klasifikasi::findOrFail($id);
        return view('klasifikasi.edit', compact('klasifikasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $klasifikasi = Klasifikasi::findOrFail($id);
        $klasifikasi->update($request->all());
        return redirect()->route('klasifikasi.index')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $klasifikasi = Klasifikasi::findOrFail($id);
        $klasifikasi->delete();
        return redirect()->route('klasifikasi.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
