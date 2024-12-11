<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

/* carousel */

/* Desktop Styles (default) */
.carousel-inner .carousel-item img {
  width: 100%;
  height: 456px;
  object-fit: cover;
}

.carousel-control-prev, .carousel-control-next {
  font-size: 38px;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  padding: 10px;
  transition: background-color 0.3s ease;
}

.carousel-control-prev i, .carousel-control-next i {
  font-size: 30px;
  transition: color 0.3s ease;
}

/* Mobile Styles (max-width: 768px) */
@media (max-width: 768px) {

    .carousel-inner .carousel-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}



  .carousel-control-prev, .carousel-control-next {
    padding-top: 15px;
  }

  .carousel-control-prev i, .carousel-control-next i {
    font-size: 14px;
    padding-top: 50px;
  }
}

/* Tablet Styles (max-width: 1024px and min-width: 769px) */
@media (max-width: 1024px) and (min-width: 769px) {


  .carousel-control-prev, .carousel-control-next {
    padding: 12px;
  }

  .carousel-control-prev i, .carousel-control-next i {
    font-size: 32px;
  }
}



 /* Styling untuk Konten Section 1 */
        .section-1 {
            margin-top: 3rem;
            padding: 2rem 0;
        }

        .section-1 .row {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .section-1 .col-lg-6 {
            margin-bottom: 1rem;
            max-width: 600px;
        }

        .section-1 .text-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .section-1 .text-box h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .section-1 .text-box p {
            font-size: 1rem;
            color: #555;
        }

        .section-1 .col-lg-6 img {
            width: 407px;
            height: 172px;
            object-fit: cover;
            border-radius: 10px;
        }

<<<<<<< Updated upstream
=======
        @media (max-width: 768px) {
            .section-1 .col-lg-6 img {
                width: 157px;
                height: 66px;
            }

            .section-1 .text-box p {
            font-size: 16px;
            color: #555;
        }

        }














>>>>>>> Stashed changes
    /* Styling untuk Tombol */
  .section-1 .btn-see-more {
            display: flex;                  /* Menggunakan flexbox untuk tombol */
    justify-content: center;        /* Menyusun teks di tengah secara horizontal */
    align-items: center;            /* Menyusun teks di tengah secara vertikal */
    background-color: #333333;         /* Atur warna latar belakang tombol */
    color: white;                   /* Warna teks tombol */
    padding: 10px 20px;             /* Padding tombol */
    font-size: 14px;                /* Ukuran font */
    text-decoration: none;          /* Menghilangkan garis bawah jika ada */
    border-radius: 10px;             /* Membuat sudut tombol melengkung */
    transition: background-color 0.3s ease; /* Efek transisi saat hover */
    width: 224px;                   /* Lebar tetap tombol */
    height: 37px;                   /* Tinggi tetap tombol */
}

        .section-1 .btn-see-more:hover {
            background-color: #333333;
        }



/* Styling untuk Konten Section 2 */
/* Kontainer utama */
.content-container {
    width: 100%; /* Agar kontainer memenuhi lebar layar */
    max-width: 100%; /* Membatasi lebar maksimal kontainer */
    height: 739px; /* Tinggi kontainer */
    margin: 0 auto; /* Agar kontainer terpusat */
    display: flex; /* Flexbox untuk kolom kiri dan kanan */
}

/* Kolom Kiri (Living Room dan Dining Room) */
.left-column {
    flex: 1; /* Membagi lebar kolom kiri secara proporsional */
    display: flex;
    flex-direction: column;
}

/* Kolom Kanan (Office) */
.right-column {
    width: 720px; /* Lebar kolom kanan */
    height: 739px; /* Menyesuaikan tinggi kolom kanan */
    display: flex;
    flex-direction: column;
}

/* Gambar Overlay */
.overlay-container {
    position: relative;
    width: 100%; /* Memastikan gambar mengisi lebar kontainer */
    height: 100%; /* Memastikan gambar mengisi tinggi kontainer */
    overflow: hidden;
}

/* Gambar di dalam overlay */
.overlay-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Agar gambar mengisi kontainer tanpa distorsi */
}

/* Overlay gelap di atas gambar */
.overlay-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Overlay gelap */
    z-index: 1; /* Agar overlay berada di atas gambar */
}

/* Teks di pojok kiri bawah */
.overlay-text {
    position: absolute;
    bottom: 20px; /* Menempatkan teks 20px dari bawah */
    left: 20px;   /* Menempatkan teks 20px dari kiri */
    color: white;
    font-size: 2.5rem; /* Ukuran teks */
    font-weight: bold;
    z-index: 2; /* Teks berada di atas overlay */
    text-align: left; /* Menyusun teks ke kiri */
    width: 90%; /* Menjamin teks tidak keluar dari batas */
    word-wrap: break-word; /* Menghindari teks melampaui kontainer */
}
/* Tombol See All Catalog */
.btn-see-more {
    display: flex;                  /* Menggunakan flexbox untuk tombol */
    justify-content: center;        /* Menyusun teks di tengah secara horizontal */
    align-items: center;            /* Menyusun teks di tengah secara vertikal */
    background-color: #333333;      /* Warna latar belakang tombol */
    color: white;                   /* Warna teks tombol */
    padding: 23px 20px 10px 20px;    /* Padding atas 23px, kanan/kiri 20px, bawah 10px */
    font-size: 14px;                /* Ukuran font */
    text-decoration: none;          /* Menghilangkan garis bawah jika ada */
    border-radius: 10px;            /* Membuat sudut tombol melengkung */
    transition: background-color 0.3s ease; /* Efek transisi saat hover */
    width: auto;                    /* Lebar tombol mengikuti lebar teks */
    height: 37px;                   /* Tinggi otomatis mengikuti isi tombol */
    margin: 0 auto;                 /* Membuat tombol terletak di tengah secara horizontal */
}

/* Tombol Hover */
.btn-see-more:hover {
    background-color: #383434;      /* Warna tombol saat hover */
}

/* Mengatur posisi tombol di tengah */
.d-flex.justify-content-center {
    display: flex;
    justify-content: center;  /* Menjaga tombol tetap di tengah */
    align-items: center;      /* Vertikal center */
}

/* Responsif untuk ukuran layar mobile */
@media (max-width: 767px) {
    /* Mengubah layout menjadi satu kolom di perangkat mobile */
    .content-container {
        flex-direction: column; /* Mengubah layout menjadi vertikal pada perangkat mobile */
        height: auto; /* Mengatur tinggi agar konten bisa menyesuaikan */
        padding: 0; /* Menghilangkan padding pada kontainer */
        width: 100%; /* Menjamin lebar kontainer 100% pada layar kecil */
    }

    /* Menyesuaikan gambar agar tampil dengan baik pada layar kecil */
    .overlay-image {
        width: 100%; /* Memastikan gambar tidak melebihi lebar layar */
        height: auto; /* Menjaga aspek rasio gambar */
        object-fit: cover;  /* Pastikan gambar tetap terpotong dengan baik */
    }

    /* Menyesuaikan ukuran teks di mobile */
    .overlay-text h2 {
        font-size: 2rem; /* Menurunkan ukuran font pada mobile */
    }

    /* Tombol See All Catalog */
    .btn-see-more {
        font-size: 16px; /* Menyesuaikan ukuran font */
        padding: 15px 30px; /* Mengatur padding lebih besar */
        width: auto; /* Lebar tombol mengikuti ukuran teks */
        height: 50px; /* Menyesuaikan tinggi tombol */
    }

    /* Mengatur posisi teks di pojok kiri bawah */
    .overlay-text {
        bottom: 20px; /* Menurunkan teks sedikit */
        left: 15px;   /* Memberikan margin kiri */
    }

    /* Mengurangi padding bawah pada container */
    .container-fluid {
        padding-left: 0;  /* Menghilangkan padding kiri */
        padding-right: 0; /* Menghilangkan padding kanan */
        padding-bottom: 2px; /* Mengurangi padding bawah agar tombol lebih dekat ke konten */
        max-width: 100%; /* Pastikan lebar kontainer tidak lebih dari layar */
        box-sizing: border-box; /* Menjamin padding dihitung dalam lebar kontainer */
    }

    /* Menyesuaikan tinggi konten Office agar sejajar dengan Living Room dan Dining Room */
    .right-column .overlay-container {
        height: 217px; /* Sesuaikan tinggi konten Office */
    }

    /* Mengurangi margin bawah pada Office */
    .right-column {
        margin-bottom: 20px; /* Mengurangi jarak bawah pada kolom Office */
    }

    /* Mengatur jarak antara tombol dan konten */
    .d-flex.justify-content-center {
        margin-top: 2px; /* Menyesuaikan jarak atas tombol */
    }

    /* Menyembunyikan scroll horizontal */
    body {
        overflow-x: hidden; /* Mencegah scroll horizontal */
    }
}







 /* Styling untuk Konten Section 3 */
/* Default Styles */
.project-title {
    color: #333333;
    font-size: 48px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 57.60px;
    padding-bottom: 23px;
    padding-top: 78px;


}

.project-subtitle {
    color: #7A7474;
    font-size: 28px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 600;
    line-height: 33.60px;
    padding-bottom: 23px;
}

.project-description {
    color: #333333;
    font-size: 18px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 600;
    line-height: 21.60px;
    padding-bottom: 23px;
}




/* Responsive Design for Mobile (Below 768px) */
@media (max-width: 767px) {
    .project-title {
        font-size: 24px; /* Smaller font size on mobile */
        line-height: 70px; /* Adjust line height for mobile */
        padding-top: 10px;
        padding-bottom: 2px;
    }

    .project-subtitle {
        font-size: 18px; /* Adjust subtitle size */
        line-height: 24px; /* Adjust line height for mobile */
        padding-bottom: 2px;
    }

    .project-description {
        font-size: 16px; /* Smaller text for mobile */
        line-height: 20px; /* Adjust line height for better readability */
        padding-bottom: 7px;
    }

    .project-image {
        max-width: 100%; /* Ensure image is responsive */
        height: auto;
    }
}

Responsive Design for Tablets (768px - 1024px)
@media (min-width: 768px) and (max-width: 1024px) {
    .project-title {
        font-size: 40px;
        line-height: 48px;
    }

    .project-subtitle {
        font-size: 24px;
        line-height: 28px;
    }

    .project-description {
        font-size: 18px;
        line-height: 22px;
    }
}


 /* Styling untuk Konten Section 4 */

/* Mengatur layout dan tampilan kontainer utama */
.container.section-4 {
    width: 100%;
    padding: 20px;
}

.row {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Mengatur judul dan garis pemisah */
.container.section-4 > div > div:first-child {
    color: #333333;
    font-size: 40px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 48px;
    word-wrap: break-word;
}

.container.section-4 > div > div:nth-child(2) {
    height: 1px;
    background: #999999;
}

/* Mengatur Section (Konten Info dan Promosi) */
.container.section-4 > div > div:nth-child(3),
.container.section-4 > div > div:nth-child(4),
.container.section-4 > div > div:nth-child(5) {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

/* Pengaturan gambar */
img {
    border-radius: 8px;
    max-width: 100%;
    object-fit: cover;
}

/* Menyesuaikan ukuran gambar di tampilan mobile */
/* Menyesuaikan ukuran gambar di tampilan mobile */
@media (max-width: 767px) {
    /* Layout Kontainer dan Judul */
    .container.section-4 {
        padding: 10px;
    }

    /* Mengubah Flexbox menjadi satu kolom di mobile */
    .row {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Memastikan teks di atas gambar memiliki ruang yang cukup */
    .container.section-4 > div > div:first-child {
        font-size: 28px; /* Mengurangi ukuran font judul untuk mobile */
        line-height: 36px; /* Menyesuaikan jarak antar baris */
        text-align: left; /* Menyelaraskan teks ke kiri */
    }

    /* Mengatur gambar untuk responsif */
    img {
        width: 100%; /* Mengatur lebar gambar agar sesuai dengan lebar layar */
        height: auto; /* Memastikan gambar proporsional */
        max-width: 100%; /* Agar gambar tidak melebihi lebar kontainer */
        object-fit: cover;
    }

    /* Mengurangi ukuran teks di bawah judul */
    .container.section-4 .row > div > div:nth-child(2) {
        font-size: 14px; /* Menurunkan ukuran font teks */
        line-height: 18px; /* Menyesuaikan tinggi baris */
    }

    /* Menambahkan padding dan margin untuk pemisah garis */
    .container.section-4 > div > div:nth-child(2) {
        margin: 10px 0; /* Menambahkan jarak atas dan bawah garis pemisah */
    }

    /* Mengatur lebar kontainer informasi */
    .container.section-4 .row > div {
        width: 100%; /* Memastikan kolom mengisi lebar penuh */
    }

    /* Menambahkan margin antara teks dan gambar */
    .container.section-4 .row > div > div:nth-child(2) {
        margin-bottom: 10px; /* Menambahkan jarak bawah pada teks */
    }

    /* Menyelaraskan semua elemen pada center */
    .container.section-4 .row > div {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start; /* Rata kiri */
    }

    /* Mengatur urutan gambar ke atas menggunakan Flexbox */
    .container.section-4 .row > div img {
        order: -1; /* Memindahkan gambar ke atas di perangkat mobile */
    }

    /* Mengatur teks agar rata kiri */
    .container.section-4 .row > div > div:nth-child(2) {
        text-align: left; /* Menyelaraskan teks ke kiri */
    }

    /* Pengaturan jarak antar Section */
    .container.section-4 > div > div {
        gap: 20px; /* Menambah jarak antar section */
    }
}



    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')


 <!-- Carousel -->
 <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>


 <!-- The slideshow/carousel -->
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1445510861639-5651173bc5d5?q=80&w=1959&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Los Angeles" class="d-block" style="width:100%" height="456px">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1506377295352-e3154d43ea9e?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Chicago" class="d-block" style="width:100%" height="456px">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1517467139951-f5a925c9f9de?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="New York" class="d-block" style="width:100%" height="456px">
    </div>
  </div>



    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>


    <!-- Konten Section 1 -->
    <div class="container section-1">
        <div class="row">
            <!-- Kolom Gambar -->
            <div class="col-lg-6 mb-4">
                <img src="/img/logo.png" alt="Produk Unggulan" class="img-fluid custom-img">
            </div>

            <!-- Kolom Teks dan Tombol -->
            <div class="col-lg-12 text-box">
                <p>
                    As a renowned specialist in furniture and interior design, PT LO:ISTA Indonesia was established in 2011. With the tagline "Furniture & Interior Design," we believe that every space reflects the unique touch of its owner. LOISTA is here to bring your dream concepts to life in every piece of furniture and interior design.
                    Our commitment is to consistently deliver excellent service with high-quality products that breathe new life and warmth into every space. PT LO:ISTA Indonesia prides itself on infusing a modern, exclusive touch into every product, from kitchens, living rooms, dining areas, bedrooms, and offices to decorative accessories.
                    To ensure the best service, PT LO:ISTA Indonesia operates a showroom in a strategic location in Tangerang. We offer comprehensive solutions for furniture, home interior design, and decoration to meet your creative needs.
                </p>
                <a href="#" class="btn-see-more">See About Our Company</a>
            </div>
        </div>
    </div>


     <!-- Konten Section 2 -->
     <div class="content-container">
        <!-- Kolom Kiri (Living Room + Dining Room) -->
        <div class="left-column">
            <!-- Living Room Section -->
            <div class="overlay-container">
                <img class="overlay-image" src="https://images.unsplash.com/photo-1720048169987-2fd6bd1bf2b4?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Living Room">
                <div class="overlay-text">
                    <h2>Living Room</h2>
                </div>
            </div>

            <!-- Dining Room Section -->
            <div class="overlay-container">
                <img class="overlay-image" src="https://images.unsplash.com/photo-1731370963535-aa6e57ed40f6?q=80&w=1884&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dining Room">
                <div class="overlay-text">
                    <h2>Dining Room</h2>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan (Office) -->
        <div class="right-column">
            <div class="overlay-container">
                <img class="overlay-image" src="https://images.unsplash.com/photo-1719937206333-dceea3c5564d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Office">
                <div class="overlay-text">
                    <h2>Office</h2>
                </div>
            </div>
        </div>
    </div>

   <!-- Tombol See All Catalog -->
<div class="d-flex justify-content-center mt-4">
    <a href="#" class="btn-see-more">See All Catalog</a>
</div>







 <!--  Konten Section  3 -->
    <!-- Konten Section 3 -->
<div class="container section-3 d-flex justify-content-center align-items-center">
    <div class="row w-100">
        <!-- Text Section (optional) -->
        <div class="col-12 text-center mb-4">
            <div class="project-title">
                Our Projects
            </div>
            <div class="project-subtitle">
                100+ Completed Projects
            </div>
            <div class="project-description">
                Our projects are typically aimed at creating and customizing residential and commercial spaces, using our decades of expertise and creating ideas in the field of interface design.
            </div>
        </div>

        <!-- Image Section -->
        <div class="col-12 d-flex justify-content-center" style="padding-top: 20px; padding-bottom: 20px;">
            <img class="img-fluid project-image" src="\img\section 88.png" />
        </div>
    </div>
</div>


<!-- Konten Section 4 -->

    <div class="container section-4">
        <div class="row">
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                <div style="align-self: stretch; color: #333333; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Info & Promotions</div>
                <div style="align-self: stretch; height: 1px; background: #999999"></div>

                <!-- Section 1 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                            <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">August 13, 2021 </div>
                            <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                        </div>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <!-- Section 2 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                            <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">August 13, 2021 </div>
                            <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                        </div>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <!-- Section 3 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                            <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">August 13, 2021 </div>
                            <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                        </div>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <div style="align-self: stretch; height: 1px; background: #999999"></div>
            </div>
        </div>
    </div>


  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

