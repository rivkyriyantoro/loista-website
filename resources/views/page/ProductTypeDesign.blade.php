<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    /* Styling untuk Section 1 */
 /* Styling untuk Section 1 */
 .section-1 {
            padding: 3rem 0;

        }



    /* Styling untuk Section 2 */
    .section-2 {
        padding: 3rem 0;
        /* Tambahkan width yang lebih fleksibel */
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 36px;
    }

    /* Styling untuk gambar di dalam section-2 */
    .section-2 .col-lg-6 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Styling untuk Text Box di section-2 */
    .section-2 .text-box {
        text-align: center;
        max-width: 600px;
        padding: 20px; /* Sesuaikan padding agar lebih rapi */
    }

    .section-2 .text-box h2 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1.5rem;
    }

    .section-2 .text-box p {
        font-size: 1.125rem;
        color: #333;
        margin-bottom: 1.5rem;
    }

    /* Tombol See More pada Section 2 */
    .section-2 .btn-see-more {
        background-color: #703c2d;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1.125rem;
        text-align: center;
    }

    .section-2 .btn-see-more:hover {
        background-color: #5e2e1e;
    }

    /* Responsif untuk Section 2 */
    @media (max-width: 991px) {
        .section-2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
        }
        .section-2 .text-box h2 {
            font-size: 2rem; /* Menyesuaikan ukuran teks untuk layar lebih kecil */
        }
        .section-2 .btn-see-more {
            font-size: 1rem; /* Menyesuaikan ukuran tombol */
        }
    }

    /* Responsive design untuk ukuran layar kecil */
    @media (max-width: 768px) {
        .section-2 .col-lg-6 img {
            height: auto; /* Membuat gambar responsif pada layar kecil */
        }
        .section-2 .text-box h2 {
            font-size: 1.8rem; /* Ukuran judul lebih kecil */
        }
        .section-2 .text-box p {
            font-size: 1rem;
        }
    }


</style>

</head>
<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')



    <div class="container section-1">
        <div style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
            <div style="color: #707070; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">Product/</div>
            <div style="color: #707070; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">Custom</div>
        </div>

        <div class="container section-3">
             <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: inline-flex">
        <div style="width: 1164px; color: #333333; font-size: 64px; font-family: Jura; font-weight: 700; line-height: 76.80px; word-wrap: break-word">Retails</div>
        <div style="height: 3172px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: flex">
        <div class="container section-3">
    </div>
    <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: inline-flex">
        <div style="width: 1164px; color: #333333; font-size: 64px; font-family: Jura; font-weight: 700; line-height: 76.80px; word-wrap: break-word">Retails</div>
        <div style="height: 3172px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: flex">
    <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 35px; display: inline-flex">
        <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 972px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
            <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Kitchen</div>
        </div>
        <div style="width: 1164px; height: 372px; padding-top: 272.77px; padding-bottom: 51.23px; padding-left: 42px; padding-right: 925px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
            <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Wardrobe</div>
        </div>
        <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 909px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
            <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">TV Cabinet</div>
        </div>
        <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 929px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
            <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Backdrop</div>
        </div>
        <div style="width: 1164px; height: 372px; padding-top: 273.73px; padding-bottom: 50.27px; padding-left: 42px; padding-right: 1007px; background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%); justify-content: flex-start; align-items: center; display: inline-flex">
            <div style="color: #FCFBFA; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Other</div>
        </div>
    </div>
    </div>

  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
