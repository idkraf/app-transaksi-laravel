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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('nama_barang');
            $table->integer('jumlah_barang'); //number
            $table->float(column: 'harga_satuan'); //float currency example: Rp. 1000  then 1.000
            $table->float(column: 'harga_total'); //float currency example: Rp. 1000  then 1.000
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists(table: 'pembelian');
    }
};
