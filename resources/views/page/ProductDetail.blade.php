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
            gap: 8px;
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


        .title-section h1 {
            color: #333333;
            font-size: 64px;
            font-weight: 700;
            line-height: 76.8px;
            margin: 0;
        }


        .text-box p {
            color: #383434;
            font-size: 18px;
            font-weight: 400;
            line-height: 21.6px;
            text-align: justify;
            margin-top: 20px;
        }



        .overlay-container {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
        }


        .overlay-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
            transition: opacity 0.3s ease;
        }


        .overlay-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }


        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 2;
        }

        .overlay-text h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .overlay-text p {
            font-size: 1.25rem;
        }


        .grid-item {
            font-family: 'M PLUS 2 Variable', sans-serif;
            background-color: lightgray;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
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

    
    </style>
</head>
<body>
    <!-- Menyertakan Navbar -->
    {{-- @include('components.navbar') --}}

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


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="images/products/image 9.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6">
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
        <div class="row">
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card">
                    <img src="images/products/image 9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card">
                    <img src="images/products/image 9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card">
                    <img src="images/products/image 9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card">
                    <img src="images/products/image 9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card">
                    <img src="images/products/image 9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card">
                    <img src="images/products/image 9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
        </div>


      </div>

    <!-- Menyertakan Navbar -->
    @include('components.footer')
</body>
</html>
