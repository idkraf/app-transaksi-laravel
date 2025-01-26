@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Supplier</h1>
    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Address</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_hp">Phone</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection