
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash();?>

    </div>
  </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-6">
        <h1 class="h2">List Matapraktikum</h1>
      </div>
      
      <button type="button" class="btn btn-primary mx-3 mt-2 me-md-2 mb-3" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data</button>
      <div class="table-responsive">
        <table class="table  table-sm table-bordered">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Mata Praktikum</th>
              <th scope="col">Jenis</th>
              <th scope="col">Biaya</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($data['mp'] as $i => $mp) : 
            ?>
              <tr>
                <td> <?=$i+1;?></td> 
                <td> <?=$mp['matapraktikum'];?></td> 
                <td> <?=$mp['jenis_mp'];?></td> 
                <td> <?=$mp['biaya'];?></td> 
                <td >
                  <button type="button" class="btn btn-success mx-2 mt-1 me-md-1" data-bs-toggle="modal" data-bs-target="#formDetail<?= $i?>">Detail</button>
                  <button type="button" class="btn btn-danger mx-2 mt-1 me-md-1" data-bs-toggle="modal" data-bs-target="#hapus<?= $i?>">Hapus</button>
                 </td>
              </tr>
            <?php endforeach ; ?>
          </tbody>
        </table>
        </div>
    </main>
  </div>
</div>


<!-- modal tambah data -->
<div class="modal fade" id="formModal" tabindex="-1" data-bs-backdrop="static"
aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Matapraktikum</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Matapraktikum/tambahData" method="post"> 
          <div class="mb-3 row">
            <label for="kode_mp" class="col-sm-3 col-form-label">Kode Matapraktikum</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="kode_mp" name="kode_mp">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="matapraktikum" class="col-sm-3 col-form-label">Matapraktikum</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="matapraktikum" name="matapraktikum">
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
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
   

<!-- modal detail -->
<?php foreach($data['mp'] as $i => $mp) :  ?>
  <div class="modal fade" id="formDetail<?= $i?>" tabindex="-1" data-bs-backdrop="static" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Detail Matapraktikum</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/matapraktikum/detail" method="delete"> 
          <div class="mb-3 row">
            <label for="kode_mp" class="col-sm-3 col-form-label">Kode Matapraktikum</label>
            <div class="col-sm-9">
              <?=$mp['kode_mp']; ?>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="matapraktikum" class="col-sm-3 col-form-label">Matapraktikum</label>
            <div class="col-sm-9" id="matapraktikum">
               <?=$mp['matapraktikum']; ?>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_mp" class="col-sm-3 col-form-label">Jenis</label>
            <div class="col-sm-9" id="jenis_mp">
              <?=$mp['jenis_mp'];?>
            </div>
          </div>
          <div class="mb-5 row">
            <label for="biaya" class="col-sm-3 col-form-label">Biaya</label>
            <div class="col-sm-7" id="biaya">
              <?=$mp['biaya'];?>
            </div>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success mx-2 mt-1 me-md-1" data-bs-toggle="modal" data-bs-target="#formEdit<?= $i?>">Edit</button>
        
      </div>

      </form>
    </div>
  </div>
</div>
<?php endforeach;?>

<!-- Modal Hapus -->
<?php foreach($data['mp'] as $i => $mp) :  ?>
  <div class="modal fade" id="hapus<?= $i?>" tabindex="-1" data-bs-backdrop="static" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Detail Matapraktikum</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/matapraktikum/detail" method="delete"> 
          <div class="mb-3 row">
            <label for="kode_mp" class="col-sm-3 col-form-label">Kode Matapraktikum</label>
            <div class="col-sm-9">
              <?=$mp['kode_mp']; ?>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="matapraktikum" class="col-sm-3 col-form-label">Matapraktikum</label>
            <div class="col-sm-9" id="matapraktikum">
               <?=$mp['matapraktikum']; ?>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_mp" class="col-sm-3 col-form-label">Jenis</label>
            <div class="col-sm-9" id="jenis_mp">
              <?=$mp['jenis_mp'];?>
            </div>
          </div>
          <div class="mb-5 row">
            <label for="biaya" class="col-sm-3 col-form-label">Biaya</label>
            <div class="col-sm-7" id="biaya">
              <?=$mp['biaya'];?>
            </div>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="location.href='<?=BASEURL?>/Matapraktikum/hapus/<?=$mp['id_matapraktikum']?>'">Delete</button>
        
      </div>

      </form>
    </div>
  </div>
</div>
<?php endforeach;?>

<!-- modal Edit -->
<?php foreach($data['mp'] as $i => $mp) :  ?>
  <div class="modal fade" id="formEdit<?= $i?>" tabindex="-1" data-bs-backdrop="static"
aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Edit Matapraktikum</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/matapraktikum/edit/<?=$mp['id_matapraktikum']?>" method="post"> 
          <div class="mb-3 row">
            <label for="kode_mp" class="col-sm-3 col-form-label">Kode Matapraktikum</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="kode_mp" name="kode_mp" value="<?=$mp['kode_mp'];?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="matapraktikum" class="col-sm-3 col-form-label">Matapraktikum</label>
            <div class="col-sm-9" id="matapraktikum">
            <input type="text" class="form-control" id="matapraktikum" name="matapraktikum" value="<?=$mp['matapraktikum'];?>">   
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_mp" class="col-sm-3 col-form-label">Jenis</label>
            <div class="col-sm-9" id="jenis_mp">
            <input type="text" class="form-control" id="jenis_mp" name="jenis_mp" value="<?=$mp['jenis_mp'];?>">
            </div>
          </div>
          <div class="mb-5 row">
            <label for="biaya" class="col-sm-3 col-form-label">Biaya</label>
            <div class="col-sm-7" id="biaya">
            <input type="number" class="form-control" id="biaya" name="biaya" value="<?=$mp['biaya'];?>">
            </div>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" data-bs-dismiss="modal" onclick="location.href='<?= BASEURL?>/Matapraktikum/edit/<?=$mp['id_matapraktikum']?>">Edit</button>
      </div>

      </form>
    </div>
  </div>
</div>
<?php endforeach;?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 </body>
</html> 


