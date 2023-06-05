<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kriteria_keahlians', function (Blueprint $table) {
            $table->id();
            $table->string('id_kriteria_keahlian')->unique();
            $table->string('id_karyawan');
            $table->string('id_bobot_kriteria');
            $table->integer('poin_penilaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria_keahlians');
    }
};
