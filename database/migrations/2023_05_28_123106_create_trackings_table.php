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
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sopir')->references('id')->on('sopirs')->cascadeOnDelete();
            $table->foreignId('id_customer')->references('id')->on('users')->cascadeOnDelete();
            $table->string('kota');
            $table->string('jenis_paket');
            $table->string('total_paket');
            $table->string('status');
            $table->timestamp('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
