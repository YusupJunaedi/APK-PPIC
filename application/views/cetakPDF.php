<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            width:100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        table, th, td, tr {
            border: 1px solid black;
        }
        .table-danger,.table-danger>td,.table-danger>th{background-color:#f5c6cb}
        .table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th{border-color:#ed969e}.table-hover .table-danger:hover{background-color:#f1b0b7}.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}
        .table-success,.table-success>td,.table-success>th{background-color:#c3e6cb}.table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th{border-color:#8fd19e}.table-hover .table-success:hover{background-color:#b1dfbb}.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}
        .table-info,.table-info>td,.table-info>th{background-color:#bee5eb}.table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th{border-color:#86cfda}.table-hover .table-info:hover{background-color:#abdde5}.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}
        .table-primary,.table-primary>td,.table-primary>th{background-color:#b8daff}.table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th{border-color:#7abaff}.table-hover .table-primary:hover{background-color:#9fcdff}.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#9fcdff}
        .table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#95999c}.table-hover .table-dark:hover{background-color:#b9bbbe}.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table-active,.table-active>td,.table-active>th{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.table .thead-dark th{color:#fff;background-color:#343a40;border-color:#454d55}.table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}.table-dark{color:#fff;background-color:#343a40}.table-dark td,.table-dark th,.table-dark thead th{border-color:#454d55}.table-dark.table-bordered{border:0}.table-dark.table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-dark.table-hover tbody tr:hover{color:#fff;background-color:rgba(255,255,255,.075)}
    </style>
    <title>CALCULATION IP PRODUCTION CITY TRAINER</title>
</head>
<body>

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
            </tr>
          </thead>
          <tbody>
          <?php foreach($rls as $r): ?>
                <?php foreach ($this->m->getDataProduk($r['id']) as $p) : ?>
                <tr align="center">
                    <td align="center"><?= $p['vendor'] ?></td>
                    <td align="center"><?= $p['rel'] ?></td>
                    <td align="center"><?= $p['kode_material'] ?></td>
                    <td align="center"><?= $p['material'] ?></td>
                    <td align="center"><?= number_format($p['10_5C']) ?></td>
                    <td align="center"><?= number_format($p['11C']) ?></td>
                    <td align="center"><?= number_format($p['11_5C']) ?></td>
                    <td align="center"><?= number_format($p['12C']) ?></td>
                    <td align="center"><?= number_format($p['12_5C']) ?></td>
                    <td align="center"><?= number_format($p['13C']) ?></td>
                    <td align="center"><?= number_format($p['13_5C']) ?></td>
                    <td align="center"><?= number_format($p['1Y']) ?></td>
                    <td align="center"><?= number_format($p['1_5Y']) ?></td>
                    <td align="center"><?= number_format($p['2Y']) ?></td>
                    <td align="center"><?= number_format($p['2_5Y']) ?></td>
                    <td align="center"><?= number_format($p['3Y']) ?></td>
                    <td align="center"><?= number_format($p['total_produk']) ?></td>
                </tr>
                <?php endforeach ?>
                <?php 
                    $GTP = $this->m->getGTotalProduk($r['id']);
                ?>
                <?php if($GTP['result'] != 0): ?>
                <tr class="table-danger" align="center">
                <td align="center" colspan="4">TOTAL REL <?= $r['rel'] ?></td>
                <td align="center"><?= number_format($GTP['10_5C']) ?></td>
                <td align="center"><?= number_format($GTP['11C']) ?></td>
                <td align="center"><?= number_format($GTP['11_5C']) ?></td>
                <td align="center"><?= number_format($GTP['12C']) ?></td>
                <td align="center"><?= number_format($GTP['12_5C']) ?></td>
                <td align="center"><?= number_format($GTP['13C']) ?></td>
                <td align="center"><?= number_format($GTP['13_5C']) ?></td>
                <td align="center"><?= number_format($GTP['1Y']) ?></td>
                <td align="center"><?= number_format($GTP['1_5Y']) ?></td>
                <td align="center"><?= number_format($GTP['2Y']) ?></td>
                <td align="center"><?= number_format($GTP['2_5Y']) ?></td>
                <td align="center"><?= number_format($GTP['3Y']) ?></td>
                <td align="center"><?= number_format($GTP['result']) ?></td>
                </tr>
                <?php endif ?>
        <?php endforeach ?>
        <tr class="table-success" align="center">
            <td align="center" colspan="4">GRAND TOTAL</td>
            <td align="center"><?= number_format($TotalU10_5C) ?></td>
            <td align="center"><?= number_format($TotalU11C) ?></td>
            <td align="center"><?= number_format($TotalU11_5C) ?></td>
            <td align="center"><?= number_format($TotalU12C) ?></td>
            <td align="center"><?= number_format($TotalU12_5C) ?></td>
            <td align="center"><?= number_format($TotalU13C) ?></td>
            <td align="center"><?= number_format($TotalU13_5C) ?></td>
            <td align="center"><?= number_format($TotalU1Y) ?></td>
            <td align="center"><?= number_format($TotalU1_5Y) ?></td>
            <td align="center"><?= number_format($TotalU2Y) ?></td>
            <td align="center"><?= number_format($TotalU2_5Y) ?></td>
            <td align="center"><?= number_format($TotalU3Y) ?></td>
            <td align="center"><?= number_format($TotalUresult) ?></td>
        </tr>
            
  </tbody>
</table>

       <!-- table2 -->
        <table class="table table-bordered table-hover table-sm mb-5">
            <thead>
                <tr class="table-primary" align="center">
                    <th scope="col" colspan="2" width="318px">OS MOLD <?= $osMold['total_osMold'] ?> Prs/Day Dual Layer</th>
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

                    </tr>
            </thead>
            <tbody>
                <?php foreach($stokM as $sm): ?>
                <tr>
                <th scope="row" colspan="2" align="left"><?= $sm['nama_stok'] ?></th>
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
                </tr>
                <tr class="bg-dark">
                    <td colspan="15"></td>
                </tr>
                <?php foreach($rls as $r): ?>
                 <tr>
                 <th></th>
                <th scope="row" align="left"><?= $r['rel'] ?></th>
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
                </tr>
            </tbody>
            </table>
    
</body>
</html>