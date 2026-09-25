<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Dashboard') · {{ config('app.name', 'KasirKu') }}
    </title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <style>
    body {
        background: linear-gradient(
            135deg,
            #f0f9ff 0%,
            #e6f7f5 50%,
            #f5fbfa 100%
        );

        min-height: 100vh;
        color: #183b4e;
    }

    .navbar {
        background: linear-gradient(
            110deg,
            #014163 0%,
            #084c8c 50%,
            #1448b8 100%
        );

        box-shadow: 0 5px 20px rgba(7, 89, 133, 0.22);
    }

    .navbar-brand {
        font-weight: 700;
        letter-spacing: .5px;
    }

    .nav-link {
        border-radius: 9px;
        margin: 0 3px;
        padding: 8px 12px;
        transition: all .25s ease;
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.14);
        transform: translateY(-1px);
    }

    .nav-link.active {
        background: rgba(255, 255, 255, 0.20);
    }

    .card {
        border: none;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.96);

        box-shadow:
            0 6px 22px rgba(8, 112, 130, 0.08);
    }

    .table {
        vertical-align: middle;
    }

    .table th {
        white-space: nowrap;
        background: #effafa;
        color: #24566a;
    }

    .btn {
        border-radius: 9px;
    }

    .btn-primary {
        border: none;

        background: linear-gradient(
            110deg,
            #0722bb,
            #1456b8
        );
    }

    .btn-primary:hover {
        background: linear-gradient(
            110deg,
            #425cf1,
            #3d75c9
        );
    }

    .alert {
        border: none;
        border-radius: 11px;
    }

    .harga {
        font-variant-numeric: tabular-nums;
        font-weight: 600;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            💳 KasirKu
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navMenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('home', 'produk.*') ? 'active' : '' }}"
                        href="{{ route('produk.index') }}">
                        📦 Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('transaksi.create') ? 'active' : '' }}"
                        href="{{ route('transaksi.create') }}">
                        🛒 Transaksi Baru
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('transaksi.index', 'transaksi.show') ? 'active' : '' }}"
                        href="{{ route('transaksi.index') }}">
                        📋 Riwayat Transaksi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container pb-5">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Berhasil!</strong>
            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Error!</strong>
            {{ session('error') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>
        </div>
    @endif

    @yield('content')

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>
