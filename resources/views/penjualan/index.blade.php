{{-- resources/views/penjualan/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Penjualan List</h1>
    <a href="{{ route('penjualan.create') }}" class="btn btn-primary mb-3">Add New Penjualan</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Satuan</th>
                <th>Harga Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualan as $item)
                <tr>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->jumlah_barang }}</td>
                    <td>{{ number_format($item->harga_satuan, 2) }}</td>
                    <td>{{ number_format($item->harga_total, 2) }}</td>
                    <td>
                        <a href="{{ route('penjualan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('penjualan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
