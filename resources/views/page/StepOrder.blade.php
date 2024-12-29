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

    .carousel {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
    }

    .carousel-slide {
        flex: 0 0 80%;
        /* Active slide takes 80% of the carousel width */
        margin: 0 1%;
        /* Add space for previews on both sides */
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 400px;
        opacity: 0.5;
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .carousel-slide.active {
        opacity: 1;
    }

    .carousel-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 0;
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        /* width: 100%; */
        left: 110px;
        right: 110px;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .carousel-btn {
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 50%;
        cursor: pointer;
    }

    .carousel-btn:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    @media (max-width: 768px) {
        .carousel {
            max-width: 90%;
        }

        .carousel-slide {
            flex: 0 0 80%;
            height: 300px;
        }

        .carousel-nav {
            left: 20px;
            right: 20px;
        }
    }

    @media (max-width: 576px) {
        .carousel {
            max-width: 100%;
        }

        .carousel-slide {
            flex: 0 0 80%;
            height: 250px;
        }

        .carousel-nav {
            left: 10px;
            right: 10px;
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
        <div class="carousel">
            <div class="carousel-track">
                <div class="carousel-slide">
                    <img src="{{ asset('images/test-banner.jpeg') }}" alt="Slide 1">
                </div>
                <div class="carousel-slide">
                    <img src="{{ asset('images/test-banner.jpeg') }}" alt="Slide 2">
                </div>
                <div class="carousel-slide">
                    <img src="{{ asset('images/test-banner.jpeg') }}" alt="Slide 3">
                </div>
            </div>
            <div class="carousel-nav">
                <button class="carousel-btn" id="prevBtn">&#9664;</button>
                <button class="carousel-btn" id="nextBtn">&#9654;</button>
            </div>
        </div>
    </div>

    <script>
        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 1;
        let isTransitioning = false;

        const updateCarousel = () => {
            const slideWidth = slides[0].getBoundingClientRect().width;
            const carouselWidth = document.querySelector('.carousel').clientWidth;
            // const totalSlides = slides.length;

            // Shift active slide slightly to the left to reduce empty space on the right
            const trackPosition = -(currentIndex * (slideWidth + carouselWidth * 0.03)) + carouselWidth * 0.1;
            track.style.transform = `translateX(${trackPosition}px)`;

            // Reset and highlight active and preview slides
            slides.forEach((slide, index) => {
                slide.style.opacity = "0.5";

                if (index === currentIndex) {
                    slide.classList.add('active');
                    slide.style.opacity = "1";
                } else {
                    slide.classList.remove('active');
                }
            });
        };

        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % slides.length;
            if (currentIndex === 1) currentIndex = 1; // Ensure it loops back to slide 2
            updateCarousel();
        };

        const prevSlide = () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            if (currentIndex === 1) currentIndex = slides.length - 1; // Ensure it loops back to slide 2
            updateCarousel();
        };

        prevBtn.addEventListener('click', () => {
            prevSlide(); // Panggil fungsi untuk memindahkan slide sebelumnya

            // Pastikan transisi tetap berlaku
            track.style.transition = "transform 0.5s ease-in-out";

            // Tunggu transisi selesai, lalu atur ulang elemen
            setTimeout(() => {
                track.style.transition = "none"; // Matikan transisi sementara

                const lastSlide = slides.pop(); // Ambil slide terakhir
                slides.unshift(lastSlide); // Pindahkan slide terakhir ke awal
                track.insertBefore(lastSlide, track.firstChild); // Atur ulang di DOM

                currentIndex = 1; // Reset indeks
                updateCarousel(); // Perbarui tampilan carousel
            }, 500); // Tetap berlaku 500ms meskipun tombol diklik berkali-kali
        });

        nextBtn.addEventListener('click', () => {
            nextSlide(); // Panggil fungsi untuk memindahkan slide berikutnya

            // Pastikan transisi tetap berlaku
            track.style.transition = "transform 0.5s ease-in-out";

            // Tunggu transisi selesai, lalu atur ulang elemen
            setTimeout(() => {
                track.style.transition = "none"; // Matikan transisi sementara

                const firstSlide = slides.shift(); // Ambil slide pertama
                slides.push(firstSlide); // Pindahkan slide pertama ke akhir
                track.appendChild(firstSlide); // Atur ulang di DOM

                currentIndex = 1; // Reset indeks
                updateCarousel(); // Perbarui tampilan carousel
            }, 500); // Tetap berlaku 500ms meskipun tombol diklik berkali-kali
        });

        // Automatically initialize carousel
        updateCarousel();
    </script>



    @include('components.footer')
</body>

</html>
