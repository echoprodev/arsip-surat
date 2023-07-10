<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cetak Surat Keluar</title>
    <base href="<?php echo base_url();?>"/>
  </head>
  <body onload="window.print()">

  <table border="0" width="100%">
      <tr>
        <td width="120">
          <img src="assets/images/logo.png" alt="logo1" width="120">
        </td>
        <td align="center">
          <h1>Laporan Arsip Surat Kejaksaan Negeri Kabupaten Pasuruan</h1>
        </td>
        <td width="120">
        </td>
      </tr>
    </table>

    <hr>

    <h2 align="center">Laporan Surat Masuk</h2>
    <br>
    <table class="table datatable-basic" border="1" width="100%">
          <thead>
            <tr>
              <th width="1%">No</th>
              <th width="19%">No. Surat</th>
              <th width="19%">Asal Surat</th>
              <th width="19%">Penerima Surat</th>
              <th width="10%">Tgl. Surat</th>
              <!-- <th width="10%">No. Surat</th> -->
              <th width="20%">Perihal</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($sql->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $baris->no_asal; ?></td>
                  <td><?php echo $baris->pengirim ?></td>
                  <td><?php echo $baris->penerima ?></td>
                  <td><?php echo $baris->tgl_no_asal; ?></td>
                  <!-- <td><?php echo $baris->no_asal; ?></td> -->
                  <td><?php echo $baris->perihal; ?></td>
                </tr>
              <?php
              $no++;
              } ?>
          </tbody>
        </table>

  </body>
</html>
