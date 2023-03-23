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
        Schema::create('rekap_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('kendaraan');
            $table->string('merk');
            $table->string('type');
            $table->string('driver');
            $table->string('pemesan');
            $table->date('tanggal');
            $table->text('kepentingan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_kendaraans');
    }
};
