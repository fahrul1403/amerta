<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instansi;
use App\Models\Klasifikasi;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\DataIbuHamil;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function __construct()
    // {
    //     // Tambahkan middleware di sini
    //     $this->middleware('user');
    // }
    public function index()
    {
        return view ('formpenilaian.index');
    }

    public function user()
    {
        // $data['getKlasifikasiCount'] = Klasifikasi::count();
        // $data['getInstansiCount'] = Instansi::count();
        // $data['getSuratmasukCount'] = SuratMasuk::count();
        $data['getDataIbuHamilCount'] = DataIbuHamil::count();
        

        return view('dashboard.user', $data);
    }
    
    public function sm()
    {
        $data['getSuratkeluarCount'] = SuratKeluar::count();
        return view('sk.index', $data)->with([
            'suratkeluar' => SuratKeluar::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function sh(string $id)
    {

        $dataibuhamil = DataIbuHamil::findorFail($id);
        return view('sm.show', compact('dataibuhamil'));
    }
    public function op(string $id)
    {

        $suratkeluar = SuratKeluar::findorFail($id);
        return view('sk.show', compact('suratkeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
