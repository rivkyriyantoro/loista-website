<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



    <style>




/* carousel */
.carousel-inner .carousel-item img {
  width: 100%;      /* Gambar mengisi lebar kontainer */
  height: 456px;    /* Tinggi tetap 456px */
  object-fit: cover; /* Menjaga aspek rasio gambar dan mengisi kotak tanpa merusak proporsi */
}

/* carousel mobie? */
@media (max-width: 768px) {
  /* Mengatur gambar carousel agar di-crop dan di-zoom sesuai ukuran */
  .carousel-inner .carousel-item img {
    width: 390px;
    height: 124px;
    object-fit: cover;  /* Crop dan zoom gambar untuk memenuhi ukuran yang diinginkan */
    margin: 0 auto;     /* Mengatur gambar agar tetap berada di tengah */
  }

  /* Mengubah ukuran gambar placeholder untuk mobile */
  .carousel-item img {
    width: 390px;
    height: 124px;
    object-fit: cover;  /* Crop dan zoom gambar placeholder agar sesuai ukuran */
    margin: 0 auto;
  }

  /* Mengubah ukuran tombol navigasi pada layar kecil */
  .carousel-control-prev-icon, .carousel-control-next-icon {
    width: 30px;
    height: 30px;
  }
}

 /* Styling untuk Konten Section 1 */
        .section-1 {
            margin-top: 30px;

        }

        .section-1 .row {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .section-1 .col-lg-6 {
            margin-bottom: 1rem;
            max-width: 600px;
        }

        .section-1 .text-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .section-1 .text-box h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .section-1 .text-box p {
            font-size: 14px;
            color: #555;
        }

        .section-1 .col-lg-6 img {
            width: 407px;
            height: 172px;
            object-fit: cover;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .section-1 .col-lg-6 img {
                width: 157px;
                height: 66px;
            }

            .section-1 .text-box p {
            font-size: 16px;
            color: #555;
        }

        }


/* Tampilan Default untuk Desktop */
@media (max-width: 768px) {
  .carousel-indicators {
    position: absolute;
    bottom: 25px; /* Menurunkan indikator ke bawah lebih jauh */
    display: flex;
    justify-content: center; /* Menjaga indikator tetap terpusat */
    align-items: center; /* Menjaga indikator berada di tengah secara vertikal */

  }

  .carousel-indicators button {
    background-color: rgba(255, 255, 255, 0.7); /* Warna latar indikator */
    border: none;
    opacity: 0.7; /* Menurunkan opacity untuk efek transisi */
    transition: background-color 0.3s ease, opacity 0.3s ease; /* Efek transisi */
  }

  .carousel-indicators .active {
    background-color: rgba(255, 255, 255, 1); /* Warna latar belakang indikator yang aktif */
    opacity: 1; /* Indikator aktif dengan opacity penuh */
  }
}

/* Pastikan Navbar berada di atas carousel dengan z-index tinggi */







/* CSS untuk mengatur ikon carousel */
.carousel-control-prev, .carousel-control-next {
font-size: 38px;
  background-color: rgba(0, 0, 0, 0.5); /* Latar belakang tombol */
  border-radius: 50%; /* Membuat tombol bulat */
  padding: 10px; /* Menambahkan padding untuk jarak ikon dengan tepi tombol */
  transition: background-color 0.3s ease; /* Efek transisi untuk background saat hover */
}

.carousel-control-prev i, .carousel-control-next i {
  font-size: 30px; /* Ukuran ikon */
  transition: color 0.3s ease; /* Efek transisi untuk warna ikon */
}

/* Responsif untuk perangkat mobile */
@media (max-width: 768px) {
  .carousel-control-prev, .carousel-control-next {
    padding-top: 15px;

  }

  .carousel-control-prev i, .carousel-control-next i {
    font-size: 14px;
    padding-top: 50px/* Mengurangi ukuran ikon untuk mobile */
  }
}

/* Responsif untuk tablet */
@media (max-width: 1024px) and (min-width: 769px) {
  .carousel-control-prev, .carousel-control-next {
    padding: 12px; /* Padding lebih kecil untuk tablet */
  }

  .carousel-control-prev i, .carousel-control-next i {
    font-size: 32px; /* Ukuran ikon sedikit lebih besar untuk tablet */
  }
}






    /* Styling untuk Tombol */
    .btn-see-more {
    display: flex;                    /* Menggunakan flexbox untuk tombol */
    justify-content: center;          /* Menyusun teks di tengah secara horizontal */
    align-items: center;              /* Menyusun teks di tengah secara vertikal */
    background-color: #333333;        /* Warna latar belakang tombol */
    color: white;                     /* Warna teks tombol */
    padding: 10px 20px;                /* Padding atas/bawah 10px, kanan/kiri 20px */
    font-size: 14px;                  /* Ukuran font */
    text-decoration: none;            /* Menghilangkan garis bawah jika ada */
    border-radius: 10px;              /* Membuat sudut tombol melengkung */
    transition: background-color 0.3s ease; /* Efek transisi saat hover */
    width: 224px;                     /* Lebar tombol mengikuti lebar teks */
    height: 37px;                     /* Tinggi otomatis mengikuti isi tombol */
    margin: 0 auto;                   /* Membuat tombol terletak di tengah secara horizontal */
    font-weight: 600;
}





/* Styling untuk Konten Section 2 */
/* Kontainer utama */

.featured-products {
    width: 100%;
    text-align: center;
    color: #5C5C5C;
    font-size: 48px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 57.60px;
    word-wrap: break-word;
    padding-top: 54px;
    padding-bottom: 36px;
}

.content-fupo {
    pading top: 22px;
    width: 100%; /* Agar kontainer memenuhi lebar layar */
    max-width: 100%; /* Membatasi lebar maksimal kontainer */
    height: 739px; /* Tinggi kontainer */
    margin: 0 auto; /* Agar kontainer terpusat */
    display: flex; /* Flexbox untuk kolom kiri dan kanan */
}

/* Kolom Kiri (Living Room dan Dining Room) */
.left-column {
    flex: 1; /* Membagi lebar kolom kiri secara proporsional */
    display: flex;
    flex-direction: column;
}

/* Kolom Kanan (Office) */
.right-column {
    width: 720px; /* Lebar kolom kanan */
    height: 739px; /* Menyesuaikan tinggi kolom kanan */
    display: flex;
    flex-direction: column;
}

/* Gambar Overlay */
.overlay-fupo {
    position: relative;
    width: 100%; /* Memastikan gambar mengisi lebar kontainer */
    height: 100%; /* Memastikan gambar mengisi tinggi kontainer */
    overflow: hidden;
}

/* Gambar di dalam overlay */
.overlay-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Agar gambar mengisi kontainer tanpa distorsi */
}

/* Overlay gelap di atas gambar */
.overlay-fupo::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Overlay gelap */
    z-index: 1; /* Agar overlay berada di atas gambar */
}

/* Teks di pojok kiri bawah */
.overlay-text {
    position: absolute;
    bottom: 20px; /* Menempatkan teks 20px dari bawah */
    left: 20px;   /* Menempatkan teks 20px dari kiri */
    color: white;
    font-size: 2.5rem; /* Ukuran teks */
    font-weight: bold;
    z-index: 2; /* Teks berada di atas overlay */
    text-align: left; /* Menyusun teks ke kiri */
    width: 90%; /* Menjamin teks tidak keluar dari batas */
    word-wrap: break-word; /* Menghindari teks melampaui kontainer */

}

.btn-see-all{
display: flex;                    /* Menggunakan flexbox untuk tombol */
    justify-content: center;          /* Menyusun teks di tengah secara horizontal */
    align-items: center;              /* Menyusun teks di tengah secara vertikal */
    background-color: #333333;        /* Warna latar belakang tombol */
    color: white;                     /* Warna teks tombol */
    padding: 10px 20px;                /* Padding atas/bawah 10px, kanan/kiri 20px */
    font-size: 14px;                  /* Ukuran font */
    text-decoration: none;            /* Menghilangkan garis bawah jika ada */
    border-radius: 10px;              /* Membuat sudut tombol melengkung */
    transition: background-color 0.3s ease; /* Efek transisi saat hover */
    width: 224px;                     /* Lebar tombol mengikuti lebar teks */
    height: 37px;                     /* Tinggi otomatis mengikuti isi tombol */
    margin: 0 auto;                   /* Membuat tombol terletak di tengah secara horizontal */
    font-weight: 600;
}

   /* Mengatur posisi teks di pojok kiri bawah */
   .overlay-text {
        bottom: 20px; /* Menurunkan teks sedikit */
        left: 15px;   /* Memberikan margin kiri */
    }

    /* Mengurangi padding bawah pada container */
    .container-fluid {
        padding-left: 0;  /* Menghilangkan padding kiri */
        padding-right: 0; /* Menghilangkan padding kanan */
        padding-bottom: 2px; /* Mengurangi padding bawah agar tombol lebih dekat ke konten */
        max-width: 100%; /* Pastikan lebar kontainer tidak lebih dari layar */
        box-sizing: border-box; /* Menjamin padding dihitung dalam lebar kontainer */
    }

    /* Menyesuaikan tinggi konten Office agar sejajar dengan Living Room dan Dining Room */
    . .overlay-fupo {
       right-column height: 720px; /* Sesuaikan tinggi konten Office */
    }

    /* Mengurangi margin bawah pada Office */
    .right-column {
        margin-bottom: 20px; /* Mengurangi jarak bawah pada kolom Office */
    }

    /* Mengatur jarak antara tombol dan konten */
    .d-flex.justify-content-center {
        margin-top: 2px; /* Menyesuaikan jarak atas tombol */
    }

    /* Menyembunyikan scroll horizontal */
    body {
        overflow-x: hidden; /* Mencegah scroll horizontal */
    }



@media (max-width: 768px) {

    .content-fupo{
        display: flex;
    justify-content: center; /* Memusatkan secara horizontal */
    align-items: center;    /* Memusatkan secara vertikal */

    }
    .left-column {
        width: 370px; /* Lebar kolom kanan */
    height: 216px; /* Menyesuaikan tinggi kolom kanan */
    display: flex;
    flex-direction: column;
}

/* Kolom Kanan (Office) */
.right-column {
    width: 370px; /* Lebar kolom kanan */
    height: 216px; /* Menyesuaikan tinggi kolom kanan */
    display: flex;
    flex-direction: column;
}

/* Gambar Overlay */
.overlay-fupo {
    position: center;
    width: 370px; /* Lebar kolom kanan */
    height: 216px; /* Menyesuaikan tinggi kolom kanan */
    overflow: hidden;
}

/* Gambar di dalam overlay */
.overlay-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Agar gambar mengisi kontainer tanpa distorsi */
}

/* Overlay gelap di atas gambar */
.overlay-fupo::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Overlay gelap */
    z-index: 1; /* Agar overlay berada di atas gambar */
}

/* Teks di pojok kiri bawah */
.overlay-text {
    position: absolute;
    bottom: 20px; /* Menempatkan teks 20px dari bawah */
    left: 20px;   /* Menempatkan teks 20px dari kiri */
    color: white;
    font-size: 2.5rem; /* Ukuran teks */
    font-weight: bold;
    z-index: 2; /* Teks berada di atas overlay */
    text-align: left; /* Menyusun teks ke kiri */
    width: 90%; /* Menjamin teks tidak keluar dari batas */
    word-wrap: break-word; /* Menghindari teks melampaui kontainer */

  }
/* Tombol See All Catalog */
.btn-see-all {
    display: flex;                    /* Menggunakan flexbox untuk tombol */
    justify-content: center;          /* Menyusun teks di tengah secara horizontal */
    align-items: center;              /* Menyusun teks di tengah secara vertikal */
    background-color: #333333;        /* Warna latar belakang tombol */
    color: white;                     /* Warna teks tombol */
    padding: 10px 20px;                /* Padding atas/bawah 10px, kanan/kiri 20px */
    font-size: 14px;                  /* Ukuran font */
    text-decoration: none;            /* Menghilangkan garis bawah jika ada */
    border-radius: 10px;              /* Membuat sudut tombol melengkung */
    transition: background-color 0.3s ease; /* Efek transisi saat hover */
    width: 224px;                     /* Lebar tombol mengikuti lebar teks */
    height: 37px;                     /* Tinggi otomatis mengikuti isi tombol */
    margin: 0 auto;                   /* Membuat tombol terletak di tengah secara horizontal */
    font-weight: 600;
}



/* Mengatur posisi tombol di tengah */
.d-flex.justify-content-center {
    display: flex;
    justify-content: center;  /* Menjaga tombol tetap di tengah */
    align-items: center;      /* Vertikal center */
}
}

/* Responsif untuk ukuran layar mobile */
@media (max-width: 767px) {

    .featured-products {
    width: 100%;
    text-align: center;
    color: #5C5C5C;
    font-size: 24px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 57.60px;
    word-wrap: break-word;
    padding-top: 54px;
    padding-bottom: 36px;
}

    /* Mengubah layout menjadi satu kolom di perangkat mobile */
    .content-fupo {
        flex-direction: column; /* Mengubah layout menjadi vertikal pada perangkat mobile */
        height: auto; /* Mengatur tinggi agar konten bisa menyesuaikan */
        padding: 0; /* Menghilangkan padding pada kontainer */
        width: 100%; /* Menjamin lebar kontainer 100% pada layar kecil */
    }

    /* Menyesuaikan gambar agar tampil dengan baik pada layar kecil */
    .overlay-image {
        width: 100%; /* Memastikan gambar tidak melebihi lebar layar */
        height: auto; /* Menjaga aspek rasio gambar */
        object-fit: cover;  /* Pastikan gambar tetap terpotong dengan baik */
    }

    /* Menyesuaikan ukuran teks di mobile */
    .overlay-text h2 {
        font-size: 20px; /* Menurunkan ukuran font pada mobile */
    }

    /* Tombol See All Catalog */
    .btn-see-more {
    display: flex;                    /* Menggunakan flexbox untuk tombol */
    justify-content: center;          /* Menyusun teks di tengah secara horizontal */
    align-items: center;              /* Menyusun teks di tengah secara vertikal */
    background-color: #333333;        /* Warna latar belakang tombol */
    color: white;                     /* Warna teks tombol */
    padding: 10px 20px;                /* Padding atas/bawah 10px, kanan/kiri 20px */
    font-size: 14px;                  /* Ukuran font */
    text-decoration: none;            /* Menghilangkan garis bawah jika ada */
    border-radius: 10px;              /* Membuat sudut tombol melengkung */
    transition: background-color 0.3s ease; /* Efek transisi saat hover */
    min-width: 188px; /* Lebar minimal */
    min-height: 40px; /* Tinggi minimal */             /* Tinggi otomatis mengikuti isi tombol */
    margin: 0 auto;                   /* Membuat tombol terletak di tengah secara horizontal */
    font-weight: 600;
}
    }









 /* Styling untuk Konten Section 3 */
/* Default Styles */
.project-title {
    color: #323131;
    font-size: 48px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 57.60px;
    padding-bottom: 23px;
    padding-top: 78px;


}

.project-subtitle {
    color: #7A7474;
    font-size: 28px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 600;
    line-height: 33.60px;
    padding-bottom: 23px;
}

.project-description {
    color: #333333;
    font-size: 18px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 600;
}

/* Styling untuk kolom gambar */
.col-12.d-flex.justify-content-center {
    padding-top: 20px; /* Jarak atas */
    padding-bottom: 20px; /* Jarak bawah */
    display: flex; /* Mengatur flexbox */
    justify-content: center; /* Memusatkan konten secara horizontal */
}

/* Styling untuk gambar */
.project-image {
    max-width: 100%; /* Gambar responsif (tidak lebih besar dari kontainer) */
    height: auto; /* Menjaga proporsi gambar */
    border-radius: 8px; /* Membuat sudut gambar melengkung */
    object-fit: cover; /* Gambar tetap proporsional */
}


@media (max-width: 768px) {
    .project-title {
        color: #323131;
        font-size: 24px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: bold;
        padding-bottom: 0px;
        padding-top: 0px;

    }

    .project-subtitle {
        color: #7A7474;
        font-size: 18px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 600;
        margin-bottom: 15px; /* Jarak bawah */
    }

    .project-description {
        color: #333333;
        font-size: 16px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 600;
        margin-bottom: 20px; /* Jarak bawah */
    }

    /* Styling untuk kolom gambar */
    .col-12.d-flex.justify-content-center {
        padding-top: 30px; /* Jarak atas */
        padding-bottom: 30px; /* Jarak bawah */
        display: flex; /* Mengatur flexbox */
        justify-content: center; /* Memusatkan konten secara horizontal */
    }

    /* Styling untuk gambar */
    .project-image {
        max-width: 100%; /* Gambar responsif (tidak lebih besar dari kontainer) */
        height: auto; /* Menjaga proporsi gambar */
        border-radius: 8px; /* Membuat sudut gambar melengkung */
        object-fit: cover; /* Gambar tetap proporsional */
        margin-top: 10px; /* Tambahkan jarak atas */
        margin-bottom: 10px; /* Tambahkan jarak bawah */
    }
}




 /* Styling untuk Konten Section 4 */

/* Mengatur layout dan tampilan kontainer utama */
.containerBlog {
    max-width:100%; ;
    padding: 20px;
}

/* Mengatur judul dan garis pemisah */
.container.Blog > div > div:first-child {
    color: #333333;
    font-size: 40px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 48px;
    word-wrap: break-word;
}

.container.Blog > div > div:nth-child(2) {
    height: 1px;
    background: #999999;
}

/* Mengatur Section (Konten Info dan Promosi) */
.container.Blog > div > div:nth-child(3),
.container.Blog > div > div:nth-child(4),
.container.Blog > div > div:nth-child(5) {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

/* Pengaturan gambar */
img {
    border-radius: 8px;
    max-width: 100%;
    object-fit: cover;
}

/* Menyesuaikan ukuran gambar di tampilan mobile */
@media (max-width: 768px) {
    /* Layout Kontainer dan Judul */


    /* Mengubah Flexbox menjadi satu kolom di mobile */
    .row {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }


    /* Mengatur gambar untuk responsif */
    img {
        max-width: 100%; /* Gambar responsif (tidak lebih besar dari kontainer) */
        height: auto; /* Memastikan gambar proporsional */
        object-fit: cover;
    }

    /* Mengurangi ukuran teks di bawah judul */
    .container.Blog .row > div > div:nth-child(2) {
        font-size: 14px; /* Menurunkan ukuran font teks */
        line-height: 18px; /* Menyesuaikan tinggi baris */
    }

    /* Menambahkan padding dan margin untuk pemisah garis */
    .container.Blog > div > div:nth-child(2) {
        margin: 10px 0; /* Menambahkan jarak atas dan bawah garis pemisah */
    }

    /* Mengatur lebar kontainer informasi */
    .container.Blog .row > div {
        width: 100%; /* Memastikan kolom mengisi lebar penuh */
    }



    /* Menyelaraskan semua elemen pada center */
    .container.Blog .row > div {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start; /* Rata kiri */
    }

    /* Mengatur urutan gambar ke atas menggunakan Flexbox */
    .container.Blog .row > div img {
        order: -1; /* Memindahkan gambar ke atas di perangkat mobile */
    }

    /* Mengatur teks agar rata kiri */
    .container.Blog .row > div > div:nth-child(2) {
        text-align: left; /* Menyelaraskan teks ke kiri */
    }

    /* Pengaturan jarak antar Section */
    .container.Blog > div > div {
        gap: 20px; /* Menambah jarak antar section */
    }
}


/* Styling untuk kontainer utama */
.container.section-3 {
    display: flex;
    justify-content: center; /* Memusatkan konten secara horizontal */
    align-items: center;    /* Memusatkan konten secara vertikal */
    padding: 20px 0;        /* Tambahkan padding atas dan bawah */
}




.container.Blog {
    max-width: 1164px; /* Pastikan elemen induk memiliki lebar yang sesuai */
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 20px;
    max-width: 1164px;


}

.info-promotions {
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 20px;
    max-width: 1164px;
}

.title {
    text-align: left;
    font-size: 28px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    color: #232E52;
}

.divider {
    height: 2px;
    background: #232E52;
    width: 100%;
    margin-top: 10px;
}



.content-post {
    text-align: left;
    display: flex;
    align-items: center;
    gap: 60px;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
}

.text-content {
    text-align: left;
    flex: 1 1 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
    max-width: 610px;
}

.text-details {
    text-align: left;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.date {
    text-align: left;
    color: #232E52;
    font-size: 14px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 400;
    line-height: 16.8px;
}

.headline {
    text-align: left;
    color: #5C5C5C;
    font-size: 28px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 33.6px;
    word-wrap: break-word;
}

.description {
    text-align: left;
    color: #232E52;
    font-size: 16px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 400;
    line-height: 19.2px;
}

.content-image {

    height: 210px;
    border-radius: 8px;
    max-width: 100%;
    object-fit: cover;
}

@media (max-width: 768px) {
    .container,.Blog {
    text-align: left;
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 20px;

}

.info-promotions {
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 20px;
    width: 100%;
}

.title {
    text-align: left;
    font-size: 18px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    color: #232E52;
}

.divider {
    height: 2px;
    background: #232E52;
    width: 100%;
    margin-top: 10px;
}



.content-post {
    text-align: left;
    display: flex;
    align-items: center;
    gap: 60px;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
}

.text-content {
    text-align: left;
    flex: 1 1 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
    max-width: 610px;
}

.text-details {
    text-align: left;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.date {
    text-align: left;
    color: #232E52;
    font-size: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 400;
    line-height: 16.8px;
}

.headline {
    text-align: left;
    color: #5C5C5C;
    font-size: 18px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    line-height: 33.6px;
    word-wrap: break-word;
}

.description {
    text-align: left;
    color: #232E52;
    font-size: 14px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 400;
    line-height: 19.2px;
}

.content-image {
    width: 100%;
    height: 198px;
    border-radius: 8px;

    object-fit: cover;
}

}





    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<body>
    <!-- Menyertakan Navbar -->
    @include('components.navbar')

    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>


 <!-- The slideshow/carousel -->
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1445510861639-5651173bc5d5?q=80&w=1959&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Los Angeles" class="d-block" style="width:100%" height="456px">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1506377295352-e3154d43ea9e?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Chicago" class="d-block" style="width:100%" height="456px">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1517467139951-f5a925c9f9de?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="New York" class="d-block" style="width:100%" height="456px">
    </div>
  </div>



   <!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <i class='fas fa-chevron-circle-left' style='color:rgb(255, 255, 255)'></i>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <i class='fas fa-chevron-circle-right' style='color:rgb(255, 255, 255)'></i>
  </button>
</div>

    <!-- Konten Section 1 -->
    <div class="container section-1">
        <div class="row">
            <!-- Kolom Gambar -->
            <div class="col-lg-6 mb-4 img1">
                <img src="/img/logo.png" alt="Produk Unggulan" class="img-fluid custom-img">
            </div>

            <!-- Kolom Teks dan Tombol -->
            <div class="col-lg-12 text-box">
                <p>
                    As a renowned specialist in furniture and interior design, PT LO:ISTA Indonesia was established in 2011. With the tagline "Furniture & Interior Design," we believe that every space reflects the unique touch of its owner. LOISTA is here to bring your dream concepts to life in every piece of furniture and interior design.
                    Our commitment is to consistently deliver excellent service with high-quality products that breathe new life and warmth into every space. PT LO:ISTA Indonesia prides itself on infusing a modern, exclusive touch into every product, from kitchens, living rooms, dining areas, bedrooms, and offices to decorative accessories.
                    To ensure the best service, PT LO:ISTA Indonesia operates a showroom in a strategic location in Tangerang. We offer comprehensive solutions for furniture, home interior design, and decoration to meet your creative needs.
                </p>
                <a href="#" class="btn-see-more">See About Our Company</a>
            </div>
        </div>
    </div>

    <div class="featured-products">Featured Products</div>

     <!-- Konten Section 2 -->
     <div class="content-fupo">

        <!-- Kolom Kiri (Living Room + Dining Room) -->
        <div class="left-column">
            <!-- Living Room Section -->
            <div class="overlay-fupo">
                <img class="overlay-image" src="https://images.unsplash.com/photo-1720048169987-2fd6bd1bf2b4?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Living Room">
                <div class="overlay-text">
                    <h2>Living Room</h2>
                </div>
            </div>

            <!-- Dining Room Section -->
            <div class="overlay-fupo">
                <img class="overlay-image" src="https://images.unsplash.com/photo-1731370963535-aa6e57ed40f6?q=80&w=1884&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dining Room">
                <div class="overlay-text">
                    <h2>Dining Room</h2>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan (Office) -->
        <div class="right-column">
            <div class="overlay-fupo">
                <img class="overlay-image" src="https://images.unsplash.com/photo-1719937206333-dceea3c5564d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Office">
                <div class="overlay-text">
                    <h2>Office</h2>
                </div>
            </div>
        </div>
    </div>


   <!-- Tombol See All Catalog -->
<div class="d-flex justify-content-center mt-4">
    <a href="#" class="btn-see-all">See All Catalog</a>
</div>







 <!--  Konten Section  3 -->
    <!-- Konten Section 3 -->
<div class="container section-3 d-flex justify-content-center align-items-center">
    <div class="row w-100">
        <!-- Text Section (optional) -->
        <div class="col-12 text-center mb-4">
            <div class="project-title">
                Our Projects
            </div>
            <div class="project-subtitle">
                100+ Completed Projects
            </div>
            <div class="project-description">
                Our projects are typically aimed at creating and customizing residential and commercial spaces, using our decades of expertise and creating ideas in the field of interface design.
            </div>
        </div>

        <!-- Image Section -->
        <div class="col-12 d-flex justify-content-center">
            <img class="img-fluid project-image" src="\img\section 88.png" alt="Project Image" />
        </div>


    </div>
</div>


<!-- Konten Section 4 -->

<div class="container Blog d-flex justify-content-center align-items-center">
    <div class="row w-101">
        <div class="info-promotions">
            <div class="container-fluid">
                <div class="title">Info & Promotions</div>
                <div class="divider"></div>
            </div>
            <div class="horizontal-line"></div>

            <!-- Section 1 -->
            <div class="content-post">
                <div class="text-content">
                    <div class="text-details">
                        <div class="date">August 13, 2021</div>
                        <div class="headline">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                    </div>
                    <div class="description">
                        Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                    </div>
                </div>
                <img class="content-image" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Section Image">
            </div>

            <!-- Section 2 -->
            <div class="content-post">
                <div class="text-content">
                    <div class="text-details">
                        <div class="date">August 13, 2021</div>
                        <div class="headline">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                    </div>
                    <div class="description">
                        Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                    </div>
                </div>
                <img class="content-image" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Section Image">
            </div>

            <!-- Section 3 -->
            <div class="content-post">
                <div class="text-content">
                    <div class="text-details">
                        <div class="date">August 13, 2021</div>
                        <div class="headline">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                    </div>
                    <div class="description">
                        Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                    </div>
                </div>
                <img class="content-image" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Section Image">
            </div>

            <div class="horizontal-line"></div>
        </div>
    </div>
</div>



  <!-- Menyertakan Navbar -->
  @include('components.footer')
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

