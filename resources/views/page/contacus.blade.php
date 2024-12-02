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

  /* Mengatur font dan gaya untuk seluruh halaman */
  body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .title-section h4 {
        color: var(--Primary-Primary, #333); /* Menggunakan warna yang sudah ditentukan */
        font-family: 'jura', sans-serif; /* Menggunakan font Jura */
        font-size: 64px; /* Ukuran font */
        font-style: normal; /* Tidak menggunakan italic */
        font-weight: 600; /* Berat font tebal */
        line-height: 120%; /* Mengatur tinggi baris agar sesuai dengan desain (76.8px) */
        margin: 0; /* Menghilangkan margin agar lebih rapi */
    }

        /* Gaya untuk judul */
        .title-section h1 {
            color: #333333;
            font-size: 64px;
            font-weight: 700;
            line-height: 76.8px;
            margin: 0;
        }

        /* Gaya untuk teks paragraf */
        .text-box p {
            color: #383434;
            font-size: 18px;
            font-weight: 400;
            line-height: 21.6px;
            text-align: justify;
            margin-top: 20px;
        }

        /* Gaya untuk tombol "Hubungi Kami" */
        .btn-see-more {
            display: inline-block;
            background: #333333;
            color: #fafafa;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 28px;
            border-radius: 10px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn-see-more:hover {
            background: #ffcc00; /* Ganti dengan warna hover yang sesuai */
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
    </style>
</head>
<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')

    <!-- Konten Section 1 -->
    <div class="container section-1">
        <div class="row">
            <!-- Judul -->
            <div class="col-12 title-section">
                <h4>Design and Build</h4>
            </div>

            <!-- Kolom Teks dan Tombol -->
            <div class="col-lg-12 text-box">
                <p>Make your vision a reality with our Design and Build services. Do you have an idea for custom furniture tailored to your space needs? Our team is ready to help bring unique and functional designs to life, personalized to suit your preferences and lifestyle.<br><br>We offer a flexible consultation process, either online or in-person at our showroom. Get expert guidance to discover the best design solutions that meet high standards of quality and aesthetics.<br><br>Start your consultation now by contacting our Customer Service team or visit our showroom to experience it firsthand and speak with our design specialists.</p>
                <a href="#" class="btn-see-more">Hubungi Kami</a>
            </div>
        </div>
    </div>



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

     <!-- section 3 -->
     <div class="container section-2">
  <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 35px; display: inline-flex">
    <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 972px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
        <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Kitchen</div>
    </div>
    <div style="width: 1164px; height: 372px; padding-top: 272.77px; padding-bottom: 51.23px; padding-left: 42px; padding-right: 925px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
        <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Wardrobe</div>
    </div>
    <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 909px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
        <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">TV Cabinet</div>
    </div>
    <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 929px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
        <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Backdrop</div>
    </div>
    <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 1007px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
        <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Other</div>
    </div>
</div>
<div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 47px; display: inline-flex">
    <div style="align-self: stretch; height: 2000px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: flex">
        <div style="align-self: stretch; height: 2000px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 35px; display: flex">
            <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 972px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Kitchen</div>
            </div>
            <div style="width: 1164px; height: 372px; padding-top: 272.77px; padding-bottom: 51.23px; padding-left: 42px; padding-right: 925px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Wardrobe</div>
            </div>
            <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 909px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">TV Cabinet</div>
            </div>
            <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 929px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Backdrop</div>
            </div>
            <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 1007px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Other</div>
            </div>
        </div>
    </div>
    <div style="width: 1164px; justify-content: center; align-items: center; display: inline-flex">
        <div style="padding-left: 28px; padding-right: 28px; padding-top: 10px; padding-bottom: 10px; background: #333333; border-radius: 10px; justify-content: center; align-items: center; gap: 6px; display: inline-flex">
            <div style="color: #FAFAFA; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 600; line-height: 16.80px; word-wrap: break-word">See other</div>
        </div>
    </div>
    <div style="align-self: stretch; height: 1677px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: flex">
        <div style="align-self: stretch; color: #333333; font-size: 64px; font-family: Jura; font-weight: 700; line-height: 76.80px; word-wrap: break-word">Retails</div>
        <div style="align-self: stretch; height: 1572px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: flex">
            <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 1031px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Sofa</div>
            </div>
            <div style="width: 1164px; height: 372px; padding-top: 272.77px; padding-bottom: 51.23px; padding-left: 42px; padding-right: 998px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Bench</div>
            </div>
            <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 874px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Coffee Table</div>
            </div>
            <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 923px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
                <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Side Table</div>
            </div>
        </div>
    </div>
    <div style="width: 1164px; justify-content: center; align-items: center; display: inline-flex">
        <div style="padding-left: 28px; padding-right: 28px; padding-top: 10px; padding-bottom: 10px; background: #333333; border-radius: 10px; justify-content: center; align-items: center; gap: 6px; display: inline-flex">
            <div style="color: #FAFAFA; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 600; line-height: 16.80px; word-wrap: break-word">See other</div>
        </div>
    </div>
</div>
     </div>



  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
