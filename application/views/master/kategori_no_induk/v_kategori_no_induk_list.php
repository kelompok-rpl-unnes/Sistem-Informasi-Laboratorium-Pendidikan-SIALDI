<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Kategori No Induk</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("master/kategori_no_induk/form/base","#modal")','Tambah Kategori No Induk','btn btn-success');
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
                <th>No Induk</th>
                <th>Nama Mahasiswa</th>
                <th>Angkatan</th>
                <th>Program Studi</th>
                <th>Kategori No Induk</th>
                <th>Act</th>
              </thead>
              <tbody>
          <?php 
          $i = 1;
          foreach($kategori_no_induk->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->no_induk?></td>
            <td align="center"><?=$row->nama_mahasiswa?></td>
            <td align="center"><?=$row->angkatan?></td>
            <td align="center"><?=$row->program_studi?></td>
            <td align="center"><?=$row->kategori_no_induk?></td>
            <td align="center">
            <?php 
           $sesi = from_session('level');
           if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
             echo button('load_silent("master/kategori_no_induk/form/sub/'.$row->no_induk.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
           } else {
             #code...
           }
           ?>
           <a href="<?= site_url('master/kategori_no_induk/delete/'.$row->no_induk) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus Kategori No Induk?')"><i class="fa fa-trash"></i></a>
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