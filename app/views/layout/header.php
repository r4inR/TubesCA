<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $d5ata['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid mx-3 mt-2"  >
  
  
    <a class="navbar-brand" href="<?=BASEURL?>">ADMISILAB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=BASEURL?>">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/alurPendaftaran">Alur Pendaftaran</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/contactUs">Hubungi Kami</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-dark me-2" type="button" href="<?=BASEURL?>/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>