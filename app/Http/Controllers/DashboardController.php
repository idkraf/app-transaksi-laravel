<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pembelian;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        $totalPenjualan = Penjualan::whereBetween('created_at', [$fromDate, $toDate])->sum('harga_total');
        $totalPembelian = Pembelian::whereBetween('created_at', [$fromDate, $toDate])->sum('harga_total');
        $labaBersih = $totalPenjualan - $totalPembelian;

        return view('dashboard', [
            'total_penjualan' => $totalPenjualan,
            'total_pembelian' => $totalPembelian,
            'laba_bersih' => $labaBersih,
        ]);
    }

    // Add the show method for laporan.show
    public function show(Request $request)
    {
        // Retrieve the 'from_date' and 'to_date' from the query string
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        // Ensure both dates are provided, or you can handle the default dates if necessary
        if (!$fromDate || !$toDate) {
            // You could default to the current date or any range you prefer
            $fromDate = now()->startOfMonth()->toDateString();
            $toDate = now()->toDateString();
        }

        // Calculate total sales (Penjualan) and total purchases (Pembelian) in the given date range
        $totalPenjualan = Penjualan::whereBetween('created_at', [$fromDate, $toDate])->sum('harga_total');
        $totalPembelian = Pembelian::whereBetween('created_at', [$fromDate, $toDate])->sum('harga_total');
        
        // Calculate net profit (Laba Bersih)
        $labaBersih = $totalPenjualan - $totalPembelian;

        // Pass the calculated values to the view
        return view('dashboard', [
            'total_penjualan' => $totalPenjualan,
            'total_pembelian' => $totalPembelian,
            'laba_bersih' => $labaBersih,
        ]);
    }
}
