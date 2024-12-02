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
 .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .product-details {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .product-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        .product-sku {
            font-size: 16px;
            color: #888;
            margin-top: 10px;
        }
        .product-price {
            font-size: 24px;
            font-weight: bold;
            margin-top: 15px;
            color: #333;
        }
        .product-description {
            margin-top: 20px;
        }
        .product-description p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
        }
        .product-specs {
            margin-top: 20px;
            font-size: 16px;
            color: #444;
        }
        .btn-custom {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            width: 100%;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
        }
        .btn-custom-2 {
            background-color: #838383;
            color: #fff;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            width: 100%;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #555;
        }
        .product-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .col-md-6 {
            width: 48%;
        }
        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                align-items: center;
            }
            .col-md-6 {
                width: 100%;
                margin-bottom: 20px;
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

        /* Responsif untuk Section 2 */
        @media (max-width: 991px) {
            .section-2 .row {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')


  <!-- section 1 -->
  <div class="banner-1">
    <div style="width: 100%; height: 100%; padding-top: 141px; padding-bottom: 44px; padding-left: 20px; padding-right: 20px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); display: flex; justify-content: flex-start; align-items: center;">
        <div style="color: #FAFAFA; font-size: 56px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 67.20px; word-wrap: break-word; text-align: left; width: 100%;">
            Company Profile
        </div>
    </div>
</div>


  <!-- section 2 -->

    <div class="container mt-5" style="padding-bottom: 440px;">
        <div class="row align-items-center">
            <!-- Logo and Title Section -->
            <div class="col-md-6 text-center text-md-start">
                <div style="font-size: 48px; font-weight: 700; color: #25211E; font-family: Plus Jakarta Sans, sans-serif;">
                    LOISTA
                </div>
            </div>

            <!-- Description Section -->
            <div class="col-md-6 text-center text-md-end">
                <div style="font-size: 24px; font-style: italic; color: #474747; font-family: Plus Jakarta Sans, sans-serif; line-height: 33.6px; word-wrap: break-word;">
                    "We are LOISTA, an interior design and furniture company focused on quality and innovation. Bringing Style and Excellence to Every Detail."
                </div>
            </div>
        </div>


  <!-- section 3 -->

    <div class="container section-3">
        <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 14px; display: inline-flex">

            <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">

                <img style="width: 244px; height: 391px; position: relative; background: linear-gradient(0deg, #7E7878 0%, #7E7878 100%)" src="https://via.placeholder.com/244x391" />
            </div>
            <div style="align-self: stretch; height: 290px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                <div style="align-self: stretch; color: #707070; font-size: 24px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 28.80px; word-wrap: break-word">As a renowned specialist in furniture and interior design, PT LO:ISTA Indonesia was established in 2011. With the tagline "Furniture & Interior Design," we believe that every space reflects the unique touch of its owner. LOISTA is here to bring your dream concepts to life in every piece of furniture and interior design.<br/>Our commitment is to consistently deliver excellent service with high-quality products that breathe new life and warmth into every space. PT LO:ISTA Indonesia prides itself on infusing a modern, exclusive touch into every product, from kitchens, living rooms, dining areas, bedrooms, and offices to decorative accessories.<br/>To ensure the best service, PT LO:ISTA Indonesia operates a showroom in a strategic location in Tangerang. We offer comprehensive solutions for furniture, home interior design, and decoration to meet your creative needs.</div>
            </div>
        </div>
    </div>


      <!-- section 4 -->


    <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
        <div style="align-self: stretch; color: #5C5C5C; font-size: 32px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Our Vision </div>
        <div style="align-self: stretch; color: #707070; font-size: 24px; font-family: Plus Jakarta Sans; font-style: italic; font-weight: 400; line-height: 28.80px; word-wrap: break-word">Becoming a benchmark in the furniture and interior industry by consistently delivering exceptional interior design services and creating high-quality products with international standards.</div>
    </div>


      <!-- section 5 -->

    <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
        <div style="align-self: stretch; color: #5C5C5C; font-size: 32px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Our Mission</div>
        <div style="align-self: stretch; color: #707070; font-size: 24px; font-family: Plus Jakarta Sans; font-style: italic; font-weight: 400; line-height: 28.80px; word-wrap: break-word">Continuously innovating by creating high-quality products and designs that can compete in both local and international markets.</div>
    </div>


  <!-- section 6 -->

    <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; gap: 33px; display: inline-flex">
        <div style="align-self: stretch; text-align: center; color: #45413E; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word"> Board Of Director</div>
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 17px; display: inline-flex">
            <div style="width: 377px; height: 563px; padding-left: 56px; padding-right: 56px; padding-top: 34px; padding-bottom: 34px; background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, black 100%); border-radius: 16px; overflow: hidden; flex-direction: column; justify-content: flex-end; align-items: center; gap: 10px; display: inline-flex">
                <div style="align-self: stretch; height: 103px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: flex">
                    <div style="align-self: stretch; text-align: center; color: #FAFAFA; font-size: 32px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 38.40px; word-wrap: break-word">Ir. Atma Gita Darma, M.Pd.</div>
                    <div style="text-align: center; color: #FAFAFA; font-size: 14px; font-family: Plus Jakarta Sans; font-style: italic; font-weight: 400; line-height: 16.80px; word-wrap: break-word">Director</div>
                </div>
            </div>
        </div>
    </div>


    <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; gap: 46px; display: inline-flex">
        <div style="align-self: stretch; text-align: center; color: #45413E; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Video Profile</div>
        <div style="width: 947px; height: 448px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: center; align-items: center; display: inline-flex">
            <div style="width: 96px; height: 96px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="width: 96px; height: 96px"></div>
                <div style="width: 80px; height: 80px; opacity: 0.72; background: #FAFAFA"></div>
            </div>
        </div>
    </div>









  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
