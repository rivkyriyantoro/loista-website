<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Project Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .mt-7 {
        margin-top: 8rem;
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

    .image-container {
        display: flex;
        gap: 15px;
        justify-content: center;
        align-items: center;
        overflow-x: auto;
        justify-content: flex-start;
    }

    .image-container img {
        width: 77px;
        height: 78px;
        border-radius: 5px;
        object-fit: cover;
    }

    .text-responsive {
        font-size: 32px;
        font-weight: 700;
        line-height: 38.4px
    }

    /* Responsive font size for smaller screens */
    @media (max-width: 768px) {
        .text-responsive {
            font-size: 28px;
            line-height: 33.6px;
        }
    }
    .text-content {
        text-align: left;
        font-size: 18px;
        font-weight: 400;
        line-height: 21.6px;
        /* Pusatkan teks */
        margin-top: 20px;
        /* Berikan jarak atas pada teks */
    }
    @media (max-width: 768px) {
        .text-content {
            font-size: 16px;
            line-height: 19.2px;
        }
    }
</style>

<body>
    @include('components.navbar')
    {{-- Section Indosat --}}
    <div class="container mt-7 mb-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/indosat.png') }}" alt="Indosat Logo" class="me-3 img-fluid"
                        style="max-width: 100px;">
                    <p class="fs-5 fw-semibold mb-0">Indosat</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Section Carousel --}}
    <div class="container mt-2 mb-3">
        <div class="col-12">
            <div id="horizontalCarousel" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner mt-0">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/Frame 763.png') }}" class="d-block w-100 img-fluid" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Frame 763.png') }}" class="d-block w-100 img-fluid" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Frame 763.png') }}" class="d-block w-100 img-fluid" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Frame 763.png') }}" class="d-block w-100 img-fluid" alt="Image 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Frame 763.png') }}" class="d-block w-100 img-fluid" alt="Image 5">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Frame 763.png') }}" class="d-block w-100 img-fluid" alt="Image 6">
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
    <div class="container mt-1 mb-3">
        <div class="row">
            <div class="col-12">
                <div class="image-container">
                    <img src="{{ asset('images/op1.png') }}" alt="Grid Image 1">
                    <img src="{{ asset('images/op2.png') }}" alt="Grid Image 2">
                    <img src="{{ asset('images/op3.png') }}" alt="Grid Image 3">
                    <img src="{{ asset('images/op4.png') }}" alt="Grid Image 4">
                    <img src="{{ asset('images/op5.png') }}" alt="Grid Image 5">
                    <img src="{{ asset('images/op6.png') }}" alt="Grid Image 6">
                    <img src="{{ asset('images/op7.png') }}" alt="Grid Image 6">
                    <img src="{{ asset('images/op8.png') }}" alt="Grid Image 6">
                    <img src="{{ asset('images/op9.png') }}" alt="Grid Image 6">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1 mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-responsive">Project: Indosat Office</h1>
                <h1 class="fw-bold text-responsive">Size: 500M²</h1>
                <h1 class="fw-bold text-responsive">Location: Kantor Indosat Jakarta Pusat</h1>
            </div>
            <div class="col-12 text-content">
                <p>
                    Untuk detail di atas bisa di atur dengan penulisan CMS The toppings you may chose for that TV dinner
                    pizza slice when you forgot to shop for foods, the paint you may slap on your face to impress the
                    new boss is your business. But what about your daily bread? Not so fast, I'd say, there are some
                    redeeming factors in favor of greeking text, as its use is merely the symptom of a worse problem to
                    take into consideration.
                </p>
                <p>
                    Design comps, layouts, wireframes—will your clients accept that you go about things the facile way?
                    Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no
                    no to forswear forever.
                </p>
                <p>
                    Design comps, layouts, wireframes—will your clients accept that you go about things the facile way?
                    Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no
                    no to forswear forever.
                </p>
                <p>
                    The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the
                    paint you may slap on your face to impress the new boss is your business. But what about your daily
                    bread? Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use
                    is merely the symptom of a worse problem to take into consideration.
                </p>
                <p>
                    Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is
                    merely the symptom of a worse problem to take into consideration.
                </p>
                <p>
                    Design comps, layouts, wireframes—will your clients accept that you go about things the facile way?
                    Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no
                    no to forswear forever.
                </p>
            </div>
        </div>
    </div>
    @include('components.footer')
</body>

</html>