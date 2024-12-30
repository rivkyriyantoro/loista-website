<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .mt-7 {
        margin-top: 8rem;
    }

    .contact-info {
        margin-bottom: 2rem;
    }

    .social-icons a {
        color: #000;
        font-size: 1.5rem;
        margin-right: 10px;
    }

    .map-container img {
        width: 100%;
        height: auto;
    }

    .btn-custom {
        background-color: #000;
        color: #fff;
        border-radius: 20px;
        padding: 0.5rem 1.5rem;
        white-space: nowrap;
        text-decoration: none;
    }

    .text {
        font-size: 14px;
        font-weight: 400;
        line-height: 16.8px;
    }

    .text-contact {
        font-family: Jura;
        font-size: 96px;
        font-weight: 700;
        line-height: 115.2px;
    }
    @media (max-width: 768px) {
        .text-contact {
            font-size: 40px;
            line-height: 48px;
        }
    }
</style>

<body>
    @include('components.navbar')
    <div class="container mt-7 mb-3 text-left">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-contact">Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="container mt-2 mb-3">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-6 mb-4">
                <h4>Have a question or need assistance?</h4>
                <p>We’re here to help! Fill out the form below, and our team will get back to you with the best
                    solution.</p>
                <p><strong>We’re here for you!</strong></p>
                <p>Monday – Friday: 9 am – 8 pm<br>Saturday – Sunday: 10 am – 7 pm</p>

                <div class="contact-info">
                    <p>
                        <i class="bx bx-phone"></i> 02150986988
                    </p>
                    <p>
                        <i class='bx bx-envelope'></i> customercare@loista.com
                    </p>
                    <p>
                        <i class='bx bxl-whatsapp'></i> WhatApp Chat
                    </p>
                </div>

                <div class="social-icons">
                    <h5>Connect with us on social media:</h5>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Office Section -->
            <div class="col-md-6 mb-4">
                <div class="border rounded p-3 shadow-sm">
                    <h5>Office</h5>
                    <div class="map-container">
                        <img src="{{ asset('images/map1.png') }}" alt="Office Map" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                        <p class="text mb-2 mb-md-0">Jl. Padat Karya No.33 B, Curug Kulon, Kec. Curug, Kabupaten Tangerang, Banten
                            15810</p>
                        <a href="#" class="btn-custom">Take me there</a>
                    </div>
                </div>
            </div>

            <!-- Showroom Section -->
            <div class="col-md-6 offset-md-6">
                <div class="border rounded p-3 shadow-sm">
                    <h5>Showroom</h5>
                    <div class="map-container">
                        <img src="{{ asset('images/map2.png') }}" alt="Showroom Map" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                        <p class="text mb-2 mb-md-0">
                            Jl. Gading Serpong Boulevard Barat No.6 - 7 Blok S, Curug Sangereng, Kec.
                            Serpong,<br>Kabupaten Tangerang, Banten 15810
                        </p>
                        <a href="#" class="btn-custom">Take me there</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('components.footer')
</body>

</html>
