<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Transaksi;
use App\Models\Pembelian;
use App\Models\Penjualan;


class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::all();
        return view('pembelian.index', compact('pembelian'));
    }

    public function create()
    {
        return view('pembelian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'harga_total' => 'required|numeric',
        ]);

        Pembelian::create($request->all());
        return redirect()->route('pembelian.index')->with('success', 'Pembelian created successfully.');
    }

    public function edit(Pembelian $pembelian)
    {
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, Pembelian $pembelian)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'harga_total' => 'required|numeric',
        ]);

        $pembelian->update($request->all());
        return redirect()->route('pembelian.index')->with('success', 'Pembelian updated successfully.');
    }

    public function destroy(Pembelian $pembelian)
    {
        $pembelian->delete();
        return redirect()->route('pembelian.index')->with('success', 'Pembelian deleted successfully.');
    }
}