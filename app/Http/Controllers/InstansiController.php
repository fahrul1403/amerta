<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['getInstansiCount'] = Instansi::count();
        return view('instansi.index', $data)->with([
            'instansi' => Instansi::all(),
        ]);

      
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Instansi::create($request->all());
        return redirect()->route('instansi.index')->with('success', 'Data Berhasil di Tambahkan');
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
        $instansi = Instansi::findOrFail($id);
        return view('instansi.edit', compact('instansi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instansi = Instansi::findOrFail($id);
        $instansi->update($request->all());

        return redirect()->route('instansi.index')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instansi = Instansi::findOrFail($id);
        $instansi->delete();

        return redirect()->route('instansi.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
