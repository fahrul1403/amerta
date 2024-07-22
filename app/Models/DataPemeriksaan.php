<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'data_pemeriksaans';
    protected $guarded = ['id'];
    protected $fillable = [
        'nik',
        'frekuensi',
        'usiaHamil',
        'tempat',
        'bb',
        'tb',
        'lila',
        'darah',
        'tfu',
        'periksa',
        'status',
        'konseling',
        'ttd',
        'ppia',
        'tlk',
        'fileBuku',
        'approval_status',
        'approval_note'
        
    ];
}

