<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Registrasi</h1>
        
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Matapraktikum</th>
              <th scope="col">Jenis</th>
              <th scope="col">Biaya</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
         
            <?php
            foreach ($data['mp'] as $i => $mp):
            ?> <tr>
              <td> <?=$i+1?> </td>
              <td> <?=$mp['matapraktikum']?> </td>
              <td> <?=$mp['jenis_mp'];?> </td> 
              <td> <?=$mp['biaya'];?> </td> 
              <th scope="col">
                <a class="btn btn-primary" href="<?= BASEURL; ?>/registrasi/detailRegistrasi/<?=$mp['id_matapraktikum']?>">Detail</a>
              </th>
            </tr>
            <?php endforeach ;?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 </body>
</html>
