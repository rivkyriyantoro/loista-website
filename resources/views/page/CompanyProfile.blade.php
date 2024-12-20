<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>

        .company-profile-header {
            height: 372px;
            background-image: url('https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .company-profile-header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .company-profile-header .company-profile-title {
            color: #FAFAFA;
            font-size: 56px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            position: absolute;
            bottom: 44px;
            left: 20px;
            z-index: 2;
        }

        @media (max-width: 992px) {
            .company-profile-header {
                height: 200px;
            }

            .company-profile-header .company-profile-title {
                font-size: 36px;
                bottom: 30px;
            }
        }


        .description-text {
            color: #474747;
            font-size: 28px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-style: italic;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
        }

        .container-tentang {
            padding: 62px 15px;
            max-width: 1129px;
            margin: 0 auto;
        }

        .description-text-tentang {
            color: var(--Primary-Primary900, #474747);
            font-family: "Plus Jakarta Sans";
            font-size: 28px;
            font-style: italic;
            font-weight: 400;
            line-height: 120%;
        }

        @media (max-width: 768px) {
            .description-text-tentang {
                font-size: 16px;
            }
        }

        .container-gallery-compro img {
            max-width: 100%;
        }


        .container-vision,
        .container-mission {
            max-width: 1129px;
            margin: 0 auto;
            padding: 30px 15px;
        }

        .vision-title,
        .mission-title {
            color: var(--Primary-Primary800, #5C5C5C);
            font-family: "Plus Jakarta Sans";
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%;
        }

        .vision-description,
        .mission-description {
            color: var(--Primary-Primary700, #707070);
            font-family: "Plus Jakarta Sans";
            font-size: 24px;
            font-style: italic;
            font-weight: 400;
            line-height: 120%;
                }

        @media (max-width: 768px) {
            .vision-title,
            .mission-title {
                font-size: 24px;
            }

            .vision-description,
            .mission-description {
                font-size: 18px;
            }
        }


        .container-board-of-director {
            max-width: 1129px;
            margin: 0 auto;
            padding: 30px 15px;
        }

        .board-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .director-card img {
            max-width: 100%;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .board-title {
                font-size: 28px;
            }

            .director-card img {
                max-width: 90%;
            }
        }


        .video-profile .video-title {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .video-wrapper {
            border-radius: 16px;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .video-profile .video-title {
                font-size: 32px;
            }

            .video-wrapper {
                height: auto;
            }
        }

        .deskripsi-lengkap {
            max-width: 1129px;

        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="company-profile-header">
        <div class="overlay"></div>
        <h1 class="company-profile-title">Company Profile</h1>
    </div>

    <!-- Tentang Section -->
    <div class="container-tentang">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="img/logo.png" alt="Logo" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="description-text-tentang">
                    "We are LOISTA, an interior design and furniture company focused on quality and innovation."
                </p>
            </div>
        </div>
    </div>

     <!-- Section Deskripsi Company Profile -->
   <div class="container deskripsi-lengkap">
    <div class="text-secondary fs-5 fw-normal font-family-Plus Jakarta Sans m-0">
        As a renowned specialist in furniture and interior design, PT LO:ISTA Indonesia was established in 2011. With the tagline "Furniture &amp; Interior Design," we believe that every space reflects the unique touch of its owner. LOISTA is here to bring your dream concepts to life in every piece of furniture and interior design.
        <br>
        Our commitment is to consistently deliver excellent service with high-quality products that breathe new life and warmth into every space. PT LO:ISTA Indonesia prides itself on infusing a modern, exclusive touch into every product, from kitchens, living rooms, dining areas, bedrooms, and offices to decorative accessories.
        <br>
        To ensure the best service, PT LO:ISTA Indonesia operates a showroom in a strategic location in Tangerang. We offer comprehensive solutions for furniture, home interior design, and decoration to meet your creative needs.
    </div>
</div>


    <!-- Vision Section -->
    <div class="container-vision">
        <h2 class="vision-title">Our Vision</h2>
        <p class="vision-description">
            Becoming a benchmark in the furniture and interior industry by consistently delivering exceptional services.
        </p>
    </div>

    <!-- Mission Section -->
    <div class="container-mission">
        <h2 class="mission-title">Our Mission</h2>
        <p class="mission-description">
            Continuously innovating by creating high-quality products and designs that compete globally.
        </p>
    </div>

    <!-- Gallery Section -->
    <div class="container-gallery-compro text-center">
        <img src="img\gale compro.png" alt="Gallery Image">
    </div>

    <!-- Board of Director Section -->
    <div class="container-board-of-director text-center">
        <h2 class="board-title">Board Of Director</h2>
        <div class="director-card">
            <img src="img/director.png" alt="Director Photo">
        </div>
    </div>

    <!-- Video Profile Section -->
    <section class="video-profile text-center">
        <h2 class="video-title">Video Profile</h2>
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
