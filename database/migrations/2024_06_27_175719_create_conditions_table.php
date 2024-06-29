<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->float('suhu_rata');
            $table->float('kelembaban_rata');
            $table->float('intensitas_cahaya');
            $table->float('kelembaban_tanah');
            $table->boolean('kipas1');
            $table->boolean('kipas2');
            $table->boolean('kipas3');
            $table->boolean('misting');
            $table->boolean('roller_motor');
            $table->boolean('cooling_deck');
            $table->boolean('lampu');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('conditions');
    }
};
