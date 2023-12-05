@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Posicare</title>

    <style>
      .carousel-caption {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        color: #fff; /* Warna teks */
      }

      .carousel-caption h5 {
        font-size: 2em; /* Ukuran font judul */
      }

      .carousel-caption p {
        font-size: 1.2em; /* Ukuran font deskripsi */
      }

      .carousel-caption a.btn {
        /* Gaya untuk tombol */
        margin-top: 20px; /* Spasi antara teks dan tombol */
      }
      .transparent-img {
        opacity: 0.7; /* Ubah angka sesuai tingkat transparansi yang diinginkan (0 - 1) */
      }
      .btn-custom {
      /* Menyesuaikan warna latar dan teks pada tombol */
      background-color: #54B4D3; 
      border-color: #54B4D3;
      }
      .icon-white {
        color: white; /* Mengubah warna ikon menjadi putih */
      }
      h2 {
        font-size: 24px; /* Ukuran font yang sesuai */
        /* Tambahan gaya teks lainnya jika diperlukan */
      }
      .button-container {
        display: flex;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) translateY(55px);;
      }

      .button-wrapper {
        margin-right: 35px;
      }
      .button-container .btn-custom {
              font-size: 18px; /* Mengurangi ukuran font tombol */
              padding: 12px 22px; /* Mengurangi padding tombol */
              margin-right: 35px; /* Memberikan jarak kanan pada tombol pertama */
      }
      .carousel-item img {
        width: 100%;
        height: auto;
      }
      .carousel-inner {
        width: 200%;
        max-width: 135%;
        margin-right: -24%; /* Menyesuaikan posisi carousel ke kanan */
        transform: translateX(-14%); /* Menggeser gambar ke kiri */
      }

  </style>
  </head>
  <body>

    <!-- Jumbotron -->
    
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="admin/img/bg cr.png" class="d-block w-100 " alt="...">
          <div class="carousel-caption d-none d-md-block container-fluid"> <!-- Tambahkan kelas text-left -->
            <h1 style="color: rgb(252, 252, 252);">Posicare (Posyandu iCare)</h1>
            <h2 style="color: rgb(253, 250, 250); font-weight: normal;">Untuk pengelolaan posyandu yang lebih efektif dan efisien serta bertujuan untuk meningkatkan efektivitas pemantauan kesehatan, pencatatan data, dan 
              pengelolaan informasi terkait dengan pertumbuhan anak-anak dan kesehatan ibu hamil melalui pemanfaatan teknologi.</h2>
              <div class="button-container ">
                <div class="button-wrapper">
                  <form action="halaman_pendaftaran.html">
                    <button type="submit" class="btn btn-primary btn-custom">Daftar</button>
                  </form>
                </div>
                <div class="button-wrapper">
                  <form action="halaman_login.html">
                  <button onclick="window.location.href='/login'" class="btn btn-primary btn-custom {{ ($active === 'login' ? 'active' : '') }}">Login</button>
                  </form>
                </div>
              </div>
              
              
          </div>
        </div>
      </div>
    </div>    
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-5 info-panel">
          <div class="row">
            <div class="col-sm text-center">
              <a href="link_ke_halaman_imunisasi_anak">
                <img src="admin/img/logo anak.png" alt="Employee" class="img-fluid float-left">
                <h4>Imunisasi Anak</h4>
              </a>
            </div>
            <div class="col-lg text-center">
              <a href="link_ke_halaman_stunting">
                <img src="admin/img/logo stunting.png" alt="Security" class="img-fluid float-left">
                <h4>Stunting Anak</h4>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info panel -->


      <!-- Workingspace -->
      <div class="row workingspace">
        <div class="col-lg-6">
          <img src="admin/img/bayi .jpg" alt="Working Space" class="img-fluid" style="border-radius: 30px;">
        </div>
        <div class="col-lg-5">
          <h2>Hindari <span>Stunting</span> Pada <span>Anak</span></h2>
          <p>Stunting berpotensi memperlambat perkembangan otak, dengan dampak jangka panjang berupa keterbelakangan mental, rendahnya kemampuan belajar, dan risiko serangan penyakit kronis seperti diabetes, hipertensi, hingga obesitas</p>
          <a href="halaman_lengkap.html" class="btn btn-danger tombol" style="background-color: #54B4D3; border-color: #54B4D3;">Lengkapnya</a>

        </div>
      </div>
      <!-- akhir Workingspace -->


      <!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"Setiap langkah kecil yang kita ambil untuk mendukung kesehatan anak-anak dan ibu hamil adalah investasi besar bagi kesejahteraan masa depan kita."</p>
          </div>
        </div>
        </div>
      </section>
      <!-- akhir Testimonial -->

    </div>
    <!-- akhir container -->

    <footer>
      <div class="mt-5 px-5 pt-5 w-100 d-flex justify-content-center" style="background-color: #54B4D3;">
        <p style="margin-right: 18em; font-size: 1.2em;" class="text-white">© Copyright 2023 Posicare</p>
        <a href="#" class="fa fa-facebook mx-2 icon-white" style="font-size: 1.5em;"></a>
        <a href="#" class="fa fa-twitter mx-2 icon-white" style="font-size: 1.5em;"></a>
        <a href="#" class="fa fa-instagram mx-2 icon-white" style="font-size: 1.5em;"></a>
        <a href="#" class="fa fa-youtube mx-2 icon-white" style="font-size: 1.5em;"></a>
        <p style="margin-left: 18em; font-size: 1.2em;" class="text-white">Terms Condition | Privacy Policy</p>
      </div>
    </footer>
    
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
@endsection