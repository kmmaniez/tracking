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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('plat');
            $table->foreignId('id_supir')->references('id')->on('sopirs')->cascadeOnDelete();
            $table->string('idpaket');
            // $table->foreignId('id_cp')->references('id_cp')->on('checkpoints');
            $table->string('id_cp');
            $table->string('tujuan');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
