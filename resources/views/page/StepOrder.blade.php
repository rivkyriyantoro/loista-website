<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"rel="stylesheet">

</head>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .carousel-container {
        position: relative;
        margin: auto;
        max-width: 100%;
        overflow: visible;
        /* Allow overflow for previews */
    }

    .carousel-inner {
        position: relative;
        display: flex;
    }

    .carousel-item {
        flex: 0 0 60%;
        /* Adjust size of the active slide */
        margin: 0 20%;
        /* Create space for previews */
        transition: transform 0.6s ease-in-out;
    }

    .carousel-item img {
        border-radius: 15px;
        max-height: 300px;
        object-fit: cover;
    }

    .carousel-control-prev {
        left: 12.5%;
    }

    .carousel-control-next {
        right: 12.5%;
    }

    .carousel-preview {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 60%;
        /* Match size of the main slide */
        height: 300px;
        /* Match height of the main slide */
        overflow: hidden;
        z-index: 1;
        transition: transform 0.6s ease-in-out, opacity 0.6s ease-in-out;
    }

    .preview-left {
        left: -65%;
        /* Increase distance for preview */
    }

    .preview-right {
        right: -65%;
        /* Increase distance for preview */
    }

    .carousel-preview img {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        object-fit: cover;
        /* Prevent zoom effect */
        transform: scale(1);
        /* Default scale */
    }

    .carousel-item.active img {
        transform: scale(1);
        /* No zoom for active slide */
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
    <div class="container mt-5">
        <div class="carousel-container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                {{-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div> --}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/test-banner.jpeg') }}" class="d-block w-100" alt="Slide 1">
                        <div class="carousel-preview preview-left">
                            <img src="{{ asset('images/test-banner.jpeg') }}" alt="Preview 3">
                        </div>
                        <div class="carousel-preview preview-right">
                            <img src="{{ asset('images/test-banner.jpeg') }}" alt="Preview 2">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slide 1</h5>
                            <p>Description for Slide 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/test-banner.jpeg') }}" class="d-block w-100" alt="Slide 2">
                        <div class="carousel-preview preview-left">
                            <img src="{{ asset('images/test-banner.jpeg') }}" alt="Preview 1">
                        </div>
                        <div class="carousel-preview preview-right">
                            <img src="{{ asset('images/test-banner.jpeg') }}" alt="Preview 3">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slide 2</h5>
                            <p>Description for Slide 2.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/test-banner.jpeg') }}" class="d-block w-100" alt="Slide 3">
                        <div class="carousel-preview preview-left">
                            <img src="{{ asset('images/test-banner.jpeg') }}" alt="Preview 2">
                        </div>
                        <div class="carousel-preview preview-right">
                            <img src="{{ asset('images/test-banner.jpeg') }}" alt="Preview 1">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slide 3</h5>
                            <p>Description for Slide 3.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @include('components.footer')
</body>

</html>
