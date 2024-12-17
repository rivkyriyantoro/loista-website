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
    <div class="row text-center mt-5">
        <!-- Step 1 -->
        <div class="col-12">
            <img src="{{ asset('images/Banner.png') }}" alt="Konsultasi" class="full-width-image">
        </div>
    </div>
    @include('components.footer')
</body>

</html>
