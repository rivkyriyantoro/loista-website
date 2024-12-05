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
