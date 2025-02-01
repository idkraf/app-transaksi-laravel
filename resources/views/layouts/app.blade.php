{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="list-group">
                    <a href="{{ route('dashboard.index') }}" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{ route('penjualan.index') }}" class="list-group-item list-group-item-action">Penjualan</a>
                    <a href="{{ route('pembelian.index') }}" class="list-group-item list-group-item-action">Pembelian</a>
                    <a href="{{ route('supplier.index') }}" class="list-group-item list-group-item-action">Supplier</a>
                    <a href="{{ route('transaksi.index') }}" class="list-group-item list-group-item-action">Transaksi</a>
                    {{-- <a href="{{ route('laba-rugi.index') }}" class="list-group-item list-group-item-action">Laba Rugi</a> --}}
                </div>
            </div>

            {{-- Main Content --}}
            <div class="col-md-9 col-lg-10">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @livewireScripts
</body>
</html>
