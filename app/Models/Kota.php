<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kota extends Model
{
    protected $connection = 'mysql';
    protected $table = 'kota';
    public $timestamps = false;

    protected $fillable = [
        "id_provinsi",
        "kota",
    ];
}
