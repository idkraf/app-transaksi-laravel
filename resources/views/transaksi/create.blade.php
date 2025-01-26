{{-- transaksi/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Transaksi</h1>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="supplier_id">Supplier</label>
            <select name="supplier_id" id="supplier_id" class="form-control" required>
                <option value="">Select Supplier</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" data-nama="{{ $supplier->nama }}" data-alamat="{{ $supplier->alamat }}" data-no_hp="{{ $supplier->no_hp }}">
                        {{ $supplier->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" id="nama" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="alamat">Address</label>
            <input type="text" name="alamat" id="alamat" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="no_hp">Phone</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Date</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Item Name</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_barang">Quantity</label>
            <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sisa_barang">Remaining</label>
            <input type="number" name="sisa_barang" id="sisa_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script>
    document.getElementById('supplier_id').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        document.getElementById('nama').value = selectedOption.getAttribute('data-nama');
        document.getElementById('alamat').value = selectedOption.getAttribute('data-alamat');
        document.getElementById('no_hp').value = selectedOption.getAttribute('data-no_hp');
    });
</script>
@endsection
