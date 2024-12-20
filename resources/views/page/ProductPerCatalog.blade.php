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

.product-profile-header {
            position: relative;
            width: 100%;
            height: 372px;
            margin-top: 52px;
            background-image: url('https://images.unsplash.com/photo-1578112010316-b44c50d27b2b?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .product-profile-header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }


        .product-profile-header .product-profile-title {
            position: relative;
            color: #FAFAFA;
            font-size: 56px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            text-align: center;
            z-index: 2;
        }


        @media (max-width: 992px) {
            .product-profile-header {
                height: 200px;
                padding-left: 138px;
                padding-right: 138px;
                padding-top: 52px;
            }

            .product-profile-header .product-profile-title {
                font-size: 36px;


            }
        }

        @media (max-width: 768px) {
            .product-profile-header {
                height: auto;
                padding: 52px 138px;
            }

            .product-profile-header .product-profile-title {
                font-size: 24px;
            }
        }

        @media (max-width: 576px) {
            .product-profile-header {
                padding: 52px 20px;
            }

            .product-profile-header .product-profile-title {
                font-size: 20px;
            }
        }





</style>

<body>
    {{-- @include('components.navbar') --}}


    <div class="container product-profile-header d-flex justify-content-center align-items-center pt-11">
        <div class="overlay"></div>
        <div class="product-profile-title">
            Coffee Table
        </div>
    </div>


      <div class="container" style="margin-top: 84px;">
        <div class="row justify-content-start align-items-end pb-5">
          <!-- Title -->
          <div class="col-12 col-md-auto text-md-start text-center">
            <div class="title fs-1 fs-md-2">Coffee Table Furniture</div>
          </div>

          <!-- Subtitle -->
          <div class="col-12 col-md-auto text-center text-md-center">
            <div class="sub-title fs-6">(27 products)</div>
          </div>
        </div>
      </div>


      <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card border-0 shadow-none">
                    <img src="\img\Rectangle 125.png" class="card-img-top border-0 shadow-none border-0 shadow-none" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card border-0 shadow-none">
                    <img src="\img\Rectangle 125.png" class="card-img-top border-0 shadow-none" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card border-0 shadow-none">
                    <img src="\img\Rectangle 125.png" class="card-img-top border-0 shadow-none" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card border-0 shadow-none">
                    <img src="\img\Rectangle 125.png" class="card-img-top border-0 shadow-none" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3" >
                <div class="card border-0 shadow-none">
                    <img src="\img\Rectangle 125.png" class="card-img-top border-0 shadow-none" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-3">
                <div class="card border-0 shadow-none">
                    <img src="\img\Rectangle 125.png" class="card-img-top border-0 shadow-none" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lemari Pakaian Corrado High Loista</h5>
                        <p class="card-text">IDR 13.500.000</p>
                    </div>
                </div>
            </div>
        </div>


      </div>



<div class="container mt-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
</div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    @include('components.footer')
</body>

</html>
