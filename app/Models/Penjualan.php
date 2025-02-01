<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'penjualan';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'tanggal',
        'nama_barang',
        'jumlah_barang',
        'harga_satuan',
        'harga_total',
    ];
}
