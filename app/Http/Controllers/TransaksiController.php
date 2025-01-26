<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Transaksi;
use App\Models\Pembelian;
use App\Models\Penjualan;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        return view('transaksi.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'sisa_barang' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Transaksi::create($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi created successfully.');
    }

    public function edit(Transaksi $transaksi)
    {
        $suppliers = Supplier::all();
        return view('transaksi.edit', compact('transaksi', 'suppliers'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'sisa_barang' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $transaksi->update($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi updated successfully.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi deleted successfully.');
    }
}
