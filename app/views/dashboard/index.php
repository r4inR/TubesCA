
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Kode Matapraktikum</th>
              <th scope="col">Mata Praktikum</th>
              <th scope="col">Jenis</th>
              <th scope="col">Biaya</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
            
            foreach ($data['mp'] as $i => $mp):
            ?> <tr>
              <td scope="col"><?=$i+1?></td>
              <td scope="col"><?=$mp['kode_mp']?></td>
              <td> <?=$mp['matapraktikum'];?></td> 
              <td> <?=$mp['jenis_mp'];?></td> 
              <td> <?=$mp['biaya'];?></td> 
              <!-- <th scope="col">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">detail</button>
              </th> -->
            </tr>
            <?php endforeach ;?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



 <!--modal detail  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
