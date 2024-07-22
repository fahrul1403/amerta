<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPenilaianFaktorRisiko;

class PenilaianFaktorRisikoController extends Controller
{
    public function create()
    {
        return view('penilaian.create_penilaian_faktor_risiko');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'terlalu_muda' => 'required|in:Ya,Tidak',
        //     'terlalu_tua' => 'required|in:Ya,Tidak',
        //     'terlalu_lama' => 'required|in:Ya,Tidak',
        //     'terlalu_cepat' => 'required|in:Ya,Tidak',
        //     'terlalu_banyak_anak' => 'required|in:Ya,Tidak',
        //     'terlalu_pendek' => 'required|in:Ya,Tidak',
        //     'gagal_kehamilan' => 'required|in:Ya,Tidak',
        //     'melahirkan_vakum' => 'required|in:Ya,Tidak',
        //     'uri_dirogoh' => 'required|in:Ya,Tidak',
        //     'infus_transfusi' => 'required|in:Ya,Tidak',
        //     'penyakit_kurang_darah' => 'required|in:Ya,Tidak',
        //     'penyakit_malaria' => 'required|in:Ya,Tidak',
        //     'penyakit_tbc_paru' => 'required|in:Ya,Tidak',
        //     'penyakit_payah_jantung' => 'required|in:Ya,Tidak',
        //     'penyakit_kencing_manis' => 'required|in:Ya,Tidak',
        //     'penyakit_menular_seksual' => 'required|in:Ya,Tidak',
        //     'bengkak_darah_tinggi' => 'required|in:Ya,Tidak',
        //     'hamil_kembar' => 'required|in:Ya,Tidak',
        //     'hamil_kembar_air' => 'required|in:Ya,Tidak',
        //     'bayi_mati_kandungan' => 'required|in:Ya,Tidak',
        //     'kehamilan_lebih_bulan' => 'required|in:Ya,Tidak',
        //     'letak_sungsang' => 'required|in:Ya,Tidak',
        //     'letak_lintang' => 'required|in:Ya,Tidak',
        //     'perdarahan_kehamilan' => 'required|in:Ya,Tidak',
        //     'pre_eklampsia' => 'required|in:Ya,Tidak',
        // ]);

        $skor_awal = 2;
        $skor = $skor_awal;

        $factors = [
            'terlalu_muda',
            'terlalu_tua',
            'terlalu_lama',
            'terlalu_cepat',
            'terlalu_banyak_anak',
            'terlalu_pendek',
            'gagal_kehamilan',
            'melahirkan_vakum',
            'uri_dirogoh',
            'infus_transfusi',
            'penyakit_kurang_darah',
            'penyakit_malaria',
            'penyakit_tbc_paru',
            'penyakit_payah_jantung',
            'penyakit_kencing_manis',
            'penyakit_menular_seksual',
            'bengkak_darah_tinggi',
            'hamil_kembar',
            'hamil_kembar_air',
            'bayi_mati_kandungan',
            'kehamilan_lebih_bulan',
            'letak_sungsang',
            'letak_lintang',
            'perdarahan_kehamilan',
            'pre_eklampsia',
        ];

        $scores = [
            'terlalu_muda' => $request->terlalu_muda,
            'terlalu_tua' => $request->terlalu_tua,
            'terlalu_lama' => $request->terlalau_lama,
            'terlalu_cepat' => $request->terlalu_cepat,
            'terlalu_banyak_anak' => $request->terlalu_banyak_anak,
            'terlalu_pendek' => $request->terlalu_pendek,
            'gagal_kehamilan' => $request->gagal_kehamilan,
            'melahirkan_vakum' => $request->melahirkan_vakum,
            'uri_dirogoh' => $request->uri_dirogoh,
            'infus_transfusi' => $request->infus_transfusi,
            'penyakit_kurang_darah' => $request->penyakit_kurang_darah,
            'penyakit_malaria' => $request->penyakit_malaria,
            'penyakit_tbc_paru' => $request->penyakit_tbc_paru,
            'penyakit_payah_jantung' => $request->penyakit_payah_jantung,
            'penyakit_kencing_manis' => $request->penyakit_kencing_manis,
            'penyakit_menular_seksual' => $request->penyakit_menular_seksual,
            'bengkak_darah_tinggi' => $request->bengkak_darah_tinggi,
            'hamil_kembar' => $request->hamil_kembar,
            'hamil_kembar_air' => $request->hamil_kembar_air,
            'bayi_mati_kandungan' => $request->bayi_mati_kandungan,
            'kehamilan_lebih_bulan' => $request->kehamilan_lebih_bulan,
            'letak_sungsang' => $request->letak_sungsang,
            'letak_lintang' => $request->letak_lintang,
            'perdarahan_kehamilan' => $request->perdarahan_kehamilan,
            'pre_eklampsia' => $request->pre_eklampsia,
            'eklampsia' => $request->eklampsia,
            'operasi_sesar' => $request->operasi_sesar,
            'riwayat_perdarahan_pasca_melahirkan' => $request->riwayat_perdarahan_pasca_melahirkan,
            'ketuban_pecah_dini' => $request->ketuban_pecah_dini,
            'infeksi_nifas' => $request->infeksi_nifas,
            'bayi_berat_lahir_rendah' => $request->bayi_berat_lahir_rendah,
            'bayi_prematur' => $request->bayi_prematur,
            'bayi_sesak_napas' => $request->bayi_sesak_napas,
            'riwayat_penyakit_lainnya' => $request->riwayat_penyakit_lainnya
        ];

        foreach ($factors as $factor) {
            $skor += $scores[$factor];
            // if ($validatedData[$factor] == 'Ya') {
            // }
        }

        $risk_level = '';
        if ($skor == 2) {
            $risk_level = 'Risiko rendah';
        } elseif ($skor >= 6 && $skor <= 10) {
            $risk_level = 'Risiko tinggi';
        } elseif ($skor >= 12) {
            $risk_level = 'Risiko sangat tinggi';
        }

        $request->merge(['risk_level' => $risk_level]);
        // dd($request->all());
        // Save the data into the database
        // Assume you have a model and table setup for this
        DataPenilaianFaktorRisiko::create($request->all());

        return redirect()->route('datapemeriksaan.index')->with('success', 'Data successfully added. Risk level: ' . $risk_level);
    }
}
