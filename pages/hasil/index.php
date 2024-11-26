<?php
require("../server/functions.php");
require("../server/template/templating.php");
$tabel = getDataPaslon();
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D6DFC" />
  <meta name="display" content="standalone" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Google Fonts - Lato -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style/hasil.css" type="text/css" media="all" />
  <link rel="stylesheet" href="../../assets/style/navbar-style.css" type="text/css" media="all" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <title>
  Voting - Sistem E Voting HMBM ITERA
  </title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-md">
      <a class="navbar-brand" href="#">
      <img src="http://localhost/evote/assets/img/hmbm.png" width="50" />
        E-VOTING HMBM ITERA
      </a>
    </div>
  </nav>

  <section class="container container-md">
    <div id="wellcome-banner" class="row px-3 py-2 bg-white text-center mx-auto rounded shadow-sm border border-5 border-bottom-0 border-top-0 border-end-0 border-primary mt-3">
      <h2 class="fw-bold">Halaman Hasil</h2>
      <p>
      Pemilihan Umum Ketua dan Wakil Ketua Umum HMBM ITERA Periode 2024/2025
      </p>
    </div>
  </section>

  <section id="cards" class="container container-md mb-3 d-flex flex-wrap flex-md-nowrap+">

    <!-- CARDS -->
    <?php
      foreach ($tabel as $row) {
        printHasil($row);
      }
    ?>
  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- Login .js -->
  <script src="script/hasil.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>