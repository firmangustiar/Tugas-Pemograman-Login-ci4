     
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
 
                <?php if(!empty(session()->getFlashdata('message'))) : ?>
 
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message');?>
                </div>
 
                <?php endif ?>
 
 
                <a href="#" class="btn btn-md btn-success mb-3" data-toggle="modal" data-target="#modalTambahData">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                        
                            <th>Kode Dosen</th>
                            <th>Nama Dosen</th>
							   <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($DataDosen as $key => $dosen) : ?>
 
                            <tr>
                                <td><?php echo $dosen['kode_dosen'] ?></td>
                                <td><?php echo $dosen['nama_dosen'] ?></td>
								  <td><?php echo $dosen['status_dosen'] ?></td>
                                <td class="text-center">
                                 	<a href="/dosen/update/<?= $dosen['id_dosen'];?>">Edit</a>
                                    <a href="/dosen/delete/<?= $dosen['id_dosen'];?>">Delete</a>
                                </td>
                            </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
 
            </div>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>


<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form tambah data -->
        <form action="/dosen/tambah" method="POST">
          <div class="form-group">
            <label for="kodeDosen">Kode Dosen</label>
            <input type="text" class="form-control" id="kodeDosen" name="kode_dosen" required>
          </div>
          <div class="form-group">
            <label for="namaDosen">Nama Dosen</label>
            <input type="text" class="form-control" id="namaDosen" name="nama_dosen" required>
          </div>
          <div class="form-group">
            <label for="statusDosen">Status</label>
            <select class="form-control" id="statusDosen" name="status_dosen" required>
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>