<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenilaian extends Model
{
    use HasFactory;
    protected $table = 'datapenilaian';
    protected $guarded = ['id'];
}
