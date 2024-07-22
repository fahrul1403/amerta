<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbuHamil extends Model
{
    use HasFactory;
    protected $table = 'dataibuhamil';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
