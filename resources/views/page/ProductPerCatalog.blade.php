<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProductPerCatalog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>

.content-wrapper {
  width: 100%;
  height: 100%;
  padding-top: 128px;
  padding-bottom: 129px;
  padding-left: 279px;
  padding-right: 278px;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%);
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Gaya untuk teks judul */
.title-CF {
  color: #FCFBFA;
  font-size: 96px;
  font-family: 'Jura', sans-serif;
  font-weight: 700;
  line-height: 115.20px;
  word-wrap: break-word;
}

/* Responsif untuk layar kecil (mobile) */
@media (max-width: 768px) {
  .content-wrapper {
    padding-top: 64px;   /* Mengurangi padding untuk mobile */
    padding-bottom: 64px;
    padding-left: 50px;
    padding-right: 50px;
  }

  .title {
    font-size: 48px;  /* Menyesuaikan ukuran font untuk mobile */
    line-height: 60px; /* Menyesuaikan line-height */
  }
}

/* Responsif untuk layar sangat kecil (seperti handphone atau layar portrait sangat sempit) */
@media (max-width: 576px) {
  .title {
    font-size: 36px; /* Menyesuaikan lebih kecil untuk layar sangat sempit */
    line-height: 45px; /* Menyesuaikan line-height */
  }
}


/* Styling untuk card produk */
.product-card {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 20px;
  width: 100%;
  height: 100%;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Styling gambar produk */
.product-image {
  width: 350px;
  height: 350px;
  object-fit: cover;
  border-radius: 8px;
}

/* Styling informasi produk */
.product-info {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  height: 80px;
  width: 100%;
}

.product-title {
  text-align: center;
  color: #25211E;
  font-size: 18px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  line-height: 21.6px;
}

.product-price {
  text-align: center;
  color: #454342;
  font-size: 18px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  line-height: 21.6px;
}

/* Responsif untuk mobile */
@media (max-width: 767px) {
    .product-container .product-card {
        width: 48%; 
}
  .product-title {
    font-size: 16px;
  }
  .product-price {
    font-size: 14px;
  }

  /* Gambar produk menyesuaikan lebar layar pada mobile */
  .product-image {
    width: 100%;
    height: auto;
  }
}





/* styles.css */

/* Gaya untuk judul utama */
.title {
  color: #333333;
  font-size: 56px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  line-height: 67.20px;
  word-wrap: break-word;
}

/* Gaya untuk sub-judul */
.sub-title {
  text-align: center;
  color: #707070;
  font-size: 16px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  line-height: 19.20px;
  word-wrap: break-word;
}

/* Responsif untuk layar kecil (mobile) */
@media (max-width: 768px) {
  .title {
    font-size: 40px;  /* Mengurangi ukuran font untuk layar kecil */
    line-height: 48px;
  }

  .sub-title {
    font-size: 14px; /* Menyesuaikan ukuran font untuk subjudul di layar kecil */
  }
}


/* Mengimpor font 'Jura' dari Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Jura:wght@700&display=swap');


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
        background: #333;
        color: white;
        margin: 0 5px;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 4px;
    }

    .pagination button.active {
        background-color: white;
        color: black;
        border: 1px solid #333;
    }

    .pagination button[disabled] {
        background: #555;
        cursor: not-allowed;
    }

    .bg-custom-gray {
        background-color: #C9C9C9;
    }

    /* Custom Button Radius */
    .btn-custom {
        border-radius: 6px;
    }
</style>

<body>
    @include('components.navbar')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
          <div class="col-12 text-center">
            <div class="content-wrapper">
              <div class="title-CF">
                Coffee Table
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row justify-content-start align-items-end gap-3">
          <div class="col-12 col-md-auto text-start">
            <div class="title">Coffee Table Furniture</div>
          </div>
          <div class="col-12 col-md-auto text-center">
            <div class="sub-title">(27 product)</div>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row justify-content-between align-items-center">
          <!-- Produk 1 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Lemari Pakaian" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Lemari Pakaian Corrado High Loista</div>
                <div class="product-price">IDR 13.500.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 2 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Kursi Makan" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Kursi Makan Trio Loista Indonesia</div>
                <div class="product-price">IDR 4.750.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 3 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Kursi Ruang Keluarga" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Kursi Ruang Keluarga Zulu Loista</div>
                <div class="product-price">IDR 4.000.000</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-between align-items-center">
          <!-- Produk 4 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Meja Tamu" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Meja Tamu Marlo</div>
                <div class="product-price">IDR 2.200.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 5 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Kursi Santai" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Kursi Santai Loista</div>
                <div class="product-price">IDR 2.800.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 6 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Lampu Hias" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Lampu Hias Vintage</div>
                <div class="product-price">IDR 1.200.000</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-between align-items-center">
          <!-- Produk 7 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Meja Kerja" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Meja Kerja Minimalis</div>
                <div class="product-price">IDR 3.000.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 8 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Rak Buku" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Rak Buku Kayu</div>
                <div class="product-price">IDR 1.500.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 9 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="TV Stand" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">TV Stand Urban Style</div>
                <div class="product-price">IDR 2.700.000</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-between align-items-center">
          <!-- Produk 10 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Bantal Sofa" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Bantal Sofa Empuk</div>
                <div class="product-price">IDR 500.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 11 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Meja Belajar" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Meja Belajar Kayu</div>
                <div class="product-price">IDR 1.800.000</div>
              </div>
            </div>
          </div>

          <!-- Produk 12 -->
          <div class="col-12 col-md-4 text-center mb-4">
            <div class="product-card">
              <img src="https://via.placeholder.com/350x350" alt="Lemari Rak Sepatu" class="img-fluid" />
              <div class="product-info">
                <div class="product-title">Lemari Rak Sepatu Modern</div>
                <div class="product-price">IDR 2.500.000</div>
              </div>
            </div>
          </div>
        </div>
      </div>



        <div class="pagination-container">
            <div class="pagination" id="pagination">
                <button id="prev" disabled>&lt;</button>
                <!-- Page numbers will be inserted dynamically here -->
                <button id="next">&gt;</button>
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
