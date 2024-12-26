<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .carousel-item img {
        width: 100%;
        /* Full width */
        height: 551px;
        /* Maintain aspect ratio */
        object-fit: cover;
        /* Ensure images fill the container properly */
    }

    @media (max-width: 768px) {
        .carousel .carousel-item img {
            max-height: 200px;
            /* Set maximum height for images */
            object-fit: cover;
            /* Ensure images cover without distorting */
        }
    }

    /* Larger screens adjustments */
    @media (min-width: 769px) {
        .carousel .carousel-item img {
            max-height: 400px;
            /* Larger height for bigger screens */
            object-fit: cover;
        }
    }

    .mt-7 {
        margin-top: 8rem;
    }

    .text-responsive {
        line-height: 48px;
        font-size: 40px;
        /* Default font size for larger screens */
        font-weight: 700;
    }

    /* Responsive font size for smaller screens */
    @media (max-width: 768px) {
        .text-responsive {
            font-size: 20px;
            line-height: 24px;
        }
    }

    .txt-content {
        line-height: 19.2px;
        font-size: 16px;
        /* Default font size for larger screens */
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .txt-content {
            font-size: 14px;
            line-height: 16.8px;
        }
    }

    .full-width-image {
        width: 100vw;
        /* Mengambil lebar penuh layar */
        height: auto;
        /* Menjaga proporsi gambar */
        object-fit: cover;
        /* Memastikan gambar ter-cover penuh tanpa distorsi */
    }
</style>

<body>
    @include('components.navbar')
    <div class="container mt-7 mb-3">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold mb-5 text-center text-responsive">Easily Order Furniture</h1>
                <p class="text-center txt-content">Rasakan kemudahan dalam memesan furniture berkualitas. Ikuti
                    langkah-langkah sederhana kami, dan wujudkan impian ruang Anda tanpa ribet!Mulai langkah pertama
                    Anda hari ini dan lihat bagaimana kami membantu Anda menemukan dan membawa pulang furniture yang
                    sempurna.</p>
            </div>
        </div>
    </div>
    <div class="container mt-2 mb-3">
        <div class="col-12">
            <div id="horizontalCarousel" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner mt-0">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/Banner.png') }}" class="d-block w-100 img-fluid" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Banner.png') }}" class="d-block w-100 img-fluid" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Banner.png') }}" class="d-block w-100 img-fluid" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Banner.png') }}" class="d-block w-100 img-fluid" alt="Image 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Banner.png') }}" class="d-block w-100 img-fluid" alt="Image 5">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Banner.png') }}" class="d-block w-100 img-fluid" alt="Image 6">
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#horizontalCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#horizontalCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    @include('components.footer')
</body>

</html>
