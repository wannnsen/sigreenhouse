<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condition;

class ConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
            'suhu_rata' => 25.5,
            'kelembaban_rata' => 60.2,
            'intensitas_cahaya' => 8000,
            'kelembaban_tanah' => 45.7,
            'kipas1' => true,
            'kipas2' => false,
            'kipas3' => true,
            'misting' => false,
            'roller_motor' => true,
            'cooling_deck' => false,
            'lampu' => true,
        ]);
    }
}
