<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'tanggal',
        'alamat',
        'no_hp',
        'nama_barang',
        'jumlah_barang',
        'sisa_barang',
        'harga',
    ];
}
