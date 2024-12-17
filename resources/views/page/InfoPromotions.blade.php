<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info & Promotions</title>

     <!-- Menambahkan Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
     <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
         rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .text-responsive {
        line-height: 67.2px;
        font-size: 56px;
        /* Default font size for larger screens */
        font-weight: 700;
    }

    /* Responsive font size for smaller screens */
    @media (max-width: 768px) {
        .text-responsive {
            font-size: 28px;
            line-height: 33.6px;
        }
    }
    .promo-container {
      position: relative;
      text-align: center;
      color: white;
    }

    .promo-image {
      width: 100%;
      height: auto;
      display: block;
    }

    .promo-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 1.5rem;
      font-weight: bold;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px 20px;
      border-radius: 5px;
    }
    .mt-7 {
    margin-top: 8rem;
}
</style>

<body>
    @include('components.navbar')

    {{-- section 1 --}}

    <div class="container mt-7 mb-3">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-responsive">Info & Promotions</h1>
            </div>
        </div>
    </div>


    {{-- section2 --}}
    <div class="container">
        <!-- Row 1 -->
        <div class="row mb-2">
          <div class="col">
            <div class="promo-container">
              <img src="{{ asset('images/infopromo1.png') }}" alt="Promo Image 1" class="promo-image">
            </div>
          </div>
        </div>
        <!-- Row 2 -->
        <div class="row mb-2">
          <div class="col">
            <div class="promo-container">
              <img src="{{ asset('images/infopromo2.png') }}" alt="Promo Image 2" class="promo-image">
            </div>
          </div>
        </div>
        <!-- Row 3 -->
        <div class="row mb-4">
          <div class="col">
            <div class="promo-container">
              <img src="{{ asset('images/infopromo3.png') }}" alt="Promo Image 3" class="promo-image">
            </div>
          </div>
        </div>
      </div>

    {{-- section3 --}}
    <div class="container section-4">
        <div class="row">
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex; margin-top: 80px;">
                <div style="align-self: stretch; color: #333333; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Info</div>
                <div style="align-self: stretch; height: 1px; background: #999999"></div>

                <!-- Section 1 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <a href="{{ route('BlogDetail') }}" style="text-decoration: none; color: inherit;">
                            <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                                <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">
                                    August 13, 2021
                                </div>
                                <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">
                                    10 Hilarious Cartoons That Depict Real-Life Problems of Programmers
                                </div>
                            </div>
                        </a>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <!-- Section 2 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                            <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">August 13, 2021 </div>
                            <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                        </div>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <!-- Section 3 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                            <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">August 13, 2021 </div>
                            <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                        </div>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <div style="align-self: stretch; height: 1px; background: #999999"></div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    @include('components.footer')
</body>

</html>
