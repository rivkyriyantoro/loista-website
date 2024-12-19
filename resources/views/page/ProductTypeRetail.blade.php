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

        .overlay-container {
            position: relative;
            width: 100%;
            height: 23.25rem;
            margin-bottom: 20px;
            overflow: hidden;


        }

        .overlay-image {
            width: 100%;
            height: 100%;
            object-fit: cover;  /* Menyesuaikan gambar dengan baik */
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
            background: rgba(0, 0, 0, 0.5);  /* Overlay gelap */
            z-index: 1;
        }

        /* Teks overlay */
        .overlay-text1 h2 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            z-index: 2;
            text-align: left;
            width: 90%;
            word-wrap: break-word;
        }

        /* Grid container untuk gambar */
        .Retails {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding-bottom: 40px;
            justify-content: center;  /* Menyusun gambar di tengah */
        }

        .responsive-breadcrumb {
            color: #707070;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 400;
            word-wrap: break-word;
            width: 100%;
            padding-bottom: 45px;
            display: flex;
            justify-content: left;
        }

        .responsive-text-h1 {
            width: 100%;
            height: 100%;
            color: #333;
            font-family: 'Jura', sans-serif;
            font-weight: 700;
            text-align: left;
            font-size: 64px;  /* Ukuran default untuk desktop */
        }






@media (max-width: 768px) {

    .overlay-text1 h2 {
        font-size: 30px;
    }
    .responsive-breadcrumb {
        padding-bottom: 0px;
        font-size: 14px
    }

    .responsive-text-h1{
        font-size: 37px
    }
    .overlay-container {
        height: 12.5rem;
    }
}


/* Responsif untuk mobile (<768px) */
@media (max-width: 767px) {
    .overlay-text1 h2 {
        font-size: 18px;
        height: 0.5rem;
    }

    .responsive-breadcrumb {
        font-size: 12px
        padding-bottom: 10px
    }
    .responsive-text-h1{

        font-size: 28px
    }
    .overlay-container {
    height: 7.375rem;
    }
}









    </style>
</head>
<body>

    {{-- <!-- Menyertakan Navbar -->
    @include('components.navbar') --}}

    <!-- section 3 -->
    <div class="container mt-5">
        <div class="row text-start">
            <!-- Breadcrumb -->
            <div class="col-12">
                <div class="responsive-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Retail</li>
                    </ol>
                </div>
            </div>

            <!-- Title aligned to the left -->
            <div class="col-12">
                <div class="responsive-container">
                    <p class="responsive-text-h1">Retails</p>
                </div>
            </div>
        </div>


        <div class="col-12">
                <div class="overlay-container">
                    <img class="overlay-image" src="https://images.unsplash.com/photo-1683181181300-44c0c991a2cf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Wardrobe">
                    <div class="fw-bold overlay-text1">
                        <h2>Sofa</h2>
                    </div>
                </div>
                <!-- TV Cabinet -->
                <div class="overlay-container">
                    <img class="overlay-image" src="https://images.unsplash.com/photo-1678874956092-6d9dc8b766bf?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TV Cabinet">
                    <div class=" fw-bold overlay-text1">
                        <h2>Bench</h2>
                    </div>
                </div>

                <!-- Backdrop -->
                <div class="overlay-container">
                    <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Backdrop">
                    <div class="fw-bold overlay-text1">
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
        </div>
    </div>





    <!-- Menyertakan Footer -->
    @include('components.footer')

</body>
</html>
