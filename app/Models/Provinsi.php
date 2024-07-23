<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provinsi extends Model
{
    protected $connection = 'mysql';
    protected $table = 'provinsi';
    public $timestamps = false;

    protected $fillable = [
        "provinsi",
    ];
}
