<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

/* Styling untuk judul */

/* Gaya untuk kontainer section-1 */
.container-fluid.section-1 {
    display: block; /* Kontainer mengalir seperti normal block */
    width: 80%; /* Atur lebar kotak sesuai kebutuhan */
    max-width: 1200px; /* Maksimal lebar kotak */
    padding: 20px; /* Jarak dalam kotak */
    box-sizing: border-box; /* Memastikan padding masuk dalam ukuran */
}

/* Gaya untuk Judul h4 */
.title-section h4 {
    color: var(--Primary-Primary, #333); /* Gunakan warna default jika tidak ada var */
    font-family: 'Jura', sans-serif; /* Pastikan font Jura sudah benar */
    font-size: 64px; /* Ukuran font besar untuk heading */
    font-style: normal; /* Tidak menggunakan italic */
    font-weight: 600; /* Berat font tebal */
    line-height: 120%; /* Menjaga proporsi antara ukuran font dan tinggi baris */
    margin: 0; /* Menghilangkan margin atas/bawah */
    text-align: left; /* Posisi teks ke kiri */
}

/* Gaya untuk Judul h1 */
.title-section h1 {
    color: #333333; /* Warna teks gelap */
    font-size: 64px; /* Ukuran font besar */
    font-weight: 700; /* Berat font lebih tebal */
    line-height: 76.8px; /* Jarak antar baris */
    margin: 0; /* Menghilangkan margin */
}

/* Gaya untuk teks paragraf */
.text-box p {
    color: #383434; /* Warna teks sedikit lebih terang */
    font-size: 18px; /* Ukuran font untuk teks biasa */
    font-weight: 400; /* Berat font normal */
    line-height: 21.6px; /* Menjaga jarak antara baris */
    text-align: justify; /* Meratakan teks */
    margin-top: 20px; /* Jarak atas */
}

/* Gaya untuk tombol "Hubungi Kami" */
.btn-see-more {
    display: inline-block;
    background: #333333; /* Latar belakang tombol gelap */
    color: #fafafa; /* Teks tombol berwarna putih */
    font-size: 14px; /* Ukuran font tombol */
    font-weight: 600; /* Berat font agak tebal */
    padding: 10px 28px; /* Jarak dalam tombol */
    border-radius: 10px; /* Sudut tombol bulat */
    text-decoration: none; /* Menghilangkan garis bawah */
    margin-top: 20px; /* Jarak atas tombol */
    transition: background-color 0.3s; /* Efek transisi saat hover */
}
@media (max-width: 768px) {
            .title-section h4 {
                font-size: 36px;
            }

            .text-box p {
                font-size: 16px;
            }

            .btn-see-more {
                font-size: 12px;
                padding: 8px 20px;
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

/* Styling untuk Tombol */
.section-1 .btn-see-more {
    width: 224px;
    height: 37px;
    margin-top: 1.5rem;
    padding: 0;
    font-size: 1rem;
    background-color: #333333;
    color: white;
    border: none;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.section-1 .btn-see-more:hover {
    background-color: #333333;
}

/* Media Queries untuk Responsif Mobile */
@media (max-width: 768px) {
    /* Judul lebih kecil pada perangkat mobile */
    .title-section h4 {
        font-size: 36px; /* Mengurangi ukuran font pada layar kecil */
        text-align: left;
    }

    .title-section h1 {
        font-size: 40px; /* Mengurangi ukuran font pada layar kecil */
    }

    /* Paragraf dan teks lebih kecil */
    .text-box p {
        font-size: 16px; /* Menyesuaikan ukuran font untuk perangkat kecil */
    }

    .section-1 {
        padding: 1rem 0; /* Mengurangi padding pada perangkat kecil */
    }

    .section-1 .col-lg-6 {
        max-width: 100%; /* Menyesuaikan gambar agar tidak melebar */
        margin-bottom: 1rem;
    }

    /* Gambar lebih kecil dan responsif */
    .section-1 .col-lg-6 img {
        width: 100%;
        height: auto; /* Membuat gambar responsif */
    }

    /* Tombol yang lebih kecil */
    .section-1 .btn-see-more {
        width: 180px;
        font-size: 14px;
    }
}

/* Media Queries untuk Tablet (768px sampai 1024px) */
@media (min-width: 769px) and (max-width: 1024px) {
    .title-section h4 {
        font-size: 50px; /* Ukuran font menyesuaikan untuk tablet */
    }

    .title-section h1 {
        font-size: 56px;
    }

    .section-1 .col-lg-6 img {
        width: 100%;
        height: auto;
    }

    .section-1 .btn-see-more {
        width: 200px;
        font-size: 16px;
    }
}



        /* Styling untuk Konten Section 2 */
        .section-2 {
            padding: 3rem 0;
            /* background-color: #f8f9fa; Warna latar belakang light */
        }

        .section-2 .row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        .section-2 .col-lg-6 img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        .section-2 .text-box {
            text-align: left;
            max-width: 600px;
        }

        .section-2 .text-box h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;

        }

        .section-2 .text-box p {
            font-size: 1.125rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        /* Tombol See More pada Section 2 */
        .section-2 .btn-see-more {
            background-color: #703c2d;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.125rem;
            text-align: center;
        }

        .section-2 .btn-see-more:hover {
            background-color: #5e2e1e;
        }

        .section-3 .btn-see-more i {

        }


        /* Container untuk gambar dan overlay */
.overlay-container {
  position: relative;
  width: 100%;
  height: 500px; /* Anda bisa sesuaikan tinggi gambar sesuai kebutuhan */
  overflow: hidden;
}

/* Gambar yang akan ditampilkan */
.overlay-image {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Agar gambar tetap terpotong dengan baik */
  opacity: 1;
  transition: opacity 0.3s ease;
}

/* Overlay gelap */
.overlay-container::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5); /* Gelap 50% */
  z-index: 1; /* Agar berada di atas gambar */
}

/* Teks di atas gambar */
.overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  z-index: 2; /* Agar teks berada di atas overlay */
}

.overlay-text h2 {
  font-size: 2.5rem;
  margin-bottom: 10px;
  font-weight: bold;
}

.overlay-text p {
  font-size: 1.25rem;
}

 /* Custom Styling untuk grid */
 .grid-item {
      font-family: 'M PLUS 2 Variable', sans-serif;
      background-color: lightgray;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

 .section-2 {
    display: flex;
width: 1440px;
flex-direction: column;
align-items: center;
gap: 36px;

 }

        /* Responsif untuk Section 2 */
        @media (max-width: 991px) {
            .section-2 .row {
                flex-direction: column;
                text-align: center;
            }
        }

         /* Responsive design untuk ukuran layar kecil */
         @media (max-width: 768px) {
            .section-1 {
                padding: 30px 15px;
            }

            .title-section h1 {
                font-size: 48px;
                line-height: 58px;
            }

            .text-box p {
                font-size: 16px;
                line-height: 19px;
            }
        }


        /* carousel */
.carousel-inner .carousel-item img {
  width: 100%;      /* Gambar mengisi lebar kontainer */
  height: 456px;    /* Tinggi tetap 456px */
  object-fit: cover; /* Menjaga aspek rasio gambar dan mengisi kotak tanpa merusak proporsi */
}

/* carousel mobie? */
@media (max-width: 768px) {
  /* Mengatur gambar carousel agar di-crop dan di-zoom sesuai ukuran */
  .carousel-inner .carousel-item img {
    width: 390px;
    height: 124px;
    object-fit: cover;  /* Crop dan zoom gambar untuk memenuhi ukuran yang diinginkan */
    margin: 0 auto;     /* Mengatur gambar agar tetap berada di tengah */
  }

  /* Mengubah ukuran gambar placeholder untuk mobile */
  .carousel-item img {
    width: 390px;
    height: 124px;
    object-fit: cover;  /* Crop dan zoom gambar placeholder agar sesuai ukuran */
    margin: 0 auto;
  }

  /* Mengubah ukuran tombol navigasi pada layar kecil */
  .carousel-control-prev-icon, .carousel-control-next-icon {
    width: 30px;
    height: 30px;
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

/* Tampilan Default untuk Desktop */
@media (max-width: 768px) {
  .carousel-indicators {
    position: absolute;
    bottom: 25px; /* Menurunkan indikator ke bawah lebih jauh */

    display: flex;
    justify-content: center; /* Menjaga indikator tetap terpusat */
    align-items: center; /* Menjaga indikator berada di tengah secara vertikal */
    z-index: 10;
  }

  .carousel-indicators button {

    background-color: rgba(255, 255, 255, 0.7); /* Warna latar indikator */
    border: none;
    opacity: 0.7; /* Menurunkan opacity untuk efek transisi */
    transition: background-color 0.3s ease, opacity 0.3s ease; /* Efek transisi */
  }

  .carousel-indicators .active {
    background-color: rgba(255, 255, 255, 1); /* Warna latar belakang indikator yang aktif */
    opacity: 1; /* Indikator aktif dengan opacity penuh */
  }
}


/* CSS untuk mengatur ikon carousel */
.carousel-control-prev, .carousel-control-next {
font-size: 38px;
  background-color: rgba(0, 0, 0, 0.5); /* Latar belakang tombol */
  border-radius: 50%; /* Membuat tombol bulat */
  padding: 10px; /* Menambahkan padding untuk jarak ikon dengan tepi tombol */
  transition: background-color 0.3s ease; /* Efek transisi untuk background saat hover */
}

.carousel-control-prev i, .carousel-control-next i {
  font-size: 30px; /* Ukuran ikon */
  transition: color 0.3s ease; /* Efek transisi untuk warna ikon */
}

/* Responsif untuk perangkat mobile */
@media (max-width: 768px) {
  .carousel-control-prev, .carousel-control-next {
    padding-top: 15px;

  }

  .carousel-control-prev i, .carousel-control-next i {
    font-size: 14px;
    padding-top: 50px/* Mengurangi ukuran ikon untuk mobile */
  }
}

/* Responsif untuk tablet */
@media (max-width: 1024px) and (min-width: 769px) {
  .carousel-control-prev, .carousel-control-next {
    padding: 12px; /* Padding lebih kecil untuk tablet */
  }

  .carousel-control-prev i, .carousel-control-next i {
    font-size: 32px; /* Ukuran ikon sedikit lebih besar untuk tablet */
  }
}


/* styel section 3*/
/* Pastikan font yang digunakan mendukung font-weight 700 */
.overlay-text1 {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: white;
    font-size: 40px;
    font-weight:bold; /* Menebalkan font */
    z-index: 2;
    text-align: left;
    width: 90%;
    word-wrap: break-word;
}

/* Responsive untuk perangkat mobile */
@media screen and (max-width: 768px) {
    /* Ubah ukuran gambar */
    .overlay-container {
        height: 118px; /* Ukuran gambar lebih kecil pada mobile */
    }

    .overlay-image {
        width: 370px;
        height: 118px; /* Menyesuaikan ukuran gambar */
        object-fit: cover;
    }

    /* Ubah font-size teks */
    .overlay-text1 {
        font-size: 10px; /* Mengurangi ukuran font pada perangkat mobile */
        bottom: 10px;
        left: 10px;
    }

    /* Mengubah ukuran dan posisi tombol "See other" */
    div > .container > div {
        padding: 8px 16px;
        font-size: 12px;
    }

    div > .container > div > div {
        font-size: 8px;
    }
}

.section-2 .btn-see-more {
    width: 100%; /* Ensure the button spans the full container width */
    text-align: center;
    background-color: #333333;
    padding: 10px 28px;
    border-radius: 10px;
    color: #FAFAFA;
    font-size: 14px;
    font-weight: 600;
    transition: background-color 0.3s;
}

.container {
  width: 100%;
  padding: 0;
  margin: 0;
}

.overlay-container {
  position: relative;
  width: 100%; /* Pastikan lebar kontainer 100% */
  max-width: 100%; /* Mencegah elemen melebihi lebar layar */
  margin-bottom: 20px; /* Spasi antar elemen */
}

.overlay-image {
  width: 100%;
  height: auto; /* Menjaga aspek rasio gambar */
  object-fit: cover; /* Menghindari gambar terdistorsi */
}

.overlay-text1 {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
  font-size: 1.5em;
}

@media (max-width: 768px) {
  .overlay-text1 h2 {
    font-size: 18px; /* Menyesuaikan ukuran teks di perangkat kecil */
  }
}
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


    /* Gaya umum untuk elemen dengan teks */
.responsive-text {
    width: 100%;
    color: #333;
    font-family: 'Jura', sans-serif;
    font-weight: 700;
    line-height: 1.2;
    word-wrap: break-word;
    text-align: left;
    font-size: 64px; /* Ukuran default */
}

/* Responsivitas untuk layar kecil */
@media (max-width: 768px) {
    .responsive-text {
        font-size: 48px;
        text-align: left;


    }
}

@media (max-width: 480px) {
    .responsive-text {
        font-size: 36px;
    }
}


    </style>
</head>
<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')

    <!-- Konten Section 1 -->
    <div class="container-fluid section-1">
        <div class="row">
            <!-- Judul -->
            <div class="col-12 title-section">
                <h4>Design and Build</h4>
            </div>

            <!-- Kolom Teks dan Tombol -->
            <div class="col-12 text-box">
                <p>Make your vision a reality with our Design and Build services. Do you have an idea for custom furniture tailored to your space needs? Our team is ready to help bring unique and functional designs to life, personalized to suit your preferences and lifestyle.<br><br>We offer a flexible consultation process, either online or in-person at our showroom. Get expert guidance to discover the best design solutions that meet high standards of quality and aesthetics.<br><br>Start your consultation now by contacting our Customer Service team or visit our showroom to experience it firsthand and speak with our design specialists.</p>
                <a href="#" class="btn-see-more btn btn-primary">Hubungi Kami</a>
            </div>
        </div>
    </div>

        <!-- Carousel -->
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
    <i class='fas fa-chevron-circle-left' style='color:rgb(255, 255, 255)'></i>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <i class='fas fa-chevron-circle-right' style='color:rgb(255, 255, 255)'></i>
  </button>
</div>


     <!-- section 3 -->
     <div class="container section-2">
        <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 35px; display: inline-flex; padding-top: 100px;">
          <!-- Kitchen -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kitchen">
            <div class="overlay-text1">
                <h2>Kitchen</h2>
            </div>
        </div>

          <!-- Wardrobe -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1683181181300-44c0c991a2cf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Wardrobe">
            <div class="overlay-text1">
                <h2>Wardrobe</h2>
            </div>
        </div>

          <!-- TV Cabinet -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1678874956092-6d9dc8b766bf?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TV Cabinet">
            <div class="overlay-text1">
                <h2>TV Cabinet</h2>
            </div>
        </div>

          <!-- Backdrop -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Backdrop">
            <div class="overlay-text1">
                <h2>Backdrop</h2>
            </div>
        </div>

          <!-- Other -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Other">
            <div class="overlay-text1">
                <h2>Other</h2>
            </div>
        </div>
      </div>
      </div>

<div class="container section-2">
    <div style="width: 1164px; justify-content: center; align-items: center; display: inline-flex">
        <div style="padding-left: 28px; padding-right: 28px; padding-top: 10px; padding-bottom: 10px; background: #333333; border-radius: 10px; justify-content: center; align-items: center; gap: 6px; display: inline-flex">
            <div style="color: #FAFAFA; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 600; line-height: 16.80px; word-wrap: break-word">See other</div>
        </div>
    </div>
</div>

     <!-- section 3 -->
     <div class="container section-2">
        <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 35px; display: inline-flex; padding-top: 100px;">
            <div class="responsive-text">Retails</div>

          <!-- Wardrobe -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1683181181300-44c0c991a2cf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Wardrobe">
            <div class="overlay-text1">
                <h2>Sofa</h2>
            </div>
        </div>

          <!-- TV Cabinet -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1678874956092-6d9dc8b766bf?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TV Cabinet">
            <div class="overlay-text1">
                <h2>Bench</h2>
            </div>
        </div>

          <!-- Backdrop -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Backdrop">
            <div class="overlay-text1">
                <h2>Coffee Table</h2>
            </div>
        </div>

          <!-- Other -->
          <div class="overlay-container">
            <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Other">
            <div class="overlay-text1">
                <h2>Side Table</h2>
            </div>
        </div>
      </div>
      </div>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
