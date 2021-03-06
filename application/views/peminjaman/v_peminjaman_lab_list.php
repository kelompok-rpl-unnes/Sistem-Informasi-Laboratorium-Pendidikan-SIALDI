<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-lg-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Peminjaman Laboratorium</h3>

      <div class="box-tools pull-right">
      <?php
        $sesi = from_session('level');
        if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
          echo button('load_silent("peminjaman/peminjaman_lab/form/base","#modal")','Add New Peminjaman','btn btn-success');
        } else {
          # code...
        }
        ?>
      </div>
    </div>
    <div class="box-body">
      <table width="100%" id="tableku" class="table table-striped">
        <thead>
          <th>No</th>
          <th>Id Pinjam</th>
          <th>Nama Peminjam</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Selesai</th>
          <th>Status Pinjam</th>
          <th>Act</th>
        </thead>
        <tbody>
    <?php 
    $i = 1;
    foreach($peminjaman_lab->result() as $row): ?>
    <tr>
      <td align="center"><?=$i++?></td>
      <td align="center"><?=$row->id?></td>
      <td align="center"><?=$row->nama_peminjam?></td>
      <td align="center"><?=$row->tgl_pinjam?></td>
      <td align="center"><?=$row->tgl_selesai?></td>
      <td align="center"><?=$row->status_pinjam?></td>
      <td align="center">
      <?php
        $sesi = from_session('level');
        if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
          echo button('load_silent("peminjaman/peminjaman_lab/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
        } else {
          # code...
        }
        ?>
        <a href="<?= site_url('peminjaman/peminjaman_lab/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus Daftar Peminjaman Laboratorium?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>

  <?php endforeach;?>
  </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
var table = $('#tableku').DataTable( {
"ordering": false,
} );
});
</script>
