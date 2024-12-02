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
      /* General styling */
      body {
        font-family: 'Plus Jakarta Sans', sans-serif; /* Make sure the font is applied */
      }

      /* Custom navbar styles */
      .navbar {
        padding: 0.5rem 1rem;
        font-weight: 600;
      }

      .navbar .navbar-brand img {
        height: 50px; /* Menyesuaikan ukuran logo */
      }

      .navbar-nav .nav-item .nav-link {
        font-weight: 600;
        padding: 1rem; /* Memberikan padding untuk jarak antar link */
      }

      .navbar-nav .nav-item .nav-link:hover {
        color: #007bff;
      }

      .navbar-toggler {
        border-color: transparent;
      }

   /* Adjust the WhatsApp button to match the size of other navbar links */
/* Adjust the WhatsApp button to match the size of other navbar links */
.btn-whatsapp {
  display: flex;
  align-items: center;
  font-size: 16px; /* Match font size to navbar links */
  padding: 1rem; /* Match the padding to the navbar link padding */
  font-weight: 600;
  border-radius: 5px; /* Add a slight border radius for a rounded button */
  text-decoration: none; /* Ensure there's no underline on the link */
  color: #777676; /* Set the text color to match navbar link color */
}

.btn-whatsapp:hover {
  color: #007bff; /* Add hover effect to match navbar link hover color */
}

.btn-whatsapp i {
  margin-right: 10px;
  color: inherit; /* Ensure the icon color matches the text color */
}


.navbar-nav .nav-item .nav-link {
  font-weight: 600;
  padding: 1rem; /* Ensure padding is consistent for nav links */
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

        .btn-whatsapp {
          margin-top: 10px; /* Add margin on mobile for better layout */
        }
      }
    </style>
  </head>
  <body>
    <!-- Free Shipping Banner -->
    <div class="free-shipping-bar">
      FREE SHIPPING WITHIN JABODETABEK AREA!
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <div class="container">
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
                  <li><h6 class="dropdown-header">Retail</h6></li>
                  <li><a class="dropdown-item" href="#">Sofa</a></li>
                  <li><a class="dropdown-item" href="#">Bench</a></li>
                  <li><a class="dropdown-item" href="#">Coffee Table</a></li>
                  <li><a class="dropdown-item" href="#">Side Table</a></li>
              </ul>
            </li>

            <!-- Company Profile -->
            <li class="nav-item"><a class="nav-link @yield('market')" href="{{ route('CompanyProfile') }}">Company Profile</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="#">Our Projects</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="#">Gallery</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="#">Step Order</a></li>
            <li class="nav-item"><a class="nav-link @yield('home')" href="#">Info & Promotions</a></li>
            <li class="nav-item"><a class="nav-link @yield('contact')" href="{{ route('contacus') }}">Contact Us</a></li>
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
