<?
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title><?= $data['judul'] ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link href="dashboard.css" rel="stylesheet">
  </head>
    
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?= BASEURL; ?>/mahasiswa/">ADMISILAB</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="<?= BASEURL; ?>/login/logut">Sign out</a>
      </div>
    </div>
  </header>

  <body>
    <div class="container">
      <h1 class="text-center my-5">Form Daftar Matapraktikum</h1>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <?php Flasher::flash() ?>
            <!-- <form  action="<?= BASEURL ?>/Login/login" method="post">
            <form action="<?= BASEURL; ?>/Matapraktikum/tambahData" method="post">  -->
            <div class="mb-3 row">
              <label for="kode_mp" class="col-sm-3 col-form-label">Nim</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="kode_mp" name="kode_mp">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="matapraktikum" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="matapraktikum" name="matapraktikum">
              </div>
            </div>
            
            <div class="mb-3 row">

              <label for="matapraktikum" class="col-sm-3 col-form-label">Matapraktikum</label>
              <div class="col-sm-9">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Matapraktikum</option>
                  <option value="1">Pemrograman Berorientasi Objek</option>
                  <option value="2">Pemrograman Web</option>
                  <option value="3">Basis Data I</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jenis_mp" class="col-sm-3 col-form-label">Jenis</label>
              <div class="col-sm-9">
                <select  class="form-control" id="jenis_mp" name="jenis_mp">
                  <option selected>Jenis Matapraktikum</option>
                  <option value="reguler">Reguler</option>
                  <option value="eksekutif">Eksekutif</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="biaya" class="col-sm-3 col-form-label">Biaya</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="biaya" name="biaya">
              </div>
            </div>
          </div>
          <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-danger">Batal</button>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </div>
        
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>  
  </body>
</html>