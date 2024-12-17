<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <title>MurahKom Footer</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />

    <!-- Tambahkan Font Awesome CDN untuk ikon sosial media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
      /* General Styling */
      body {
        font-family: 'Plus Jakarta Sans', sans-serif;
      }

      .footer-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-top: 3rem;
        flex-wrap: wrap; /* Membuat footer fleksibel pada perangkat kecil */
      }

      .footer-section {
        width: 25%; /* Adjust the width for each section */
        margin-bottom: 2rem;
      }

      .footer-logo-wrapper {
        display: flex;
        justify-content: flex-start;
        align-items: center;
      }

      .footer-section:first-child {
        margin-top: 5px; /* Jarak antara logo dan kolom pertama */
      }

      .footer-logo {
        width: 100px; /* Ukuran logo */
      }

      .footer-section h2 {
        font-weight:600;
        margin-bottom: 1rem;
      }

      .footer-section p,
      .footer-section ul li {
        font-size: 14px;
        color: #555;
      }

      .footer-section .social-icons a {
        margin-right: 10px;
        font-size: 18px;
        color: #333;
      }

      .footer-section .social-icons a:hover {
        color: #007bff;
      }

      .useful-links a {
        color: black; /* Mengubah warna teks menjadi hitam */
        text-decoration: none; /* Menghilangkan garis bawah pada link */
      }

      .useful-links a:hover {
        color: #007bff; /* Menambahkan warna saat hover */
        text-decoration: underline; /* Menambahkan garis bawah saat hover */
      }

      /* Responsive Design */
      @media (max-width: 991px) {
        .footer-wrapper {
          flex-direction: column; /* Membuat kolom footer menjadi vertikal pada mobile */
          align-items: flex-start; /* Menjaga semua elemen footer berada di kiri */
        }

        .footer-section {
          width: 100%; /* Membuat setiap kolom footer menjadi penuh pada mobile */
          text-align: left; /* Semua teks di dalam footer akan rata kiri */
        }

        .footer-section .social-icons a {
          font-size: 24px; /* Membesarkan ukuran ikon sosial media pada mobile */
        }
      }

/* Gaya umum untuk container peta */
.map-container {
    width: 100%; /* Membuat kontainer memenuhi lebar layar */
    overflow: hidden; /* Mencegah konten meluber */
    padding: 10px 0; /* Memberikan padding agar peta tidak terlalu rapat dengan tepi */
}

/* Responsivitas untuk iframe agar sesuai dengan layar perangkat */
.map-container iframe {
    width: 100%; /* Menyesuaikan lebar iframe dengan lebar kontainer */
    height: 200px; /* Ukuran default untuk peta */
    max-width: 100%; /* Mencegah iframe melebar */
    border-radius: 10px;
}

/* Responsivitas untuk layar tablet (<= 768px) */
@media (max-width: 768px) {
    .map-container iframe {
        rou
        width: 294px; /* Menyesuaikan lebar iframe dengan lebar kontainer */
        height: 200px;/* Ukuran iframe lebih besar pada tablet untuk kenyamanan */
        border-radius: 10px;
    }
}

/* Responsivitas untuk layar ponsel (<= 480px) */
@media (max-width: 480px) {
    .map-container iframe {
        height: 200px; /* Ukuran iframe dikurangi sedikit pada ponsel */
    }
}


      /* Copyright Styling */
      .box-copyright {
        background-color: #f8f9fa;
        padding: 10px;
        text-align: center;
        margin-top: 2rem;
      }

      .box-copyright div {
        font-size: 14px;
        color: #555;
      }
      .mt-7 {
        margin-top: 7rem;
      }
    </style>
  </head>
  <body>
    <div class="container mt-7 footer-container">
        <!-- Logo -->
        <div class="footer-logo-wrapper">
          <img
            src="\img\logo.png"
            alt="Loista Logo"
            class="footer-logo"
          />
        </div>

        <!-- Footer Content -->
        <div class="footer-wrapper">
          <!-- Contact Us -->
          <div class="footer-section">
            <h2>Contact Us</h2>
            <p>We're here for you!</p>
            <p>Monday – Friday: 9 am – 8 pm<br />Saturday – Sunday: 10 am – 7 pm</p>
            <p><i class="fas fa-phone"></i> 02150986988</p>
            <p><i class="fas fa-envelope"></i> customercare@loista.com</p>
            <p><i class="fas fa-comments"></i> WhatsApp Chat</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>

          <div class="footer-section">
            <h2>Showroom Location</h2>

            <!-- Google Maps iframe -->
            <div class="map-container">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0512593328276!2d106.6201311!3d-6.2569781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fdb6b5140895%3A0x79d9d7ec7fe26dd1!2sLoista%20(%20Showroom%20)!5e0!3m2!1sen!2sid!4v1732372408217!5m2!1sen!2sid"
                width="100%" height="134" style="border:0;" allowfullscreen="" loading="lazy">
              </iframe>
            </div>

            <!-- Alamat -->
            <div class="address-container">
              <p>Jl. Gading Serpong Boulevard Barat No.6-7 Blok S, Curug Sangereng, Kec. Serpong, Kabupaten Tangerang, Banten 15810</p>
            </div>
          </div>

          <!-- Useful Links -->
          <div class="footer-section">
            <div class="useful-links">
              <h2>Useful Links</h2>
              <div>
                <p><a href="#">Home</a></p>
                <p><a href="#">Products</a></p>
                <p><a href="#">Company Profile</a></p>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">FAQ</a></p>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- <!-- Copyright -->
    <div class="box-copyright">
      <div>
        &copy; 2024 <strong><span>Loista Indonesia</span></strong>. All Rights Reserved
      </div> --}}
    </div>
  </body>
</html>
