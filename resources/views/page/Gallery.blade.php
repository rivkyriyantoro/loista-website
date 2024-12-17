<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;700&display=swap" rel="stylesheet">
    x<link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
    .text-responsive {
        font-family: Jura;
        font-size: 96px;
        font-weight: 700;
        line-height: 115.2px;
    }

    @media (max-width: 768px) {
        .text-responsive {
            font-size: 40px;
            line-height: 48px;
        }
    }

    .custom-gap {
        --bs-gutter-x: 7px;
        /* Gap horizontal */
        --bs-gutter-y: 7px;
        /* Gap vertikal */
    }

    .custom-gap img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination button {
        border: none;
        background: #FFFFFF;
        color: #333;
        margin: 0 5px;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .pagination button:not([disabled]):hover {
        background-color: #F0F0F0;
        color: #333;
    }

    .pagination button.active {
        background-color: #FAFAFA;
        color: #0B0A0A;
        border: 1px solid #CFCECE;
        pointer-events: none;
    }

    .bg-custom-gray {
        background-color: #C9C9C9;
    }

    .btn-custom {
        border-radius: 6px;
    }

    .mt-7 {
        margin-top: 8rem;
    }
</style>

<body>
    @include('components.navbar')

    <div class="container mt-7 mb-3 text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-responsive">Gallery</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row g-2 custom-gap" id="gallery-container">
            <!-- Gambar akan dimuat di sini oleh JavaScript -->
        </div>
        <div class="pagination-container">
            <div class="pagination" id="pagination">
                <button style="background-color: #333333; color: #FAFAFA;" id="prev" disabled>
                    <i class="mdi mdi-chevron-left"></i>
                </button>
                <!-- Page numbers will be inserted dynamically here -->
                <button style="background-color: #333333; color: #FAFAFA;" id="next">
                    <i class="mdi mdi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-custom-gray py-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Text Content -->
                <div class="col-12 col-md-8 ps-3 ps-md-5">
                    <h5 class="fw-bold mb-2 text-center text-md-start">Contact us for more info</h5>
                    <p class="text-secondary mb-0 text-center text-md-start">
                        Be the first to get update the latest news, special offers, new products and other promotion
                    </p>
                </div>
                <!-- Button -->
                <div class="col-12 col-md-4 text-center text-md-end mt-3 mt-md-0 ps-3 ps-md-5 pe-3 pe-md-5">
                    <a href="https://wa.me/123456789" target="_blank" class="btn btn-dark btn-custom px-4 py-2">
                        Contact Via Whatsapp
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script>
        const images = [
            'images/Frame 761.png', 'images/Frame 761.png', 'images/Frame 761.png',
            'images/Frame 761.png', 'images/Frame 761.png', 'images/Frame 761.png',
            'images/Frame 761.png', 'images/Frame 761.png', 'images/Frame 761.png'
        ];

        const itemsPerPage = 6; // 6 gambar per halaman
        let currentPage = 1;
        const totalPages = Math.ceil(images.length / itemsPerPage);

        // Tampilkan gambar sesuai halaman
        function displayImages(page) {
            const galleryContainer = document.getElementById('gallery-container');
            galleryContainer.innerHTML = '';

            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            const paginatedImages = images.slice(start, end);

            paginatedImages.forEach((image, index) => {
                const col = document.createElement('div');
                col.className = 'col-6 col-lg-4'; // 2 kolom di mobile, 3 kolom di laptop
                col.innerHTML = `
                <img src="${image}" alt="Image" class="img-fluid" style="cursor: pointer;">`;

                // Tambahkan event listener untuk berpindah ke halaman detail
                col.querySelector('img').addEventListener('click', () => {
                    const imageId = start + index + 1; // ID gambar
                    window.location.href = `/gallery/${imageId}`; // Arahkan ke route Laravel
                });

                galleryContainer.appendChild(col);
            });
        }

        // Konfigurasi pagination
        function setupPagination() {
            const paginationContainer = document.getElementById('pagination');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');

            // Hapus nomor halaman lama
            const existingButtons = document.querySelectorAll('.pagination .page-number');
            existingButtons.forEach(button => button.remove());

            // Tambahkan nomor halaman
            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.className = `page-number ${i === currentPage ? 'active' : ''}`;
                button.textContent = i;
                button.addEventListener('click', () => {
                    currentPage = i;
                    updatePagination();
                });
                nextButton.before(button);
            }

            // Update tombol prev dan next
            prevButton.disabled = currentPage === 1;
            nextButton.disabled = currentPage === totalPages;

            prevButton.onclick = () => {
                if (currentPage > 1) currentPage--;
                updatePagination();
            };

            nextButton.onclick = () => {
                if (currentPage < totalPages) currentPage++;
                updatePagination();
            };
        }

        // Update tampilan
        function updatePagination() {
            displayImages(currentPage);
            setupPagination();
        }

        // Inisialisasi pertama kali
        updatePagination();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    @include('components.footer')
</body>

</html>
