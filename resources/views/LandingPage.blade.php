<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Kasir</title>
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Transaksi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Selamat Datang di timKasir</h1>
        <p>Sistem Kasir Modern untuk Bisnis Anda</p>
        <a href="#" class="cta-button">Mulai Sekarang</a>
    </section>

    <section class="features">
        <div class="feature">
            <img src="{{ asset('image/gambar1.png') }}" alt="Fitur 1">
            <h2>Manajemen Produk</h2>
            <p>Mudah mengelola daftar produk Anda.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('image/gambar2.png') }}" alt="Fitur 2">
            <h2>Pencatatan Transaksi</h2>
            <p>Mencatat transaksi dengan cepat dan akurat.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('image/gambar4.png') }}" alt="Fitur 3">
            <h2>Laporan Penjualan</h2>
            <p>Menampilkan laporan penjualan secara rinci.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 KasirKu. All Rights Reserved.</p>
    </footer>
</body>
</html>
