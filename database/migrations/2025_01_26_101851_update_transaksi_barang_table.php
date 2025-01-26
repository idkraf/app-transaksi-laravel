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
        //
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tanggal');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('nama_barang');
            $table->integer('jumlah_barang'); //number
            $table->integer(column: 'sisa_barang'); //number
            $table->float(column: 'harga'); //float currency example: Rp. 1000  then 1.000
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists(table: 'transaksi');
    }
};
