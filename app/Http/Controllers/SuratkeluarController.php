<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['getSuratkeluarCount'] = SuratKeluar::count();
        return view('suratkeluar.index', $data)->with([
            'suratkeluar' => Suratkeluar::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suratkeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Suratkeluar::create($request->all());
        return redirect()->route('suratkeluar.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suratkeluar = suratkeluar::findorFail($id);
        return view('suratkeluar.show', compact('suratkeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suratkeluar = suratkeluar::findOrFail($id);
        return view('suratkeluar.edit', compact('suratkeluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $suratkeluar = suratkeluar::findOrFail($id);
        $suratkeluar->update($request->all());

        return redirect()->route('suratkeluar.index')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suratkeluar = suratkeluar::findOrFail($id);
        $suratkeluar->delete();

        return redirect()->route('suratkeluar.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
