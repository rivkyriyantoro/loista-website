<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

/* Company Profile Header */

/* Default styles */
.company-profile-header {
  height: 372px;
  background-image: url('https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
  background-size: cover;
  background-position: center;
  position: relative;  /* So that overlay and text can be positioned inside it */
}

.company-profile-header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.50);  /* Black with 50% opacity */
  z-index: 1;  /* Ensures overlay is below the text */
}

.company-profile-header .company-profile-title {
  color: #FAFAFA;
  font-size: 56px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  line-height: 67.2px;
  word-wrap: break-word;
  position: absolute;
  bottom: 44px;  /* Distance from the bottom */
  left: 138px;   /* Distance from the left */
  margin: 0;
  z-index: 2;  /* Ensures the title appears above the overlay */
}

/* Responsive Styles */

/* For screens smaller than 1200px (Tablets and below) */
@media (max-width: 1199px) {
  .company-profile-header {
    height: 200px;
  }

  .company-profile-header .company-profile-title {
    font-size: 28px;
    line-height: 56px;
    left: 50px;
    bottom: 30px;
  }
}

/* For screens smaller than 992px (Mobile Landscape) */
@media (max-width: 991px) {
  .company-profile-header {
    height: 180px;
  }

  .company-profile-header .company-profile-title {
    font-size: 28px;
    line-height: 48px;
    left: 30px;
    bottom: 20px;
  }
}

/* For screens smaller than 768px (Mobile Portrait) */
@media (max-width: 767px) {
  .company-profile-header {
    height: 160px;
  }

  .company-profile-header .company-profile-title {
    font-size: 28px;
    line-height: 44px;
    left: 20px;
    bottom: 15px;
  }
}

/* For screens smaller than 576px (Very Small Mobile) */
@media (max-width: 575px) {
  .company-profile-header {
    height: 140px;
  }

  .company-profile-header .company-profile-title {
    font-size: 28px;
    line-height: 40px;
    left: 10px;
    bottom: 10px;
  }
}

/* Default styling untuk deskripsi dan gambar */
.description-text {
  color: #474747;
  font-size: 28px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-style: italic;
  font-weight: 400;
  line-height: 33.6px;
  word-wrap: break-word;
  text-align: center;
}

/* Gambar Logo dengan ukuran maksimal */
img {
  max-width: 100%; /* Membuat gambar responsif */
  height: auto; /* Memastikan proporsi gambar tetap terjaga */
}

/* Styling untuk container tentang */
.container-tentang {
  display: block; /* Pastikan padding bekerja */
  padding-top: 62px;
  padding-bottom: 62px;
  max-width: 1129px;
  margin: 0 auto;
}

.description-text-tentang {
    color: #474747;
    text-align: left;
  font-size: 28px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-style: italic;
  font-weight: 400;
  line-height: 33.60px;
  word-wrap: break-word;

}

.logo-img {
    padding-left: 46px;
  max-width: 202px;  /* Menentukan lebar maksimal gambar */
  height: auto;      /* Memastikan tinggi gambar tetap proporsional */
}


@media (max-width: 768px) {
  .description-text-tentang {
    font-size: 20px; /* Ukuran font lebih kecil di layar mobile */
    line-height: 24px;
    padding: 0 15px;
    text-align: left;
  }
}





/* Styling untuk kontainer deskripsi lengkap */
.container-deskripsi-lengkap {
  padding-top: 30px;     /* Memberikan jarak atas pada kontainer */
  padding-bottom: 30px;  /* Memberikan jarak bawah pada kontainer */
  max-width: 1129px;     /* Lebar maksimal untuk kontainer */
  margin: 0 auto;        /* Memastikan kontainer tetap di tengah */
}

/* Styling untuk teks dalam deskripsi */
.container-deskripsi-lengkap .text-secondary {
  color: #474747;         /* Warna teks */
  font-size: 28px;         /* Ukuran font untuk teks */
  font-family: 'Plus Jakarta Sans', sans-serif;  /* Font yang digunakan */
  font-style: italic;      /* Membuat teks miring */
  font-weight: 400;        /* Berat font normal */
  line-height: 1.5;        /* Jarak antar baris teks */
  word-wrap: break-word;   /* Memungkinkan kata panjang untuk terpotong dan melanjutkan ke baris berikutnya */
  text-align: justify;     /* Membuat teks rata kiri dan kanan */
  padding: 0 15px;         /* Memberikan padding kiri dan kanan */
}

/* Responsif untuk layar kecil (mobile) */
@media (max-width: 767px) {
  .container-deskripsi-lengkap .text-secondary {
    font-size: 18px;         /* Mengubah ukuran font menjadi lebih kecil di layar mobile */
    line-height: 1.4;        /* Menyesuaikan jarak antar baris */
    padding-left: 10px;      /* Padding kiri lebih kecil */
    padding-right: 10px;     /* Padding kanan lebih kecil */
  }
}

/* Memberikan efek transisi halus ketika elemen mendapatkan fokus */
.container-deskripsi-lengkap .text-secondary:hover {
  color: #0056b3; /* Mengubah warna teks saat di-hover */
  transition: color 0.3s ease-in-out;
}


/* Kontainer Gallery */
.container-gallery-compro {
  padding-top: 30px;       /* Memberikan jarak atas */
  padding-bottom: 30px;    /* Memberikan jarak bawah */
  max-width: 1140px;       /* Lebar maksimal kontainer mengikuti container Bootstrap */
  margin: 0 auto;          /* Menjaga kontainer tetap berada di tengah */
  text-align: center;      /* Menengahkan semua elemen di dalamnya */
}

/* Styling untuk gambar di dalam gallery */
.container-gallery-compro img {
  max-width: 100%;         /* Membuat gambar responsif */
  height: auto;            /* Menjaga rasio aspek gambar */
  padding: 0 15px;         /* Padding kiri dan kanan */
  border-radius: 10px;     /* Membuat sudut gambar membulat */
  transition: transform 0.3s ease; /* Efek transisi saat hover */
}

/* Efek hover untuk gambar */
.container-gallery-compro img:hover {
  transform: scale(1.05);  /* Efek zoom in saat dihover */
}

/* Responsif untuk layar kecil */
@media (max-width: 576px) {
  .container-gallery-compro {
    padding-left: 10px;      /* Padding kiri lebih kecil */
    padding-right: 10px;     /* Padding kanan lebih kecil */
  }

  .container-gallery-compro img {
    max-width: 90%;        /* Gambar mengisi hingga 90% dari lebar layar */
    margin: 0 auto;        /* Menjaga gambar tetap berada di tengah */
  }
}

/* Responsif untuk layar tablet */
@media (max-width: 768px) {
  .container-gallery-compro img {
    max-width: 100%;       /* Gambar memenuhi seluruh lebar kontainer */
  }
}




/* Styling untuk kontainer Vision */
.container-vision {
  display: block;
  max-width: 1129px;       /* Lebar maksimal untuk desktop */
  margin: 0 auto;          /* Memastikan kontainer berada di tengah */
  margin-top: 51px;        /* Jarak atas kontainer */     /* Padding atas */
  margin-bottom: 30px;    /* Padding bawah */
  padding: 10px;         /* Padding kiri dan kanan */
}

/* Judul Vision */
.vision-title {
  color: #5C5C5C;                        /* Warna teks */
  font-size: 32px;                       /* Ukuran font untuk desktop */
  font-family: 'Plus Jakarta Sans', sans-serif; /* Font */
  font-weight: 700;                      /* Ketebalan font */
  line-height: 38.40px;                  /* Jarak antar baris */
  word-wrap: break-word;                 /* Teks tidak keluar dari area kontainer */
  text-align: left;                    /* Menengahkan teks */
}

/* Deskripsi Vision */
.vision-description {
  color: #707070;                        /* Warna teks */
  font-size: 24px;                       /* Ukuran font untuk desktop */
  font-family: 'Plus Jakarta Sans', sans-serif; /* Font */
  font-style: italic;                    /* Gaya font miring */
  font-weight: 400;                      /* Ketebalan font */
  line-height: 28.80px;                  /* Jarak antar baris */
  word-wrap: break-word;                 /* Teks tidak keluar dari area kontainer */
  text-align: left;                    /* Menengahkan teks */
}


/* Responsif untuk tablet */
@media (max-width: 768px) {

  .vision-title {
    color: #5C5C5C;                        /* Warna teks untuk judul */
  font-size: 32px;                       /* Ukuran font */
  font-family: 'Plus Jakarta Sans', sans-serif; /* Font */
  font-weight: 700;                      /* Ketebalan font */
  line-height: 38.40px;                  /* Jarak antar baris */
  word-wrap: break-word;                 /* Memastikan teks tetap terpecah di tempat yang tepat */

  }

  .vision-description {
    margin: 0 auto;          /* Memastikan kontainer berada di tengah */
    font-size: 20px;         /* Ukuran font lebih kecil untuk deskripsi pada tablet */
    line-height: 26px;       /* Jarak antar baris */
  }
}

/* Styling untuk kontainer Vision */
.container-mission {
  display: block;
  max-width: 1129px;       /* Lebar maksimal untuk desktop */
  margin: 0 auto;          /* Memastikan kontainer berada di tengah */
  margin-top: 51px;        /* Jarak atas kontainer */     /* Padding atas */
  margin-bottom: 30px;    /* Padding bawah */
  padding: 10px;         /* Padding kiri dan kanan */
}

/* Judul mission */
.mission-title {
  color: #5C5C5C;                        /* Warna teks */
  font-size: 32px;                       /* Ukuran font untuk desktop */
  font-family: 'Plus Jakarta Sans', sans-serif; /* Font */
  font-weight: 700;                      /* Ketebalan font */
  line-height: 38.40px;                  /* Jarak antar baris */
  word-wrap: break-word;                 /* Teks tidak keluar dari area kontainer */
  text-align: left;                    /* Menengahkan teks */
}

/* Deskripsi mission */
.mission-description {
  color: #707070;                        /* Warna teks */
  font-size: 24px;                       /* Ukuran font untuk desktop */
  font-family: 'Plus Jakarta Sans', sans-serif; /* Font */
  font-style: italic;                    /* Gaya font miring */
  font-weight: 400;                      /* Ketebalan font */
  line-height: 28.80px;                  /* Jarak antar baris */
  word-wrap: break-word;                 /* Teks tidak keluar dari area kontainer */
  text-align: left;                    /* Menengahkan teks */
}


/* Responsif untuk tablet */
@media (max-width: 768px) {

  .mission-title {
    color: #5C5C5C;                        /* Warna teks untuk judul */
  font-size: 32px;                       /* Ukuran font */
  font-family: 'Plus Jakarta Sans', sans-serif; /* Font */
  font-weight: 700;                      /* Ketebalan font */
  line-height: 38.40px;                  /* Jarak antar baris */
  word-wrap: break-word;                 /* Memastikan teks tetap terpecah di tempat yang tepat */

  }

  .mission-description {
    margin: 0 auto;          /* Memastikan kontainer berada di tengah */
    font-size: 20px;         /* Ukuran font lebih kecil untuk deskripsi pada tablet */
    line-height: 26px;       /* Jarak antar baris */
  }
}



/* Section Board Of Director */
/* Kontainer utama */
.container-board-of-director {
  max-width: 1129px; /* Maksimal lebar kontainer untuk desktop */
  margin: 0 auto; /* Pusatkan kontainer */
  padding-top: 30px; /* Jarak atas */
  padding-bottom: 30px; /* Jarak bawah */
}

/* Judul */
.board-title {
  font-size: 32px; /* Ukuran font untuk desktop */
  font-weight: 700; /* Ketebalan font */
  color: #333; /* Warna teks */
}

/* Kartu direktur */
.director-card {
  height: 563px; /* Tinggi tetap untuk desktop */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan lembut */
  border-radius: 10px; /* Membulatkan sudut kartu */
  overflow: hidden; /* Memastikan konten tidak keluar dari kartu */
}

.director-card img {
  object-fit: cover; /* Memastikan gambar memenuhi kartu */
  object-position: center; /* Fokus pada tengah gambar */
}



/* RESPONSIF: Layar tablet kecil (max-width: 768px) */
@media (max-width: 768px) {
  .board-title {
    font-size: 28px; /* Ukuran font menengah untuk tablet */
  }

  .director-card {
    margin: 0 auto; /* Memastikan kartu berada di tengah */
    max-height: 395px; /* Tinggi kartu lebih kecil untuk tablet */
    max-width: 265px;
  }
}



/* Section Video Profile */
.video-profile {
  text-align: center;
}

/* Judul */
.video-profile .video-title {
  color: #45413E; /* Warna teks */
  font-size: 40px; /* Ukuran font */
  font-weight: 700; /* Ketebalan font */
  line-height: 48px; /* Tinggi baris */
  margin-bottom: 46px; /* Jarak bawah */
}

/* Video Wrapper */
.video-wrapper {
  width: 947px; /* Lebar video */
  height: 445px; /* Tinggi video */
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%);
  border-radius: 16px; /* Membuat sudut membulat */
  overflow: hidden;
  position: relative;
}

.video-wrapper iframe {
  width: 100%;
  height: 100%;
  border: none; /* Menghilangkan border iframe */
}

/* Responsif untuk Layar Kecil */
@media (max-width: 767px) {
  .video-wrapper {
    width: 100%; /* Penuh di layar kecil */
    height: auto; /* Tinggi menyesuaikan lebar */
    aspect-ratio: 947 / 445; /* Mempertahankan proporsi */
    margin: 0 auto; /* Memastikan video berada di tengah */
  }

  .video-title {
    font-size: 32px; /* Ukuran font lebih kecil */
    line-height: 40px; /* Tinggi baris lebih kecil */
  }
}


    </style>
</head>

<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')

 <!-- Company Profile Section -->
 <div class="company-profile-header">
    <!-- Overlay Hitam -->
    <div class="overlay"></div>
    <div class="container">
      <h1 class="company-profile-title">Company Profile</h1>
    </div>
  </div>


 <!-- Company Profile tentang -->
  <div class="container-tentang">
    <div class="row align-items-center">
      <!-- Logo -->
      <div class="col-12 col-md-auto text-center">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid" style="width: 200px; height: 100px;">
      </div>

      <!-- Deskripsi -->
      <div class="col-12 col-md text-center">
        <p class="description-text-tentang">
          "We are LOISTA, an interior design and furniture company focused on quality and innovation. Bringing Style and Excellence to Every Detail."
        </p>
      </div>
    </div>
  </div>



   <!-- Section Deskripsi Company Profile -->
   <div class="container-deskripsi-lengkap">
    <div class="text-secondary fs-5 fw-normal font-family-Plus Jakarta Sans m-0 px-3">
        As a renowned specialist in furniture and interior design, PT LO:ISTA Indonesia was established in 2011. With the tagline "Furniture &amp; Interior Design," we believe that every space reflects the unique touch of its owner. LOISTA is here to bring your dream concepts to life in every piece of furniture and interior design.
        <br>
        Our commitment is to consistently deliver excellent service with high-quality products that breathe new life and warmth into every space. PT LO:ISTA Indonesia prides itself on infusing a modern, exclusive touch into every product, from kitchens, living rooms, dining areas, bedrooms, and offices to decorative accessories.
        <br>
        To ensure the best service, PT LO:ISTA Indonesia operates a showroom in a strategic location in Tangerang. We offer comprehensive solutions for furniture, home interior design, and decoration to meet your creative needs.
    </div>
</div>



<div class="container-gallery-compro">
    <div class="row justify-content-center">
      <div class="col-auto">
        <img src="img/gale compro.png" alt="Gallery Image" class="img-fluid">
      </div>
    </div>
  </div>


  <div class="container-vision">
    <div class="row">
      <!-- Judul Vision -->
      <div class="col-12">
        <h2 class="vision-title">
          Our Vision
        </h2>
      </div>
      <!-- Deskripsi Vision -->
      <div class="col-12">
        <p class="vision-description">
          Becoming a benchmark in the furniture and interior industry by consistently delivering exceptional interior design services and creating high-quality products with international standards.
        </p>
      </div>
    </div>
  </div>





   <!-- Section Our mission -->
   <div class="container-mission">
    <div class="row">
      <!-- Judul Our mission -->
      <div class="col-12">
        <h2 class="mission-title">
          Our mission
        </h2>
      </div>
      <!-- Deskripsi Our mission -->
      <div class="col-12">
        <p class="mission-description">
            Continuously innovating by creating high-quality products and designs that can compete in both local and international markets.
        </p>
      </div>
    </div>
  </div>




 <!-- Section Board of Director -->
 <div class="container-board-of-director py-5 mt-5 text-center">
    <!-- Judul -->
    <h2 class="board-title mb-5">Board Of Director</h2>
    <div class="row justify-content-center">
      <!-- Card -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="director-card position-relative overflow-hidden rounded">
          <img src="img/director.png" alt="Director Photo" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>
  </div>






    <!-- Section Video Profile -->
  <section id="video-profile" class="py-5">
    <div class="container text-center">
      <!-- Judul -->
      <h2 class="video-title">
        Video Profile
      </h2>
      <!-- Video Embed -->
      <div class="video-wrapper mx-auto mt-4">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe>
      </div>
    </div>
  </section>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

        <!-- Menyertakan Navbar -->
        @include('components.footer')
</body>

</html>
