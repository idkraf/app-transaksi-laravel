{{-- resources/views/pembelian/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pembelian</h1>

    <form action="{{ route('pembelian.update', $pembelian->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $pembelian->tanggal) }}" required>
            @error('tanggal')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ old('nama_barang', $pembelian->nama_barang) }}" required>
            @error('nama_barang')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jumlah_barang">Jumlah Barang</label>
            <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control" value="{{ old('jumlah_barang', $pembelian->jumlah_barang) }}" required>
            @error('jumlah_barang')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="harga_satuan">Harga Satuan</label>
            <input type="number" name="harga_satuan" id="harga_satuan" class="form-control" value="{{ old('harga_satuan', $pembelian->harga_satuan) }}" step="0.01" required>
            @error('harga_satuan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="harga_total">Harga Total</label>
            <input type="number" name="harga_total" id="harga_total" class="form-control" value="{{ old('harga_total', $pembelian->harga_total) }}" step="0.01" required>
            @error('harga_total')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>
@endsection
