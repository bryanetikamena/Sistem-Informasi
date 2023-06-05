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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->string('id_penilaian')->unique();
            $table->string('id_karyawan');
            $table->string('id_kriteria_tanggung_jawab');
            $table->string('id_kriteria_disiplin');
            $table->string('id_kriteria_loyalitas');
            $table->string('id_kriteria_keahlian');
            $table->string('id_kriteria_kerja_sama');
            $table->string('id_kriteria_pengetahuan');
            $table->float('normalisasi_tanggung_jawab');
            $table->float('normalisasi_disiplin');
            $table->float('normalisasi_loyalitas');
            $table->float('normalisasi_keahlian');
            $table->float('normalisasi_kerja_sama');
            $table->float('normalisasi_pengetahuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
