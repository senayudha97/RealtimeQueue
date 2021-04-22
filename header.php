<?php include 'global_var.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>SI Antrian</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Icon -->
  <link rel="stylesheet" href="assets/fonts/line-icons.css">
  <!-- Owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.css">

  <!-- Animate -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" href="assets/css/responsive.css">

  <script src="assets/js/jquery-min.js"></script>
</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item active">
              <a class="nav-link" href="#hero-area">
                Beranda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pelayanan">
                Pelayanan
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#pricing">
                Antrian
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#features">
                Panduan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">
                Kontak
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div class="contents">
              <h4 class="mb-3">REALTIME ANTRIAN COUNTER</h4>
              <div class="row">
                <div class="col-sm-6">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <center>
                        <h5 class="card-title mb-3">KTP</h5>
                        <h3 class="card-subtitle mb-2 text-muted mb-5" id="rtktp">0</h3>
                        <p>Maksimal Pelayanan Hari Ini = 150</p>
                      </center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <center>
                        <h5 class="card-title mb-3">KK</h5>
                        <h3 class="card-subtitle mb-2 text-muted mb-5" id="rtkk">0</h3>
                        <p>Maksimal Pelayanan Hari Ini = 150</p>
                      </center>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header-button">
                <a href="#pelayanan" class="btn btn-common">Ambil Antrian</i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <div class="intro-img">
              <img class="img-fluid" src="assets/img/headerfoto.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End -->
  </header>
  <!-- Header Area wrapper End -->

  <script>
    var i = 0;
    setInterval(() => {
      if (i <= 150) {
        $('#rtktp').text(i += Math.floor(Math.random() * 10));
        $('#rtkk').text(i += Math.floor(Math.random() * 10));
      } else {
        $('#rtktp').text(150);
        $('#rtkk').text(150);
      }
    }, 100);
  </script>