<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Application PPIC</title>
  </head>
  <body>

 <!-- navbar -->
    <nav class="navbar navbar-light bg-warning">
    <div class="container">
      <span class="navbar-brand mb-0 h1"><h3>CALCULATION IP PRODUCTION CITY TRAINER</h3></span>
    </div>
    </nav>
    <!-- end navbar -->
    
<div class="mr-5 ml-5 mt-3">
<div class="row">
    <div class="col-sm-6 ml-auto">
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahDataProduk"><i class="fas fa-plus-circle"></i> Tambah Data Produk</button>
        <button class="btn btn-info mb-3" data-toggle="modal" data-target="#tambahStok"><i class="fas fa-plus-circle"></i> Tambah Data Stok Mold</button>
        <a href="<?= base_url() ?>home/tambahrel" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i> Tambah Rel</a>
        <a href="<?= base_url() ?>home/cetakPDF" class="btn btn-danger mb-3"><i class="fas fa-file-pdf"></i> Unduh Pdf</a>
    </div>
</div>
 <?= $this->session->flashdata('berhasil') ?>

    <table class="table table-bordered table-hover mt-3">
  <thead>
    <tr align="center" class="table-primary">
              <th scope="col">Vendor</th>
              <th scope="col">REL</th>
              <th scope="col">Material Code</th>
              <th scope="col">Material</th>
              <th scope="col">10.5C</th>
              <th scope="col">11C</th>
              <th scope="col">11.5C</th>
              <th scope="col">12C</th>
              <th scope="col">12.5C</th>
              <th scope="col">13C</th>
              <th scope="col">13.5C</th>
              <th scope="col">1Y</th>
              <th scope="col">1.5Y</th>
              <th scope="col">2Y</th>
              <th scope="col">2.5Y</th>
              <th scope="col">3Y</th>
              <th scope="col">Result</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($rls as $r): ?>
                <?php foreach ($this->m->getDataProduk($r['id']) as $p) : ?>
                <tr align="center">
                    <td><?= $p['vendor'] ?></td>
                    <td><?= $p['rel'] ?></td>
                    <td><?= $p['kode_material'] ?></td>
                    <td><?= $p['material'] ?></td>
                    <td><?= number_format($p['10_5C']) ?></td>
                    <td><?= number_format($p['11C']) ?></td>
                    <td><?= number_format($p['11_5C']) ?></td>
                    <td><?= number_format($p['12C']) ?></td>
                    <td><?= number_format($p['12_5C']) ?></td>
                    <td><?= number_format($p['13C']) ?></td>
                    <td><?= number_format($p['13_5C']) ?></td>
                    <td><?= number_format($p['1Y']) ?></td>
                    <td><?= number_format($p['1_5Y']) ?></td>
                    <td><?= number_format($p['2Y']) ?></td>
                    <td><?= number_format($p['2_5Y']) ?></td>
                    <td><?= number_format($p['3Y']) ?></td>
                    <td><?= number_format($p['total_produk']) ?></td>
                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editData<?= $p['id_data'] ?>"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusData<?= $p['id_data'] ?>"><i class="fa fa-trash"></i></button></td>
                </tr>
                <?php endforeach ?>
                <?php 
                    $GTP = $this->m->getGTotalProduk($r['id']);
                ?>
                <?php if($GTP['result'] != 0): ?>
                <tr class="table-danger" align="center">
                <td colspan="4" align="center">TOTAL REL <?= $r['rel'] ?></td>
                <td><?= number_format($GTP['10_5C']) ?></td>
                <td><?= number_format($GTP['11C']) ?></td>
                <td><?= number_format($GTP['11_5C']) ?></td>
                <td><?= number_format($GTP['12C']) ?></td>
                <td><?= number_format($GTP['12_5C']) ?></td>
                <td><?= number_format($GTP['13C']) ?></td>
                <td><?= number_format($GTP['13_5C']) ?></td>
                <td><?= number_format($GTP['1Y']) ?></td>
                <td><?= number_format($GTP['1_5Y']) ?></td>
                <td><?= number_format($GTP['2Y']) ?></td>
                <td><?= number_format($GTP['2_5Y']) ?></td>
                <td><?= number_format($GTP['3Y']) ?></td>
                <td><?= number_format($GTP['result']) ?></td>
                <td></td>
                </tr>
                <?php endif ?>
        <?php endforeach ?>
        <tr class="table-success" align="center">
            <td colspan="4" align="center">GRAND TOTAL</td>
            <td><?= number_format($TotalU10_5C) ?></td>
            <td><?= number_format($TotalU11C) ?></td>
            <td><?= number_format($TotalU11_5C) ?></td>
            <td><?= number_format($TotalU12C) ?></td>
            <td><?= number_format($TotalU12_5C) ?></td>
            <td><?= number_format($TotalU13C) ?></td>
            <td><?= number_format($TotalU13_5C) ?></td>
            <td><?= number_format($TotalU1Y) ?></td>
            <td><?= number_format($TotalU1_5Y) ?></td>
            <td><?= number_format($TotalU2Y) ?></td>
            <td><?= number_format($TotalU2_5Y) ?></td>
            <td><?= number_format($TotalU3Y) ?></td>
            <td><?= number_format($TotalUresult) ?></td>
            <td></td>
        </tr>
            
  </tbody>
</table>

       <!-- table2 -->
        <table class="table table-bordered table-hover table-sm mb-5">
            <thead>
                <tr class="table-primary" align="center">
                    <th scope="col" colspan="2" width="318px">OS MOLD <button data-toggle="modal" data-target="#modalOsMold" class="jarak ml-5 mr-5 btn btn-warning"><?= $osMold['total_osMold'] ?> Prs/Day</button> Dual Layer</th>
                    <th scope="col">Total</th>
                    <th scope="col">10.5C</th>
                    <th scope="col">11C</th>
                    <th scope="col">11.5C</th>
                    <th scope="col">12C</th>
                    <th scope="col">12.5C</th>
                    <th scope="col">13C</th>
                    <th scope="col">13.5C</th>
                    <th scope="col">1Y</th>
                    <th scope="col">1.5Y</th>
                    <th scope="col">2Y</th>
                    <th scope="col">2.5Y</th>
                    <th scope="col">3Y</th>
                    <th scope="col">Action</th>

                    </tr>
            </thead>
            <tbody>
                <?php foreach($stokM as $sm): ?>
                <tr>
                <th scope="row" colspan="2"><?= $sm['nama_stok'] ?></th>
                <td align="center" class="table-info"><?= $sm['total'] ?></td>
                <td align="center"><?php if( $sm['S_10_5C'] != 0) { echo $sm['S_10_5C']; } ?></td>
                <td align="center"><?php if( $sm['S_11C'] != 0) { echo $sm['S_11C']; } ?></td>
                <td align="center"><?php if( $sm['S_11_5C'] != 0) { echo $sm['S_11_5C']; } ?></td>
                <td align="center"><?php if( $sm['S_12C'] != 0) { echo $sm['S_12C']; } ?></td>
                <td align="center"><?php if( $sm['S_12_5C'] != 0) { echo $sm['S_12_5C']; } ?></td>
                <td align="center"><?php if( $sm['S_13C'] != 0) { echo $sm['S_13C']; } ?></td>
                <td align="center"><?php if( $sm['S_13_5C'] != 0) { echo $sm['S_13_5C']; } ?></td>
                <td align="center"><?php if( $sm['S_1Y'] != 0) { echo $sm['S_1Y']; } ?></td>
                <td align="center"><?php if( $sm['S_1_5Y'] != 0) { echo $sm['S_1_5Y']; } ?></td>
                <td align="center"><?php if( $sm['S_2Y'] != 0) { echo $sm['S_2Y']; } ?></td>
                <td align="center"><?php if( $sm['S_2_5Y'] != 0) { echo $sm['S_2_5Y']; } ?></td>
                <td align="center"><?php if( $sm['S_3Y'] != 0) { echo $sm['S_3Y']; } ?></td>
                <td align="center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editStok<?= $sm['id_stok'] ?>"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusStok<?= $sm['id_stok'] ?>"><i class="fa fa-trash"></i></button></td>
                </tr>
                <?php endforeach ?>
                 <tr class="table-success">
                <th scope="row" colspan="2">Total</th>
                <td align="center"><?= $jumlahTotalSM['total'] ?></td>
                <td align="center"><?= $jumlahTotalSM['10_5C'] ?></td>
                <td align="center"><?= $jumlahTotalSM['11C'] ?></td>
                <td align="center"><?= $jumlahTotalSM['11_5C'] ?></td>
                <td align="center"><?= $jumlahTotalSM['12C'] ?></td>
                <td align="center"><?= $jumlahTotalSM['12_5C'] ?></td>
                <td align="center"><?= $jumlahTotalSM['13C'] ?></td>
                <td align="center"><?= $jumlahTotalSM['13_5C'] ?></td>
                <td align="center"><?= $jumlahTotalSM['1Y'] ?></td>
                <td align="center"><?= $jumlahTotalSM['1_5Y'] ?></td>
                <td align="center"><?= $jumlahTotalSM['2Y'] ?></td>
                <td align="center"><?= $jumlahTotalSM['2_5Y'] ?></td>
                <td align="center"><?= $jumlahTotalSM['3Y'] ?></td>
                <td></td>
                </tr>
                <tr class="bg-dark">
                    <td colspan="16"></td>
                </tr>
                <?php foreach($rls as $r): ?>
                 <tr>
                 <th></th>
                <th scope="row"><?= $r['rel'] ?></th>
                <td align="center"><?= $r['total_rel'] ?></td>
                <td align="center"><?= $r['rls_10_5C'] ?></td>
                <td align="center"><?= $r['rls_11C'] ?></td>
                <td align="center"><?= $r['rls_11_5C'] ?></td>
                <td align="center"><?= $r['rls_12C'] ?></td>
                <td align="center"><?= $r['rls_12_5C'] ?></td>
                <td align="center"><?= $r['rls_13C'] ?></td>
                <td align="center"><?= $r['rls_13_5C'] ?></td>
                <td align="center"><?= $r['rls_1Y'] ?></td>
                <td align="center"><?= $r['rls_1_5Y'] ?></td>
                <td align="center"><?= $r['rls_2Y'] ?></td>
                <td align="center"><?= $r['rls_2_5Y'] ?></td>
                <td align="center"><?= $r['rls_3Y'] ?></td>
                <td></td>
                </tr>
                <?php endforeach ?>
                <tr align="center" class="table-success">
                <th scope="row" colspan="3">G.TOTAL</th>
                <td align="center"><?= $totalJumlahRLS['T_10_5C'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_11C'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_11_5C'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_12C'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_12_5C'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_13C'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_13_5C'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_1Y'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_1_5Y'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_2Y'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_2_5Y'] ?></td>
                <td align="center"><?= $totalJumlahRLS['T_3Y'] ?></td>
                <td></td>
                </tr>
            </tbody>
            </table>





</div>







<div class="modal fade" id="tambahDataProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form action="<?= base_url() ?>home/tambahDataProduk" method="post">
          <div class="form-group row">
    <label for="vendor" class="col-sm-2 col-form-label font-weight-bold">Vendor</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="vendor" name="vendor">
    </div>
</div>
<div class="form-group row">
    <label for="rel" class="col-sm-2 col-form-label font-weight-bold">Rel</label>
    <div class="col-sm-10">
        <select class="form-control" id="rel" name="rel_id">
            <option>-- Pilih Rel --</option>
            <?php foreach($rls as $rls) : ?>
            <option value="<?= $rls['id'] ?>"><?= $rls['rel'] ?></option>
            <?php endforeach ?>
            </select>
    </div>
</div>
<div class="form-group row">
    <label for="MC" class="col-sm-2 col-form-label font-weight-bold">Material Code</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="MC" name="MC">
    </div>
</div>
<div class="form-group row">
    <label for="material" class="col-sm-2 col-form-label font-weight-bold">Material</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="material" name="material">
    </div>
</div>
<div class="form-group row">
    <label for="10_5c" class="col-sm-2 col-form-label font-weight-bold">10.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="10_5c" name="10_5c">
    </div>
</div>
<div class="form-group row">
    <label for="11c" class="col-sm-2 col-form-label font-weight-bold">11C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11c" name="11c">
    </div>
</div>
<div class="form-group row">
    <label for="11_5c" class="col-sm-2 col-form-label font-weight-bold">11.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11_5c" name="11_5c">
    </div>
</div>
<div class="form-group row">
    <label for="12c" class="col-sm-2 col-form-label font-weight-bold">12C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12c" name="12c">
    </div>
</div>
<div class="form-group row">
    <label for="12_5c" class="col-sm-2 col-form-label font-weight-bold">12.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12_5c" name="12_5c">
    </div>
</div>
<div class="form-group row">
    <label for="13c" class="col-sm-2 col-form-label font-weight-bold">13C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13c" name="13c">
    </div>
</div>
<div class="form-group row">
    <label for="13_5c" class="col-sm-2 col-form-label font-weight-bold">13.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13_5c" name="13_5c">
    </div>
</div>
<div class="form-group row">
    <label for="1y" class="col-sm-2 col-form-label font-weight-bold">1Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1y" name="1y">
    </div>
</div>
<div class="form-group row">
    <label for="1_5y" class="col-sm-2 col-form-label font-weight-bold">1.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1_5y" name="1_5y">
    </div>
</div>
<div class="form-group row">
    <label for="2y" class="col-sm-2 col-form-label font-weight-bold">2Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2y" name="2y">
    </div>
</div>
<div class="form-group row">
    <label for="2_5y" class="col-sm-2 col-form-label font-weight-bold">2.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2_5y" name="2_5y">
    </div>
</div>
<div class="form-group row">
    <label for="3y" class="col-sm-2 col-form-label font-weight-bold">3Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="3y" name="3y">
    </div>
</div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
          </div>
        </div>
      </div>
    </div>




  <!-- modal Edit -->
<?php foreach ($Getproduk as $pr) : ?>
    <div class="modal fade" id="editData<?= $pr['id_data'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data <?= $pr['rel'] ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form action="<?= base_url() ?>home/editDataProduk/<?= $pr['id_data'] ?>" method="post">
          <div class="form-group row">
    <label for="vendor" class="col-sm-2 col-form-label font-weight-bold">Vendor</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="vendor" name="vendor" value="<?= $pr['vendor'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="rel" class="col-sm-2 col-form-label font-weight-bold">Rel</label>
    <div class="col-sm-10">
        <input type="hidden" name="rel_id" value="<?= $pr['rel_id'] ?>">
        <input type="text" class="form-control" readonly id="rel" name="rel" value="<?= $pr['rel'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="MC" class="col-sm-2 col-form-label font-weight-bold">Material Code</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="MC" name="MC" value="<?= $pr['kode_material'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="material" class="col-sm-2 col-form-label font-weight-bold">Material</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="material" name="material" value="<?= $pr['material'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="10_5c" class="col-sm-2 col-form-label font-weight-bold">10.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="10_5c" name="10_5c" value="<?= $pr['10_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="11c" class="col-sm-2 col-form-label font-weight-bold">11C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11c" name="11c" value="<?= $pr['11C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="11_5c" class="col-sm-2 col-form-label font-weight-bold">11.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11_5c" name="11_5c" value="<?= $pr['11_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="12c" class="col-sm-2 col-form-label font-weight-bold">12C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12c" name="12c" value="<?= $pr['12C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="12_5c" class="col-sm-2 col-form-label font-weight-bold">12.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12_5c" name="12_5c" value="<?= $pr['12_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="13c" class="col-sm-2 col-form-label font-weight-bold">13C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13c" name="13c" value="<?= $pr['13C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="13_5c" class="col-sm-2 col-form-label font-weight-bold">13.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13_5c" name="13_5c" value="<?= $pr['13_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="1y" class="col-sm-2 col-form-label font-weight-bold">1Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1y" name="1y" value="<?= $pr['1Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="1_5y" class="col-sm-2 col-form-label font-weight-bold">1.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1_5y" name="1_5y" value="<?= $pr['1_5Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="2y" class="col-sm-2 col-form-label font-weight-bold">2Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2y" name="2y" value="<?= $pr['2Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="2_5y" class="col-sm-2 col-form-label font-weight-bold">2.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2_5y" name="2_5y" value="<?= $pr['2_5Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="3y" class="col-sm-2 col-form-label font-weight-bold">3Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="3y" name="3y" value="<?= $pr['3Y'] ?>">
    </div>
</div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
          </div>
        </div>
      </div>
    </div>
<?php endforeach ?>
    <!-- end modal Edit -->


    <!-- modal hapus -->
<?php foreach ($Getproduk as $gpr) : ?>
    <div class="modal fade" id="hapusData<?= $gpr['id_data'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url() ?>home/hapusDataProduk/<?= $gpr['id_data'] ?>" method="post">
            <input type="hidden" name="rel_id" value="<?= $gpr['rel_id'] ?>">
            <input type="hidden" name="rel" value="<?= $gpr['rel'] ?>">
                <h5>Apakah anda yakin ingin menghapus data ini..?</h5>
          </div>
          <div class="modal-footer bg-danger">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">hapus Data</button>
    </form>
          </div>
        </div>
      </div>
    </div>
<?php endforeach ?>
    <!-- end modal hapus data produk -->


<!-- modal Edit Stok -->
<?php foreach ($stokM as $stm) : ?>
    <div class="modal fade" id="editStok<?= $stm['id_stok'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Data <?= $stm['nama_stok'] ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form action="<?= base_url() ?>home/editDataStokMold/<?= $stm['id_stok'] ?>" method="post">
<div class="form-group row">
    <label for="namaStok" class="col-sm-2 col-form-label font-weight-bold">Nama Stok</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="namaStok" name="namaStok" value="<?= $stm['nama_stok'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="10_5c" class="col-sm-2 col-form-label font-weight-bold">10.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="10_5c" name="10_5c" value="<?= $stm['S_10_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="11c" class="col-sm-2 col-form-label font-weight-bold">11C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11c" name="11c" value="<?= $stm['S_11C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="11_5c" class="col-sm-2 col-form-label font-weight-bold">11.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11_5c" name="11_5c" value="<?= $stm['S_11_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="12c" class="col-sm-2 col-form-label font-weight-bold">12C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12c" name="12c" value="<?= $stm['S_12C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="12_5c" class="col-sm-2 col-form-label font-weight-bold">12.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12_5c" name="12_5c" value="<?= $stm['S_12_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="13c" class="col-sm-2 col-form-label font-weight-bold">13C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13c" name="13c" value="<?= $stm['S_13C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="13_5c" class="col-sm-2 col-form-label font-weight-bold">13.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13_5c" name="13_5c" value="<?= $stm['S_13_5C'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="1y" class="col-sm-2 col-form-label font-weight-bold">1Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1y" name="1y" value="<?= $stm['S_1Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="1_5y" class="col-sm-2 col-form-label font-weight-bold">1.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1_5y" name="1_5y" value="<?= $stm['S_1_5Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="2y" class="col-sm-2 col-form-label font-weight-bold">2Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2y" name="2y" value="<?= $stm['S_2Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="2_5y" class="col-sm-2 col-form-label font-weight-bold">2.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2_5y" name="2_5y" value="<?= $stm['S_2_5Y'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="3y" class="col-sm-2 col-form-label font-weight-bold">3Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="3y" name="3y" value="<?= $stm['S_3Y'] ?>">
    </div>
</div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
          </div>
        </div>
      </div>
    </div>
<?php endforeach ?>

<!-- modal hapus Stok -->
<?php foreach ($stokM as $stm) : ?>
    <div class="modal fade" id="hapusStok<?= $stm['id_stok'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header btn-danger">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?= $stm['nama_stok'] ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form action="<?= base_url() ?>home/hapusDataStokMold/<?= $stm['id_stok'] ?>" method="post">

                <h5>Apakah anda yakin menghapus data ini..?</h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Hapus Data</button>
    </form>
          </div>
        </div>
      </div>
    </div>
<?php endforeach ?>

<!-- modal tambah Stok -->

    <div class="modal fade" id="tambahStok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Stok</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form action="<?= base_url() ?>home/tambahDataStokMold" method="post">
<div class="form-group row">
    <label for="namaStok" class="col-sm-2 col-form-label font-weight-bold">Nama Stok</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="namaStok" name="namaStok">
    </div>
</div>
<div class="form-group row">
    <label for="10_5c" class="col-sm-2 col-form-label font-weight-bold">10.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="10_5c" name="10_5c">
    </div>
</div>
<div class="form-group row">
    <label for="11c" class="col-sm-2 col-form-label font-weight-bold">11C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11c" name="11c">
    </div>
</div>
<div class="form-group row">
    <label for="11_5c" class="col-sm-2 col-form-label font-weight-bold">11.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="11_5c" name="11_5c">
    </div>
</div>
<div class="form-group row">
    <label for="12c" class="col-sm-2 col-form-label font-weight-bold">12C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12c" name="12c">
    </div>
</div>
<div class="form-group row">
    <label for="12_5c" class="col-sm-2 col-form-label font-weight-bold">12.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="12_5c" name="12_5c">
    </div>
</div>
<div class="form-group row">
    <label for="13c" class="col-sm-2 col-form-label font-weight-bold">13C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13c" name="13c">
    </div>
</div>
<div class="form-group row">
    <label for="13_5c" class="col-sm-2 col-form-label font-weight-bold">13.5C</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="13_5c" name="13_5c">
    </div>
</div>
<div class="form-group row">
    <label for="1y" class="col-sm-2 col-form-label font-weight-bold">1Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1y" name="1y">
    </div>
</div>
<div class="form-group row">
    <label for="1_5y" class="col-sm-2 col-form-label font-weight-bold">1.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="1_5y" name="1_5y">
    </div>
</div>
<div class="form-group row">
    <label for="2y" class="col-sm-2 col-form-label font-weight-bold">2Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2y" name="2y">
    </div>
</div>
<div class="form-group row">
    <label for="2_5y" class="col-sm-2 col-form-label font-weight-bold">2.5Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="2_5y" name="2_5y">
    </div>
</div>
<div class="form-group row">
    <label for="3y" class="col-sm-2 col-form-label font-weight-bold">3Y</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="3y" name="3y">
    </div>
</div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
          </div>
        </div>
      </div>
    </div>



<!-- modal OS MOLD -->

<div class="modal fade" id="modalOsMold" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data OS MOLD Prs/Day</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= base_url() ?>home/editOsMold/<?= $osMold['id_osMold'] ?>" method="post">
            <div class="form-group row">
                <label for="OsMold" class="col-sm-3 col-form-label">Os Mold</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" id="OsMold" name="OsMold" value="<?= $osMold['total_osMold'] ?>">
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </form>
    </div>
  </div>
</div>

    <!-- end Modal OS MOLD -->














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>