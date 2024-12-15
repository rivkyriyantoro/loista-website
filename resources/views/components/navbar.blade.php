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
      /* Navbar Floating saat Scroll */
      .navbar.scrolled {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1050;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Efek shadow lebih kuat saat scroll */
      }

      /* Styling Navbar secara Umum */
      .navbar {
        font-family: 'Plus Jakarta Sans', sans-serif; /* Make sure the font is applied */
        font-weight: 700;
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
        align-items: center;
        transition: top 0.3s ease-in-out; /* Smooth transition */
      }

      .navbar .navbar-brand img {
        max-height: 50px; /* Adjust logo size */
      }

      .navbar-nav {
        display: flex;
        align-items: center; /* Align items horizontally */
      }

      .navbar-nav .nav-item {
        margin-right: 1rem;
      }

      .navbar-nav .nav-item .nav-link {
        font-weight: 700;
        padding: 1rem;
      }

      .navbar-nav .nav-item .nav-link:hover {
        color: #007bff; /* Hover color */
      }

      .navbar-toggler {
        border-color: transparent;
      }

      /* Styling untuk Tombol WhatsApp pada Desktop */
      .btn-whatsapp {
        display: flex;
        align-items: center;
        font-size: 16px;
        padding: 1rem;
        font-weight: 600;
        border-radius: 5px;
        text-decoration: none;
        color: #777676;
        margin-left: 1rem;
      }

      .btn-whatsapp:hover {
        color: #007bff;
      }

      /* Styling untuk Free Shipping Bar pada Desktop */
     /* Styling untuk Free Shipping Bar pada Desktop */
.free-shipping-bar {
  background-color: #3D3D3D;
  color: #FFFFFF;
  font-size: 14px;
  text-align: center;
  font-weight: 600;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 0.5rem 0;
  z-index: 1040; /* Make sure it's below the navbar */
}




      @media (max-width: 768px) {

        .navbar {
          position: fixed;
          max-width: 100%;
          background-color: #fff;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          transition: top 0.3s ease-in-out;
        }

        .navbar-toggler {
          z-index: 1060;
        }

        /* Styling untuk Tombol WhatsApp */
        .btn-whatsapp {
          display: flex;
          align-items: center;
          font-size: 16px;
          padding: 1rem;
          font-weight: 600;
          border-radius: 5px;
          text-decoration: none;
          color: #777676;
          text-align: center;
        }

        .fab fa-whatsapp {
          font-size: 18px;
          margin-right: 8px;
        }

        .btn-whatsapp:hover {
          color: #007bff;
        }

        .btn-whatsapp i {
          font-size: 18px;
          margin-right: 8px;
        }

        /* Navbar Navigation untuk Tampilan Mobile */
        .navbar-nav {
          text-align: center;
        }

        .navbar-nav .nav-item .nav-link {
          padding: 0.5rem 0;
        }

        /* Navbar Branding */
        .navbar .navbar-brand img {
          height: 50px;
        }


      }
    </style>
  </head>

  <body>

    <!-- Free Shipping Bar -->
    <a class="free-shipping-bar" href="{{ route('home') }}" title="FREE SHIPPING WITHIN JABODETABEK AREA!">
      FREE SHIPPING WITHIN JABODETABEK AREA!
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

      <div class="container nav">
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
                <li><a class="dropdown-item" href="#">Design and Builds</a></li>
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
            <li class="nav-item"><a class="nav-link @yield('home')" href="#">Our Projects</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="{{ route('Gallery') }}">Gallery</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="#">Step Order</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="{{ route('InfoPromotions') }}">Info & Promotions</a></li>
            <li class="nav-item"><a class="nav-link @yield('contact')" href="{{ route('ProductMain') }}">Contact Us</a></li>
            <li><a href="#" class="btn-whatsapp mx-auto"><i class="fab fa-whatsapp"></i> Whatsapp Us</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Scroll Detection JS -->
    <script>
      window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 10) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    </script>
  </body>
</html>
