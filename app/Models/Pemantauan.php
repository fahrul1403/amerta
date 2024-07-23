<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemantauan extends Model
{
    protected $connection = 'mysql';
    protected $table = 'pemantauan';
    public $timestamps = false;

    protected $fillable = [
        "fk_id",
        "lokasi",
        "id_kota",
        "status",
    ];
}
