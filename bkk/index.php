<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
  <title>BKK Smk N 1 Blora</title>
  <link rel="icon" href="https://smkn1blora.sch.id/new/media_library/images/e6edee3f2c92fe9a428ad8c1872d5a12.png">
</head>

<header>
  <!-- header -->
  <div class="container-fluid top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="header-atas">
            <img src="https://smkn1blora.sch.id/new/media_library/images/e6edee3f2c92fe9a428ad8c1872d5a12.png" class="d-inline" style="float: left;">
            <ul class="d-inline">
              <h5 class="font-weight-bold brand">Unggul Dan Eksis</h5>
              <p>Unggul dan Eksis di Era Digitalisasi Yang Berkearifan Lokal </p>
            </ul>
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
          <ul class="list-inline float-right top-right">
            <div class="putih">
              <li class="list-inline-item pl-3 pr-0"><i class="fa fa-envelope"></i> </i> smk1blora@yahoo.com</li>
              <li class="list-inline-item pl-3 pr-0"><i class="fa fa-phone"></i> 0296531565</li>
              <li class="list-inline-item pl-3 pr-0"><a href="https://smkn1blora.sch.id/new/feed"><i class="fa fa-rss"></i> RSS</a></li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="nav_bar">
    <div class="container">
      <a class="navbar-brand" href="#">BKK Smk N 1 Blora</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<body>
  <div>
    <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];

      switch ($page) {
        case 'home':
          include "pages/beranda.php";
          break;
        case 'login':
          include "pages/login.php";
          break;
        case 'register':
          include "pages/register.php";
          break;
        default:
          echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
          break;
      }
    } else {
      include "pages/beranda.php";
    }

    ?>
  </div>

  <footer>
    <div class="card-body bg-primary">
      <div class="container">
        <h5 class="card-title" style="color: black; font-weight:700">Hubungi Kami</h5>
        <p style="color: whitesmoke;">BKK SMK Negeri 1 Blora &sdot; SMK Unggul dan Eksis di Era Digitalisasi Yang Berkearifan Lokal</p>
        <dl class="row" style="color: whitesmoke;">
          <dt class="col-lg-4 col-md-4 col-sm-12"><span class="fa fa-map-marker"></span> Alamat</dt>
          <dd class="col-lg-8 col-md-8 col-sm-12">Jl. Gatot Subroto KM. 4,1 Tunjungan, Blora</dd>
          <dt class="col-lg-4 col-md-4 col-sm-12"><span class="fa fa-phone"></span> Telepon</dt>
          <dd class="col-lg-8 col-md-8 col-sm-12">0296531565</dd>
          <dt class="col-lg-4 col-md-4 col-sm-12"><span class="fa fa-envelope"></span> Email</dt>
          <dd class="col-lg-8 col-md-8 col-sm-12">smk1blora@yahoo.com</dd>
      </div>
    </div>
    <div class="card-footer text-muted" style="background: #014585;">
      <h5 style="color: whitesmoke;">Copyright ©2021 BKK SMK Negeri 1 Blora All rights reserved.</h5>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>