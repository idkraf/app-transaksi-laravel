
{{-- transaksi/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Transaksi List</h1>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Add Transaksi</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Date</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Remaining</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->jumlah_barang }}</td>
                    <td>{{ $item->sisa_barang }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        <a href="{{ route('transaksi.edit', $item) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('transaksi.destroy', $item) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection