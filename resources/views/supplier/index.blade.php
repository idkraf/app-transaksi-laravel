
{{-- supplier/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Supplier List</h1>
    <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">Add Supplier</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->nama }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td>{{ $supplier->no_hp }}</td>
                    <td>
                        <a href="{{ route('supplier.edit', $supplier) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('supplier.destroy', $supplier) }}" method="POST" style="display: inline;">
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