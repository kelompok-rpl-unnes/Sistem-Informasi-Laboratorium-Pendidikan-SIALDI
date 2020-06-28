<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Kelola Alat dan Bahan</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/kelola_alat_bahan/form/base","#modal")','Tambah Kelola Alat dan Bahan','btn btn-success');
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
                <th>Id</th>
                <th>Nama Alat dan Bahan</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Act</th>
              </thead>
              <tbody>
          <?php 
          $i = 1;
          foreach($kelola_alat_bahan->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->id?></td>
            <td align="center"><?=$row->nama_alat_dan_bahan?></td>
            <td align="center"><?=$row->jumlah?></td>
            <td align="center"><?=$row->kondisi?></td>
            <td align="center">
            <?php 
           $sesi = from_session('level');
           if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
             echo button('load_silent("kelola/kelola_alat_bahan/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
           } else {
             #code...
           }
           ?>
           <a href="<?= site_url('kelola/kelola_alat_bahan/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus Kelola Alat dan Bahan?')"><i class="fa fa-trash"></i></a>
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