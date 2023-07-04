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
        Schema::create('checkpointthree', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_cp_3');
            $table->string('kondisi_cp_3');
            $table->string('status_cp_3');
            $table->string('kota_cp_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkpointthree');
    }
};
