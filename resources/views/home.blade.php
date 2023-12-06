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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Posicare</title>

    <style>
    
      section{
        margin-top: 4rem;
      }
      .carousel-caption {
        position: absolute;
        top: 43%;
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
        margin-top: 30px; /* Spasi antara teks dan tombol */
      }
      .transparent-img {
        opacity: 0.7; /* Ubah angka sesuai tingkat transparansi yang diinginkan (0 - 1) */
      }
      .btn-custom {
      /* Menyesuaikan warna latar dan teks pada tombol */
      background-color: #145DA0; 
      border-color: #145DA0;
      }
      .icon-white {
        color: white; /* Mengubah warna ikon menjadi putih */
      }
      h2 {
        font-size: 30px; /* Ukuran font yang sesuai */
        /* Tambahan gaya teks lainnya jika diperlukan */
      }
      
  </style>
  </head>
  <body>


    <!-- Jumbotron -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/img/bg cr.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block container-fluid text-center"> <!-- Menggunakan kelas text-center -->
        <div class="row align-items-center d-flex justify-content-star h-100"> <!-- Membuat row untuk mengatur posisi vertikal -->
          <div class="col-md-8">
            <h1 style="color: rgb(252, 252, 252); margin-bottom: 25px;">Posicare (Posyandu iCare)</h1>
            <h2 style="color: rgb(253, 250, 250); font-weight: normal; margin-bottom: 30px;">Untuk pengelolaan posyandu yang lebih efektif dan efisien serta bertujuan untuk meningkatkan efektivitas pemantauan kesehatan, pencatatan data, dan pengelolaan informasi terkait dengan pertumbuhan anak-anak dan kesehatan ibu hamil melalui pemanfaatan teknologi</h2>
            <div class="row d-flex justify-content-center">
              <div class="col-xl-1">
                <form action="/register"> <!-- Ubah action ke "/register" -->
                  <button type="submit" class="btn btn-primary btn-custom ps-3 pe-3 pt-1 pb-1">Daftar</button>
                </form>
              </div>
              <div class="col-xl-2">
                  <form action="/login"> <!-- Ubah action ke "/login" -->
                    <button type="submit" class="btn btn-primary btn-custom ps-3 pe-3 pt-1 pb-1 {{ ($active === 'login' ? 'active' : '') }}"> Login
                    </button>
                  </form>
              </div>
              </div>
            </div>
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
      <div class="row justify-content-center mt-5" >
      <div class="col-5 info-panel" style="margin-top: -90px; background-color: #fff; border: 1px solid #ccc; padding: 15px; border-radius: 10px;">
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
      <div class="row workingspace " style="margin-top: 100px;">
      <div class="col-lg-6">
        <img src="admin/img/bayi .jpg" alt="Working Space" class="img-fluid" style="border-radius: 30px;">
      </div>
      <div class="col-lg-5" >
        <h2 style="font-size: 48px;" class="fw-bold" >HINDARI <span class="fw-lighter">STUNTING</span> PADA <span class="fw-bold">ANAK</span></h2>
        <p style="font-size: 18px;">Stunting berpotensi memperlambat perkembangan otak, dengan dampak jangka panjang berupa keterbelakangan mental, rendahnya kemampuan belajar, dan risiko serangan penyakit kronis seperti diabetes, hipertensi, hingga obesitas</p>
        <a href="halaman_lengkap.html" class="btn btn-danger tombol" style="background-color: #54B4D3; border-color: #54B4D3;">Lengkapnya</a>
      </div>
    </div>

      <!-- akhir Workingspace -->


      <!-- Testimonial -->
      <section>
        <div class="container mt-5">
          <div class="row d-flex justify-content-center ">
            <div class="col">
              <h1 class="fst-italic text-center"> "Setiap langkah kecil yang kita ambil untuk mendukung kesehatan anak-anak dan ibu hamil adalah investasi besar bagi kesejahteraan masa depan kita."
              </h1>
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