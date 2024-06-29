<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'suhu_rata',
        'kelembaban_rata',
        'intensitas_cahaya',
        'kelembaban_tanah',
        'kipas1',
        'kipas2',
        'kipas3',
        'misting',
        'roller_motor',
        'cooling_pad',
    ];
}
