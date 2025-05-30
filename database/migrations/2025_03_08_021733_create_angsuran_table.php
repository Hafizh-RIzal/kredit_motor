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
        Schema::create('angsuran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kredit');
            $table->date('tgl_bayar');
            $table->integer('angsuran_ke');
            $table->double('total_bayar');
            $table->string('bukti_pembayaran', 255)->nullable();
            $table->enum('status_pembayaran', ['Menunggu', 'Diterima', 'Ditolak'])->default('Menunggu');
            $table->string('keterangan', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_kredit')->references('id')->on('kredit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angsuran');
    }
};
