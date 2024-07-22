<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenilaianIbuHamil extends Model
{
    use HasFactory;

    protected $table = 'datapenilaianibuhamil';

    protected $fillable = [
        'data_ibu_hamil_id',
        'nama',
        'nik',
        'hpht',
        'usia_kehamilan',
        'tempat_periksa',
        'berat_badan',
        'tinggi_badan',
        'lila',
        'tekanan_darah',
        'status_imunisasi',
        'konseling',
        'ttd',
        'ppia_hiv',
        'ppia_sifilis',
        'ppia_hepatitis_b',
        'tata_laksana_kasus',
    ];
}