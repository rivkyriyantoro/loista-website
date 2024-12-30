<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Project</title>
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
    .text-responsive {
        font-size: 56px;
        font-weight: 700;
        line-height: 67.2px
    }

    /* Responsive font size for smaller screens */
    @media (max-width: 768px) {
        .text-responsive {
            font-size: 28px;
            line-height: 33.6px;
        }
    }
</style>

<body>
    @include('components.navbar')
    <div class="container mt-7">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-responsive">Our Project</h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row gy-4">
            <!-- Indosat -->
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/indosat.png')}}" alt="Indosat Logo" class="me-3 img-fluid" style="max-width: 50px;">
                        <p class="fs-5 fw-semibold mb-0">Indosat</p>
                    </div>
                    <a href="{{ route('OurProjectDetail') }}" class="btn">
                        <img src="{{asset('images/Keyboard arrow right.png')}}" alt="Arrow Right" style="width: 20px; height: 20px;">
                    </a>
                </div>
            </div>

            <!-- Carstensz -->
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/cartensz.png')}}" alt="Carstensz Logo" class="me-3 img-fluid" style="max-width: 50px;">
                        <p class="fs-5 fw-semibold mb-0">Carstensz</p>
                    </div>
                    <a href="#" class="btn">
                        <img src="{{asset('images/Keyboard arrow right.png')}}" alt="Arrow Right" style="width: 20px; height: 20px;">
                    </a>
                </div>
            </div>

            <!-- Grid Gym -->
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/gridgym.png')}}" alt="Grid Gym Logo" class="me-3 img-fluid" style="max-width: 50px;">
                        <p class="fs-5 fw-semibold mb-0">Grid Gym</p>
                    </div>
                    <a href="#" class="btn">
                        <img src="{{asset('images/Keyboard arrow right.png')}}" alt="Arrow Right" style="width: 20px; height: 20px;">
                    </a>
                </div>
            </div>

            <!-- JSI Glamping -->
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/jsiglamping.png')}}" alt="JSI Glamping Logo" class="me-3 img-fluid" style="max-width: 50px;">
                        <p class="fs-5 fw-semibold mb-0">JSI Glamping</p>
                    </div>
                    <a href="#" class="btn">
                        <img src="{{asset('images/Keyboard arrow right.png')}}" alt="Arrow Right" style="width: 20px; height: 20px;">
                    </a>
                </div>
            </div>

            <!-- Sandjong -->
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/sandjong.png')}}" alt="Sandjong Logo" class="me-3 img-fluid" style="max-width: 50px;">
                        <p class="fs-5 fw-semibold mb-0">Sandjong</p>
                    </div>
                    <a href="#" class="btn">
                        <img src="{{asset('images/Keyboard arrow right.png')}}" alt="Arrow Right" style="width: 20px; height: 20px;">
                    </a>
                </div>
            </div>

            <!-- Casa Domaine -->
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('images/casa.png')}}" alt="Casa Domaine Logo" class="me-3 img-fluid" style="max-width: 50px;">
                        <p class="fs-5 fw-semibold mb-0">Casa Domaine</p>
                    </div>
                    <a href="#" class="btn">
                        <img src="{{asset('images/Keyboard arrow right.png')}}" alt="Arrow Right" style="width: 20px; height: 20px;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
