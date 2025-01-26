@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Supplier</h1>
    <form action="{{ route('supplier.update', $supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $supplier->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Address</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $supplier->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="no_hp">Phone</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $supplier->no_hp }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection