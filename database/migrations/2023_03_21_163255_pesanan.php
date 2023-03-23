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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('pemesan_id');
            $table->unsignedBigInteger('kendaraan_id');
            $table->date('tanggal');
            $table->string('pembuat');
            $table->string('petugas_approve')->nullable();
            $table->string('akomodasi_approve')->nullable();
            $table->timestamps();
            
            $table->foreign('driver_id')->references('id')->on('driver')->onDelete('cascade');
            $table->foreign('pemesan_id')->references('id')->on('pemesan')->onDelete('cascade');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
