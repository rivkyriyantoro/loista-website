<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

        .breadcrumb {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 8px; /* Jarak antar item breadcrumb */
        }

        .breadcrumb-item a {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 14px;
        color: #707070;
        }

        .breadcrumb-item.active {
        font-weight: bold;
        color: #333333;
        }



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

        }
        .product-details {
            padding: 20px;
        
            border-radius: 10px;

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
            border-radius: 30px;
            font-weight: 700;
        }
        .btn-custom-2 {
            background-color: #838383;
            color: #000000;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            width: 100%;
            border-radius: 30px;
            font-weight: 700;
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


    <div class="container mt-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb d-flex justify-content-start align-items-center">
            <li class="breadcrumb-item text-nowrap">
              <a href="#" class="text-decoration-none text-muted">Product</a>
            </li>
            <li class="breadcrumb-item text-nowrap">
              <a href="#" class="text-decoration-none text-muted">Retails</a>
            </li>
            <li class="breadcrumb-item active text-nowrap" aria-current="page">
              Coffee Table
            </li>
          </ol>
        </nav>
      </div>




  <!-- Memuat CSS Bootstrap -->

    <div class="container mt-5">
        <div class="product-container">
            <div class="col-md-6">
                <img alt="Meja Ruang Keluarga Zupa Loista" class="product-image" src="images\products\image 9.jpg"/>
            </div>
            <div class="col-md-6 product-details">
                <div class="product-title">
                    Meja Ruang Keluarga Zupa Loista
                </div>
                <div class="product-sku">
                    SKU #F10101240001
                </div>
                <div class="product-price">
                    IDR 3,250,000
                </div>
                <div class="product-description">
                    <p>
                        Kami menjual dan menyediakan berbagai macam perabotan rumah tangga dengan kualitas terbaik di Indonesia dan tentunya dengan harga yang terjangkau. Salah satu produk terbaik kami adalah Kursi Makan Ohio Loista Indonesia. Silahkan hubungi kami jika anda tertarik dengan produk yang kami sediakan. Material: Fabric, Solidwood
                    </p>
                </div>
                <div class="product-specs">
                    <p>Ukuran : Dimensi : 60 x 60 x 75 cm</p>
                    <p>Bahan : Ceramic, Stainless Steel</p>
                </div>
                <button class="btn-custom">
                    Ask for Pricing
                </button>
                <button class="btn-custom-2">
                    See At Showroom
                </button>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="product-catalog" style="font-size: 32px; font-weight: 700">
            <p>
                Other product in the catalog
            </p>
        </div>
    </div>


    <div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4" style="bird">
        <div class="col">
          <div class="card h-100">
            <img src="images\products\image 2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="images\products\image 3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="images\products\image 4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
          </div>
        </div>
      </div>
    </div>







  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
