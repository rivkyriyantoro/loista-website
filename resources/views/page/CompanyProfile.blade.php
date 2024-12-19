<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
/* Styling untuk header container */
.header-container {
    position: relative;
    width: 100%; /* Lebar penuh */
    height: 252px; /* Tinggi default untuk desktop */
    overflow: hidden;
}

/* Gambar di dalam container */
.header-container .header-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Menjaga proporsi gambar */
}

/* Overlay hitam transparan */
.header-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Overlay hitam transparan */
    z-index: 1;
}

/* Teks di atas gambar */
.header-container .header-text1 {
    position: absolute;
    bottom: 30px; /* Jarak dari bawah */
    left: 138px; /* Jarak dari kiri */
    color: #fff; /* Warna teks putih */
    font-size: 56px; /* Ukuran teks untuk desktop */
    font-weight: bold; /* Teks tebal */
    z-index: 2; /* Teks di atas overlay */
    margin: 0;
}

/* RESPONSIF UNTUK TABLET (max-width: 992px) */
@media (max-width: 992px) {
    .header-container {
        height: 200px; /* Ukuran tinggi lebih kecil untuk tablet */
    }
    .header-container .header-text1 {
        font-size: 36px; /* Ukuran font lebih kecil */
        left: 40px; /* Posisi teks lebih dekat ke kiri */
        bottom: 20px; /* Jarak teks lebih kecil dari bawah */
    }
}

/* RESPONSIF UNTUK TABLET KECIL (max-width: 768px) */
@media (max-width: 768px) {
    .header-container {
        height: 160px; /* Tinggi lebih kecil untuk tablet kecil */
    }
    .header-container .header-text1 {
        font-size: 28px; /* Ukuran font lebih kecil */
        left: 30px; /* Posisi lebih dekat ke kiri */
        bottom: 20px; /* Jarak teks lebih kecil */
    }
}

/* RESPONSIF UNTUK MOBILE (max-width: 576px) */
@media (max-width: 576px) {
    .header-container {
        height: 68px; /* Tinggi paling kecil untuk mobile */
    }
    .header-container .header-text1 {
        font-size: 16px; /* Ukuran font kecil */
        left: 15px; /* Posisi sangat dekat ke kiri */
        bottom: 10px; /* Jarak teks sangat kecil dari bawah */
    }
}


    </style>
</head>

<body>
    {{-- @include('components.navbar') --}}


    <!-- Header Full Width dengan Overlay -->
    <div class="container-fluid p-0">
        <div class="header-container">
            <!-- Gambar Background -->
            <img class="header-image"
                src="https://images.unsplash.com/photo-1485368647436-ff0fb9990605?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="header">
            <!-- Teks Overlay -->
            <div class="header-text1 fw-bold">Company Profile</div>
        </div>
    </div>



    @include('components.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
