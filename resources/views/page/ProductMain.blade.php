<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductMain</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>


<style>



     .container{
         max-width: 100%;
         align-items: center;
     }
     .header-proma {
      width: 100%;
      height: auto;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      gap: 7px;

    }

   .title-proma {
      color: #000000;
      font-size: 64px;
      font-family: 'Jura', sans-serif;
      font-weight: 700;
      word-wrap: break-word;

    }

    .description-proma {
      color: #383434;
      font-size: 18px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 400;
      line-height: 21.6px;
      text-align: justify;
      word-wrap: break-word;
    }


    @media (max-width: 768px) {
      .header-proma .title-proma {
        max-width: 100%;
        font-size: 36px;
        text-align: left;
      }

      .header-proma .description-proma {
        font-size: 16px;
      }


      .header-proma {
        padding-left: 15px;
        padding-right: 15px;
      }
    }

    .btn-hubungi {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    text-align: center;
    background-color: #333333;
    color: white;
    font-size: 14px;
    text-decoration: none;
    border-radius: 10px;
    transition: background-color 0.3s ease;
    width: 224px;
    height: 37px;
    margin: 0 auto;
    font-weight: 600;
}

@media (max-width: 768px) {
    .btn-hubungi {
        justify-content: center;
        align-items: center;
    }
}


.btn-other {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    text-align: center;
    background-color: #333333;
    color: white;
    font-size: 14px;
    text-decoration: none;
    border-radius: 10px;
    transition: background-color 0.3s ease;
    width: 224px;
    height: 37px;
    margin: 0 auto;
    font-weight: 600;
}

@media (max-width: 768px) {
    .btn-other {
        justify-content: center;
        align-items: center;
    }
}

.carousel-inner .carousel-item img {
    width: 100%;
    height: 456px;
    object-fit: cover;
}

/* Gaya default */
.responsive-icon {
    color: rgb(255, 255, 255);
    font-size: 3rem; /* Default size */
}

/* Responsif untuk perangkat mobile (max-width: 576px) */
@media (max-width: 767px) {
    .responsive-icon {
        font-size: 1.5rem; /* Ukuran lebih kecil untuk perangkat mobile */
        color: rgb(255, 255, 255); /* Opsional: ubah warna untuk mobile */
    }
}

/* Responsif untuk perangkat tablet (max-width: 768px) */
@media (max-width: 768px) {
    .responsive-icon {
        font-size: 1.5rem; /* Sedikit lebih besar dari mobile */
    }
}



@media (max-width: 768px) {
    .carousel-control-prev, .carousel-control-next {
        font-size: 0.75rem;
    }
    .carousel-inner .carousel-item img {
    width: 100%;
    height: 270px;
    object-fit: cover;
}

}


@media (max-width: 767px) {
    .carousel-control-prev, .carousel-control-next {
        font-size: 0.75rem;
    }

    .carousel-inner .carousel-item img {
    width: 100%;
    height: 124px;
    object-fit: cover;
}

}




.overlay-container {
    position: relative;
    width: 100%;
    height: 372px;
    overflow: hidden;
}


.overlay-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


.overlay-text {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: white;
    font-size: 40px;
    font-weight: 700;
    z-index: 2;
}


@media (max-width: 768px) {
    .overlay-container {
        height: 250px;
    }

    .overlay-text {
        font-size: 24px;
    }
}






  .Proma .col-lg-6 img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }




.overlay-container {
  position: relative;
  width: 100%;
  height: 372px;
  overflow: hidden;
}


.overlay-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 1;
  transition: opacity 0.3s ease;
}


.overlay-container::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1;
}


.overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  z-index: 2;
}

.overlay-text h2 {
  font-size: 2.5rem;
  margin-bottom: 10px;
  font-weight: bold;
}


 .Proma {
    display: flex;
max-width: 1440px;
flex-direction: column;
align-items: left;
gap: 36px;

 }


.overlay-text1 h2 {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: white;
    font-size: 40px;
    font-weight:bold;
    z-index: 2;
    text-align: left;
    width: 90%;
    word-wrap: break-word;
}

@media screen and (max-width: 768px) {

    .overlay-container {
        height: 200px;
    }

    .overlay-image {
        width: 1164px;
        height: auto;
        object-fit: cover;
    }


    .overlay-text1 h2  {
        font-size: 10px;
        bottom: 10px;
        left: 10px;
    }

}

@media screen and (max-width: 767px) {

    .overlay-container {
        height: 118px;
    }

    .overlay-image {
        width: 1164px;
        height: auto;
        object-fit: cover;
    }


    .overlay-text1 h2  {
        font-size: 10px;
        bottom: 10px;
        left: 10px;
    }

}

.container {
  width: 100%;
  padding: 0;
  margin: 0;
}

.overlay-container {
  position: relative;
  width: 100%;
  max-width: 100%;

}

.overlay-image {
  width: 100%;
  height: auto;
  object-fit: cover;
}


.responsive-breadcrumb {
color: #707070;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  word-wrap: break-word;
  width: 100%;
  padding-bottom: 45px;
  display: flex;
  justify-content: left;
  align-items: left;
}



.responsive-text-h1 {
  width: 100%;
  height: 100%;
  color: #333;
  font-family: 'Jura', sans-serif;
  font-weight: 700;
  text-align: left;
  font-size: 64px;
}

.responsive-text-h3 {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: normal;
  font-size: 14px;
  color: #707070;
  text-align: center;
  line-height: 1.2;
  word-wrap: break-word;
  text-align: left;
}

    @media (max-width: 768px) {
        .responsive-container {
    width: 100%;
    height: 28px;
    display: flex;

    }

    .responsive-breadcrumb{
    width: 100%;
        color: #707070;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 400;
    font-size: 12px;
    word-wrap: break-word;
    padding-bottom: 14px;
    }

    .responsive-text {
        font-size: 28px;
        line-height: 1.4;
        text-align: center;
    }


    .responsive-text-h1 {
    width: 100%;
    height: 100%;
    color: #333;
    font-family: 'Jura', sans-serif;
    font-weight: 700;
    word-wrap: break-word;
    text-align: left;
    font-size: 32px;

    }

    .responsive-text-h3 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: normal;
    font-size: 12px;
    color: #707070;
    text-align: center;
    line-height: 1.2;
    word-wrap: break-word;
    text-align: left;
    }
    .overlay-text1 h2 {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        font-size: 20px;
        font-weight:bold;
        z-index: 2;
        text-align: left;
        width: 90%;
        word-wrap: break-word;
    }

    }

    .px-5 {
        padding-left: ($spacer * .5) !important;
        padding-right: ($spacer * .5) !important;
    }




    </style>
</head>
<body>

    <!-- Menyertakan Navbar -->
    {{-- @include('components.navbar') --}}



        <div class="container">
        <!-- Header Proma Section -->
        <div class="header-proma mb-5">
            <div class="title-proma">
                Design and Build
            </div>
            <div class="description-proma mt-4">
                Make your vision a reality with our Design and Build services. Do you have an idea for custom furniture tailored to your space needs? Our team is ready to help bring unique and functional designs to life, personalized to suit your preferences and lifestyle.
                <br><br>
                We offer a flexible consultation process, either online or in-person at our showroom. Get expert guidance to discover the best design solutions that meet high standards of quality and aesthetics.
                <br><br>
                Start your consultation now by contacting our Customer Service team or visit our showroom to experience it firsthand and speak with our design specialists.
            </div>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-3">
                    <a href="#" class="btn-hubungi ">Hubungi Kami</a>
                </div>
            </div>
        </div>

        <div id="carouselProductmain" class="carousel slide" data-bs-ride="carousel">
            <!-- Indikator/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselProductmain" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselProductmain" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselProductmain" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="carousel-image d-block w-100 h-456px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="carousel-image d-block w-100 h-456px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="carousel-image d-block w-100 h-456px" alt="...">
              </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductmain" data-bs-slide="prev">
                <i class="fas fa-chevron-circle-left responsive-icon"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProductmain" data-bs-slide="next">
                <i class="fas fa-chevron-circle-right responsive-icon"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




             <!-- section 3 -->
    <div class="container Proma mt-5" style="widhth: 372px;">
        <div class="row text-start">
        </div>

                <!-- Wardrobe -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1683181181300-44c0c991a2cf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Wardrobe">
                  <div class="overlay-text1">
                      <h2>Kitchen</h2>
                  </div>
              </div>

                <!-- TV Cabinet -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1678874956092-6d9dc8b766bf?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TV Cabinet">
                  <div class="overlay-text1">
                      <h2>Wardrobe</h2>
                  </div>
              </div>

                <!-- Backdrop -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Backdrop">
                  <div class="overlay-text1">
                      <h2>TV Cabinet</h2>
                  </div>
              </div>

                <!-- Other -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Other">
                  <div class="overlay-text1">
                      <h2>Backdrop</h2>
                  </div>
              </div>

              <div class="overlay-container">
                <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Backdrop">
                <div class="overlay-text1">
                    <h2>Other</h2>
                </div>
            </div>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-3">
                    <a href="#" class="btn-other ">See other</a>
                </div>
            </div>
        </div>



               <!-- section 3 -->
    <div class="container Proma mt-5 ">
        <div class="row text-start">
          <!-- Title aligned to the left -->
          <div class="responsive-container">
            <p class="responsive-text-h1">Proma</p>
          </div>
        </div>

                <!-- Wardrobe -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1683181181300-44c0c991a2cf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Wardrobe">
                  <div class="overlay-text1">
                      <h2>Sofa</h2>
                  </div>
              </div>

                <!-- TV Cabinet -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1678874956092-6d9dc8b766bf?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TV Cabinet">
                  <div class="overlay-text1">
                      <h2>Bench</h2>
                  </div>
              </div>

                <!-- Backdrop -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Backdrop">
                  <div class="overlay-text1">
                      <h2>Coffee Table</h2>
                  </div>
              </div>

                <!-- Other -->
                <div class="overlay-container">
                  <img class="overlay-image" src="https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Other">
                  <div class="overlay-text1">
                      <h2>Side Table</h2>
                  </div>
              </div>
            </div>
            </div>






  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
