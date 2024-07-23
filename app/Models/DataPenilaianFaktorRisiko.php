<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenilaianFaktorRisiko extends Model
{
    use HasFactory;

    protected $table = 'datapenilaianfaktorrisiko';

    protected $fillable = [
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
        'risk_level',
        'status',
        'keterangan'
    ];
}
