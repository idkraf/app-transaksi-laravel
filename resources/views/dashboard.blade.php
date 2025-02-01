{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <p>This is the welcome page. You can access various sections such as Penjualan, Pembelian, Supplier, Transaksi, and Laba Rugi from the sidebar.</p>

        
        <h2 class="mb-4"> Laporan Laba Rugi</h2>
        
        <form method="GET" action="{{ route('laporan.show') }}">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Dari Tanggal</label>
                <div class="col-sm-3">
                    <input type="date" name="from_date" class="form-control" value="{{ request('from_date') }}">
                </div>
                <label class="col-sm-2 col-form-label">Sampai Tanggal</label>
                <div class="col-sm-3">
                    <input type="date" name="to_date" class="form-control" value="{{ request('to_date') }}">
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </div>
            </div>
        </form>
    
        <div class="card mt-4">
            <div class="card-body">
                <h4>Total Penjualan: <strong>Rp {{ number_format($total_penjualan, 0, ',', '.') }}</strong></h4>
                <h4>Total Pembelian: <strong>Rp {{ number_format($total_pembelian, 0, ',', '.') }}</strong></h4>
                <h4>Laba Bersih: <strong>Rp {{ number_format($laba_bersih, 0, ',', '.') }}</strong></h4>
            </div>
        </div>
    </div>
@endsection
