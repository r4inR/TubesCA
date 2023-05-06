<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Registrasi</h1>
      </div>
    
        <!-- <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Mata Praktikum</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data['regis'] as $i => $regis) :
              ?>
              <tr>
                  <td scope="col"> <?=$i+1?> </td>
                  <td scope="col"> <?=$regis['nama_lengkap']?> </td>
                  <td scope="col"> <?=$regis['matapraktikum']?> </td>
                  <td scope="col"> <?=$regis['status']?> </td>
                  <td scope="col">
                    <button type="submit" class="btn btn-success" onclick="location.href='<?= BASEURL; ?>Registrasi/setLunas/'">Lunas</button>
                    <button type="submit" class="btn btn-warning">Belum Bayar</button>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                  </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div> -->


        <h5>Pembayaran Belum Bayar</h5>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Mata Praktikum</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            
            foreach ($data['blm_lunas'] as $i => $regis) :
            ?>
            <tr>
                <td scope="col"> <?=$i+1?> </td>
                <td scope="col"> <?=$regis['nama_lengkap']?> </td>
                <td scope="col"> <?=$regis['matapraktikum']?> </td>
                <td scope="col"> <?=$regis['status']?> </td>
                <td scope="col">
                  <button type="button" class="btn btn-success">Lunas</button>
                  <button type="button" class="btn btn-danger">Tolak</button>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      

    
      <div class="section" id="Lunas">
      <h5>Pembayaran Lunas</h5>
        <div class="table-responsive">
          <table class="table table-striped table-sm">

            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Mata Praktikum</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
            <?php
             foreach ($data['lunas'] as $i => $mp) :
              ?>
              <tr>
                  <td scope="col"><?=$i+1?></td>
                  <td scope="col"><?=$mp['nama_lengkap']?></td>
                  <td scope="col"><?=$mp['matapraktikum']?></td>
                  <td scope="col"><?=$mp['status']?></td>
                  <td scope="col">
                    <!-- <button type="button" class="btn btn-warning">Belum Bayar</button> -->
                    <button type="button" class="btn btn-danger">Tolak</button>
                  </td>
              </tr>
              <?php endforeach;?>
            </tbody>

          </table>
        </div>
      </div>

      <div class="section" id="Tolak">
      <h5>Pembayaran Tolak</h5>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Mata Praktikum</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            
            foreach ($data['ditolak'] as $i => $regis) :
            ?>
            <tr>
                <td scope="col"><?=$i+1?></td>
                <td scope="col"><?=$regis['nama_lengkap']?></td>
                <td scope="col"><?=$regis['matapraktikum']?></td>
                <td scope="col"><?=$regis['status']?></td>
                <td scope="col">
                  
                <button type="button" class="btn btn-success">Lunas</button>
                  <!-- <button type="button" class="btn btn-warning">Belum Bayar</button> -->
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>


    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 </body>
</html>
