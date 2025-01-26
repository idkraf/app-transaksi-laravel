<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    public function create()
    {
        return view('penjualan.create');
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

        Penjualan::create($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Penjualan created successfully.');
    }

    public function edit(Penjualan $penjualan)
    {
        return view('penjualan.edit', compact('penjualan'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'harga_total' => 'required|numeric',
        ]);

        $penjualan->update($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Penjualan updated successfully.');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success', 'Penjualan deleted successfully.');
    }
}
