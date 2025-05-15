<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Aditya Maula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Aditya Maula</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Carousel -->
<div id="profileCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/' . $photo) }}" class="d-block w-100" style="max-height: 400px; object-fit: cover;" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" style="max-height: 400px; object-fit: cover;" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" style="max-height: 400px; object-fit: cover;" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#profileCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#profileCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Profil -->
<div class="container text-center mt-5" id="profil">
    <img src="{{ asset('images/' . $photo) }}" alt="Foto Profil" class="rounded-circle shadow" width="150">
    <h1 class="mt-3">{{ $name }}</h1>
    <p class="text-muted">{{ $bio }}</p>

    <div class="mt-4">
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Telepon:</strong> {{ $phone }}</p>
    </div>
</div>

<!-- Galeri Produk -->
<div class="container mt-5" id="galeri">
    <h2 class="text-center mb-4">Galeri Produk</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/product1.jpg') }}" class="img-fluid rounded shadow-sm" alt="Produk 1">
        </div>
        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/product2.jpg') }}" class="img-fluid rounded shadow-sm" alt="Produk 2">
        </div>
        <div class="col-md-4 mb-3">
            <img src="{{ asset('images/product3.jpg') }}" class="img-fluid rounded shadow-sm" alt="Produk 3">
        </div>
    </div>
</div>

<!-- Testimoni -->
<div class="container mt-5" id="testimoni">
    <h2 class="text-center mb-4">Testimoni Pelanggan</h2>
    <div class="card mb-3">
        <div class="card-body">
            <p>"Pelayanan cepat dan ramah. Produknya berkualitas banget!"</p>
            <footer class="blockquote-footer">Nisa, pelanggan dari Bandung</footer>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <p>"Langganan terus pokoknya, sukses terus ya kak Aditya!"</p>
            <footer class="blockquote-footer">Rudi, pelanggan dari Surabaya</footer>
        </div>
    </div>
</div>

<!-- Kontak -->
<div class="container text-center mt-5" id="kontak">
    <h2>Kontak Saya</h2>
    <p>Ingin tanya-tanya atau order langsung? Hubungi saya melalui WhatsApp atau sosial media di bawah ini:</p>
    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success mb-3">Chat WhatsApp</a>
    <div class="mt-3">
        @foreach($socials as $platform => $link)
            <a href="{{ $link }}" target="_blank" class="btn btn-outline-primary m-1">{{ $platform }}</a>
        @endforeach
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-white mt-5 py-3 bg-primary">
    <small>&copy; {{ date('Y') }} Aditya Maula. All rights reserved.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
