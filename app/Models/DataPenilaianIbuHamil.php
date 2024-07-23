<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenilaianIbuHamil extends Model
{
    use HasFactory;

    protected $table = 'datapenilaianibuhamil';

    protected $fillable = [
        'nama',
        'nik',
        'hpht',
        'tanggal_periksa',
        'usia_kehamilan',
        'tempat_periksa',
        'berat_badan',
        'tinggi_badan',
        'lila',
        'tekanan_darah',
        'gerak_anak',
    ];
}
