<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog UMKM Desa Tanah Baru</title>

    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- COMPONENT -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <span>UMKM</span><br>
            <strong>Desa Tanah Baru</strong>
        </div>

        <div class="nav-links">
            <a href="#hero">Beranda</a>
            <a href="#produk">Produk</a>
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn-daftar">Daftar</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-overlay">

            <div class="hero-content">
                <p class="tagline">Platform UMKM Desa</p>

                <h1>
                    Dukung Produk Lokal <br>
                    <span>Desa Tanah Baru</span>
                </h1>

                <p class="hero-desc">
                    Temukan berbagai produk unggulan dari UMKM desa yang berkualitas
                    dan siap bersaing di era digital.
                </p>

                <div class="hero-buttons">
                    <a href="#produk" class="btn-primary">Katalog Produk</a>
                    <a href="{{ route('register') }}"  class="btn-secondary">Daftar UMKM</a>
                </div>
            </div>

        </div>
    </section>

    <section id="produk" class="produk-section">
        <div class="container">

            <h1>Katalog Produk UMKM</h1>
            <p>Temukan produk terbaik dari desa</p>

            <input type="text" placeholder="Cari produk..." class="search">

            <div class="produk-list">

                <div class="card fade-in">
                    <img src="{{ asset('assets/images/es-banana-coklat.jpeg') }}">
                    <h3>Es Banana Coklat</h3>
                    <p>Rp 10.000</p>
                    <a href="detail.html">Lihat Detail</a>
                </div>

            </div>

        </div>
    </section>

    <script>
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");

            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>

</body>
</html>