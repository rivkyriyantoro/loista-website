<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductTypeRetail</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>

    /* Styling untuk Konten Section 2 */



        .Retails .col-lg-6 img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }



        /* Container untuk gambar dan overlay */
.overlay-container {
  position: relative;
  width: 100%;
  height: 372px; /* Anda bisa sesuaikan tinggi gambar sesuai kebutuhan */
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
/*

 /* Custom Styling untuk grid */

 .Retails {
    display: flex;
max-width: 1440px;
flex-direction: column;
align-items: left;
gap: 36px;

 }

/* styel section 3*/
.overlay-text1 h2 {
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
        width: 1164px;
        height: auto; /* Menyesuaikan ukuran gambar */
        object-fit: cover;
    }

    /* Ubah font-size teks */
    .overlay-text1 h2  {
        font-size: 10px; /* Mengurangi ukuran font pada perangkat mobile */
        bottom: 10px;
        left: 10px;
    }

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
  /* margin-bottom: 20px; Spasi antar elemen */
}

.overlay-image {
  width: 100%;
  height: auto;
  object-fit: cover; /* Menghindari gambar terdistorsi */
}

/* Styling untuk Konten text2 */
.responsive-breadcrumb {
color: #707070;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  word-wrap: break-word;
  width: 100%;
  padding-bottom: 45px; /* Padding bawah */
  display: flex;
  justify-content: left; /* Menyusun teks di tengah */
  align-items: left;
}



.responsive-text-h1 {
  width: 100%;
  height: 100%;
  color: #333;
  font-family: 'Jura', sans-serif;
  font-weight: 700;
  text-align: left;
  font-size: 64px; /* Ukuran default untuk desktop */
}

.responsive-text-h3 {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: normal;
  font-size: 14px; /* Ukuran font default */
  color: #707070;
  text-align: center;
  line-height: 1.2;
  word-wrap: break-word;
  text-align: left;
}

/* Media query untuk mobile (max-width 768px) */
@media (max-width: 768px) {
    .responsive-container {
  width: 100%;
  height: 28px;
  display: flex;

}

.responsive-breadcrumb{
  width: 100%;
    color: #707070;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  word-wrap: break-word;
  padding-bottom: 14px;
}

  .responsive-text {
    font-size: 28px; /* Ukuran font lebih kecil di mobile */
    line-height: 1.4;
    text-align: center; /* Menyusun teks di tengah */
  }


.responsive-text-h1 {
  width: 100%;
  height: 100%;
  color: #333;
  font-family: 'Jura', sans-serif;
  font-weight: 700;
  word-wrap: break-word;
  text-align: left;
  font-size: 32px;

}

.responsive-text-h3 {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: normal;
  font-size: 12px; /* Ukuran font default */
  color: #707070;
  text-align: center;
  line-height: 1.2;
  word-wrap: break-word;
  text-align: left;
}
.overlay-text1 h2 {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: white;
    font-size: 20px;
    font-weight:bold; /* Menebalkan font */
    z-index: 2;
    text-align: left;
    width: 90%;
    word-wrap: break-word;
}

}





</style>

</head>
<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')


      <!-- section 3 -->
    <div class="container Retails ">
  <div class="row text-start">

    <div class="responsive-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Retail</li>
        </ol>


    </div>
    <!-- Title aligned to the left -->
    <div class="responsive-container">
      <p class="responsive-text-h1">Retails</p>
    </div>
  </div>




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
