<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">


    <title>Data Rel</title>
  </head>
  <body>

   <!-- navbar -->
    <nav class="navbar navbar-light bg-warning">
    <div class="container">
      <span class="navbar-brand mb-0 h1"><h3>CALCULATION IP PRODUCTION CITY TRAINER</h3></span>
    </div>
    </nav>
    <!-- end navbar -->
    
    <div class="container mt-5 mb-3 text-center">

    <?= $this->session->flashdata('berhasil') ?>
    <h2>Data Rel</h2>

<div class="row">
    <div class="col-sm-6 ml-auto">
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalTambah"><i class="fas fa-plus-circle"></i> Tambah Data REL</button>
        <a href="<?= base_url() ?>" class="btn btn-danger mb-3"><i class="fas fa-backward"></i> Kembali ke Aplikasi</a>
    </div>
</div>

    <table class="table table-bordered table-hover mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Rel</th>
      <th scope="col">Total Rel</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $no = 1;
  foreach ($getRls as $rls): ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $rls['rel'] ?></td>
      <td><?= $rls['total_rel'] ?></td>
      <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editData<?= $rls['id'] ?>"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusData<?= $rls['id'] ?>"><i class="fa fa-trash"></i></button></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Rel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url() ?>home/addRel" method="post">
            <div class="form-group">
                <label for="rel">Rel</label>
                <input type="text" class="form-control" id="rel" name="rel">
            </div>
            <div class="form-group">
                <label for="total">Total Rel</label>
                <input type="text" class="form-control" id="total" name="total">
            </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambahkan Rel</button>
            </form>
      </div>
    </div>
  </div>
</div>

<?php foreach ($getRls as $grls): ?>
<!-- Modal -->
<div class="modal fade" id="editData<?= $grls['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Rel <?= $grls['rel'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url() ?>home/editRel/<?= $grls['id'] ?>" method="post">
            <div class="form-group">
                <label for="rel">Rel</label>
                <input type="text" class="form-control" id="rel" name="rel" value="<?= $grls['rel'] ?>">
            </div>
            <div class="form-group">
                <label for="total">Total Rel</label>
                <input type="text" class="form-control" id="total" name="total" value="<?= $grls['total_rel'] ?>">
            </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ubah Rel</button>
            </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>

<?php foreach ($getRls as $grls): ?>
<!-- Modal -->
<div class="modal fade" id="hapusData<?= $grls['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Rel <?= $grls['rel'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url() ?>home/dellRel/<?= $grls['id'] ?>" method="post">
            <h5>Apakah anda yakin menghapus data ini..?</h5>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">hapus Rel</button>
            </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>