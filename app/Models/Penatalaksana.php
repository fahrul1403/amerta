<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penatalaksana extends Model
{
    protected $connection = 'mysql';
    protected $table = 'penatalaksana';
    public $timestamps = false;

    protected $fillable = [
        "fk_id",
        "tanggal",
        'arahan'
    ];
}
