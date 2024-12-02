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




.carousel-inner .carousel-item img {
  width: 100%;      /* Gambar mengisi lebar kontainer */
  height: 456px;    /* Tinggi tetap 456px */
  object-fit: cover; /* Menjaga aspek rasio gambar dan mengisi kotak tanpa merusak proporsi */
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

/* section 1 mobile */








    </style>
</head>
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


        <div class="container-fluid d-flex justify-content-center align-items-center p-0">
            <div class="row w-100">
               <!-- Living Room Section -->
<div class="col-12" style="position: relative; height: 368.96px; max-width: 737px; padding-top: 272.77px; padding-bottom: 48.18px; padding-left: 42px; padding-right: 77.80px; overflow: hidden; margin: 0 auto;">
    <!-- Living Room Gambar -->
    <img src="https://images.unsplash.com/photo-1720048169987-2fd6bd1bf2b4?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Living Room" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">

    <!-- Overlay Hitam -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 2;"></div>

    <!-- Teks di Atas Gambar -->
    <div style="position: relative; z-index: 3; color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px;">
        Living Room
    </div>
</div>

<!-- Dining Room Section -->
<div class="col-12" style="position: relative; height: 368.96px; max-width: 737px; padding-top: 272.77px; padding-bottom: 48.18px; padding-left: 42px; padding-right: 77.80px; overflow: hidden; margin: 0 auto;">
    <!-- Dining Room Gambar -->
    <img src="https://images.unsplash.com/photo-1731370963535-aa6e57ed40f6?q=80&w=1884&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dining Room" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">

    <!-- Overlay Hitam -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 2;"></div>

    <!-- Teks di Atas Gambar -->
    <div style="position: relative; z-index: 3; color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px;">
        Dining Room
    </div>
</div>
 </div>



        <!-- Office Section (Penuh Lebar dengan padding) -->
        <div class="row w-100">
            <div class="col-12" style="position: relative; height: 100%; padding-top: 642px; padding-bottom: 48.46px; padding-left: 30px; padding-right: 100px; overflow: hidden; margin: 0 auto;">
                <!-- Gambar -->
                <img src="https://images.unsplash.com/photo-1719937206333-dceea3c5564d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Office" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">

                <!-- Overlay Hitam -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 2;"></div>

                <!-- Teks di Atas Gambar -->
                <div style="position: relative; z-index: 3; color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px;">
                    Office
                </div>
            </div>
        </div>

    </div>




    <div class="container d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <!-- Text Section (optional) -->
            <div class="col-12 text-center mb-4">
                <div style="color: #333333; font-size: 48px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 57.60px;">
                    Our Projects
                </div>
                <div style="color: #7A7474; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 600; line-height: 33.60px;">
                    100+ Completed Projects
                </div>
                <div style="color: #383434; font-size: 18px; font-family: Plus Jakarta Sans; font-weight: 600; line-height: 21.60px;">
                    Our projects are typically aimed at creating and customizing residential and commercial spaces, using our decades of expertise and creating ideas in the field of interface design.
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-12 d-flex justify-content-center" style="padding-top: 20px; padding-bottom: 20px;">
                <img style="width: 100%; max-width: 1040px; height: auto; border-radius: 8px;"
                     src="\img\section 88.png" />
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
