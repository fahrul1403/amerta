<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Pemantauan;
use App\Models\Penatalaksana;
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

        $data['kota'] = Kota::where('id_provinsi', 14)->get();

        return view('verificator.check', $data);
    }
    public function show($id){
        $data['detail'] = DataPenilaianFaktorRisiko::join('dataibuhamil', 'datapenilaianfaktorrisiko.id_ibuhamil', '=', 'dataibuhamil.id')
        ->where('datapenilaianfaktorrisiko.id_ibuhamil', $id)->first();
        $data['id'] = $id;
        return view('verificator.show', $data);
    }
    public function detail($id){
        $data['detail'] = DataPenilaianFaktorRisiko::join('dataibuhamil', 'datapenilaianfaktorrisiko.id_ibuhamil', '=', 'dataibuhamil.id')
        ->where('datapenilaianfaktorrisiko.id_ibuhamil', $id)->first();

        $data['penatalaksana'] = Penatalaksana::where('fk_id', $id)->get();
        $data['pemantauan'] = Pemantauan::where('fk_id', $id)->get();

        $data['id'] = $id;
        return view('verificator.detail', $data);
    }
    public function approval(Request $request){
        $keterangan = "";
        $status = "";
        if($request->flag == 1){
            $status = "APPROVE";
        }else{
            $status = "REJECT";
        }

        $dataUpdate = [
            'status' => $status
        ];

        if(isset($request->reason)){
            $keterangan = $request->reason;
            $dataUpdate['keterangan'] = $keterangan;
        }

        $update = DataPenilaianFaktorRisiko::where('id_ibuhamil', $request->id)->update($dataUpdate);
        return response()->json(['status' => true,'message' => 'success updated data.', 'data' => []], 200);
    }
    public function pemantauan(Request $request){
        $insert = Pemantauan::create($request->all());
        return response()->json(['status' => true,'message' => 'success updated data.', 'data' => []], 200);
    }
    public function penatalaksana(Request $request, $id){
        $insert = Penatalaksana::create(['fk_id' => $id,'tanggal' => $request->tanggal,'arahan' => $request->arahan]);
        return response()->json(['status' => true,'message' => 'success add new data.', 'data' => []], 200);
    }
    public function history($id){
        $data = Penatalaksana::where('fk_id', $id)->get();
        return response()->json(['status' => true,'message' => '', 'data' => $data], 200);
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
