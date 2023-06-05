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
        Schema::create('peringkats', function (Blueprint $table) {
            $table->id();
            $table->string('id_peringkat')->unique();
            $table->string('id_karyawan');
            $table->string('id_penilaian');
            $table->float('nilai');
            $table->integer('peringkat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peringkats');
    }
};
