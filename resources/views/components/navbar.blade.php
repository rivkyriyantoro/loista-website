<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar Design</title>

    <!-- Add Google Font for Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <style>

/* Default Navbar Style */
.navbar {
  position: relative; /* Posisi navbar sebelum scroll */
  z-index: 1050; /* Pastikan navbar berada di atas elemen lain */
}

/* Navbar pada tampilan Mobile */
@media (max-width: 768px) {
  .navbar {
    position: fixed; /* Menjadikan navbar tetap di atas saat scroll */
    top: 0;
    width: 100%;
    background-color: #fff; /* Bisa disesuaikan dengan warna navbar */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Menambahkan shadow */
    transition: top 0.3s ease-in-out; /* Animasi smooth saat navbar dipindahkan */
  }


  .navbar-toggler {
    z-index: 1060; /* Agar tombol hamburger tetap di atas navbar */
  }
}

/* Navbar Floating saat Scroll */
.navbar.scrolled {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1050;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Efek shadow lebih kuat saat scroll */
}



/* Mengatur posisi dan tampilan elemen carousel */
.carousel-inner {
  margin-top: 100px; /* Sesuaikan dengan tinggi navbar */
}



/* Styling free shipping bar */
.free-shipping-bar {
  background-color: #3D3D3D; /* Contoh warna latar belakang */
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050; /* Pastikan berada di atas navbar */
  font-size: 14px;
  color: white;
  text-align: center;
  font-weight: bold;
  display: block; /* Pastikan elemen ini ditampilkan */
}

.navbar {
  margin-top: 35px;
}


    /* General styling */
body {
  font-family: 'Plus Jakarta Sans', sans-serif; /* Make sure the font is applied */
/* padding-top: 40px */
}


/* Custom navbar styles */
.navbar {
  padding: 0.5rem 1rem;
  font-weight: 600;
  display: flex;
  justify-content: space-between;
  align-items: center; /* Ensure that items are vertically aligned */
}

.navbar .navbar-brand img {
  height: 50px; /* Adjust logo size */
}

.navbar-nav {
  display: flex;
  align-items: center; /* Ensure the navbar items are vertically aligned */
}

.navbar-nav .nav-item {
  margin-right: 1rem; /* Add space between nav items */
}

.navbar-nav .nav-item .nav-link {
  font-weight: 600;
  padding: 1rem; /* Add padding for spacing */
}

.navbar-nav .nav-item .nav-link:hover {
  color: #007bff;
}

.navbar-toggler {
  border-color: transparent;
}

/* Adjust the WhatsApp button to match the size of other navbar links */
.btn-whatsapp {
  display: flex;
  align-items: center;
  font-size: 16px; /* Match font size to navbar links */
  padding: 1rem; /* Match the padding to the navbar link padding */
  font-weight: 600;
  border-radius: 5px; /* Add slight border radius for rounded button */
  text-decoration: none; /* Remove underline */
  color: #777676; /* Set color to match navbar link color */
  margin-left: 1rem; /* Ensure consistent spacing */
}

.btn-whatsapp :hover {
  color: #007bff; /* Add hover effect to match navbar link hover color */
}



/* Responsif untuk tampilan mobile (max-width: 768px) */
@media (max-width: 768px) {

  .btn-whatsapp  {
    display: flex;
  align-items: center;
  font-size: 16px; /* Match font size to navbar links */
  padding: 1rem; /* Match the padding to the navbar link padding */
  font-weight: 600;
  border-radius: 5px; /* Add slight border radius for rounded button */
  text-decoration: none; /* Remove underline */
  color: #777676; /* Set color to match navbar link color */
text-align: center;
}

.fab fa-whatsapp{
    font-size: 18px; /* Ukuran ikon lebih kecil pada mobile */
    margin-right: 8px; /* Mengurangi jarak antara ikon dan teks */
  }

}
  .btn-whatsapp i {
    font-size: 18px; /* Ukuran ikon lebih kecil pada mobile */
    margin-right: 8px; /* Mengurangi jarak antara ikon dan teks */
  }

  /* Efek hover untuk mobile */
  .btn-whatsapp:hover {
    color: #007bff; /* Warna saat hover di mobile */
  }
}

/* Styling for the 'free shipping' bar */
.free-shipping-bar {
  background-color: #3D3D3D;
  color: #FFFFFF;
  font-size: 14px;
  padding: 0.5rem 0;
  text-align: center;
  font-weight: 600; /* Make the text bold */
}

/* Navbar responsive styling */
@media (max-width: 991px) {
  .navbar-nav {
    text-align: center;
  }

  .navbar-nav .nav-item .nav-link {
    padding: 0.5rem 0; /* Adjust padding for smaller screens */
  }
}

    </style>
  </head>
  <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
      <div class="container">
        <a class="free-shipping-bar fixed-top" href="{{ route('home') }}" title="FREE SHIPPING WITHIN JABODETABEK AREA!"
        style="text-decoration: none; color: #FFFFFF; font-size: 14px; padding: 0.5rem 0; text-align: center; font-weight: 600;">
        FREE SHIPPING WITHIN JABODETABEK AREA!
     </a>
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="\img\logo.png" alt="Logo" height="50">
        </a>

        <!-- Hamburger Icon for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link @yield('home')" href="{{ route('home') }}">Home</a></li>

            <!-- Produk Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle @yield('product')" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produk
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="#">Design and Builds</a>
                  </li>
                  <li><h6 class="dropdown-header">Custom</h6></li>
                  <li><a class="dropdown-item" href="#">Kitchen</a></li>
                  <li><a class="dropdown-item" href="#">Wardrobe</a></li>
                  <li><a class="dropdown-item" href="#">TV Cabinet</a></li>
                  <li><a class="dropdown-item" href="#">Wall Panel</a></li>
                  <li><a class="dropdown-item" href="#">Others</a></li>
                  <li><h6 class="dropdown-header" href="{{ route('ProductTypeRetail') }}">Retail</h6></li>
                  <li><a class="dropdown-item" href="#">Sofa</a></li>
                  <li><a class="dropdown-item" href="#">Bench</a></li>
                  <li><a class="dropdown-item" href="#">Coffee Table</a></li>
                  <li><a class="dropdown-item" href="#">Side Table</a></li>
              </ul>
            </li>

            <!-- Company Profile -->
            <li class="nav-item"><a class="nav-link @yield('market')" href="{{ route('CompanyProfile') }}">Company Profile</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="{{ route('OurProject') }}">Our Projects</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="{{ route('Gallery') }}">Gallery</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="{{ route('StepOrder') }}">Step Order</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="{{ route('InfoPromotions') }}">Info & Promotions</a></li>
            <li class="nav-item"><a class="nav-link @yield('contact')" href="{{ route('ContactUs') }}">Contact Us</a></li>
          </ul>

          <!-- WhatsApp Button -->
          <a href="#" class="btn-whatsapp ms-1">
            <i class="fab fa-whatsapp"></i> Whatsapp Us
          </a>
        </div>
      </div>
    </nav>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
