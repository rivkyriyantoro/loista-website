<div class="p-3 mb-2 bg-shipping text-white text-center">FREE SHIPPING WITHIN JABODETABEK AREA!</div>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="" height="50">
        </a>
        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="#">Product 1</a></li>
                        <li><a class="dropdown-item" href="#">Product 2</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Company Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Step Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info & Promotions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <!-- WhatsApp link -->
            <a href="#" class="whatsapp-link">
                <i class="bi bi-whatsapp"></i> Whatsapp Us
            </a>
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
            <li class="nav-item"><a class="nav-link @yield('contact')" href="{{ route('ProductMain') }}">Contact Us</a></li>
            <li> <a href="#" class="btn-whatsapp mx-auto"><i class="fab fa-whatsapp"></i> Whatsapp Us  </a></li>
          </ul>

        </div>
    </div>
</nav>
