<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">PENGAJUAN BAHAN</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("pengajuan/pengajuan_bahan/form/base","#modal")','Ajukan Bahan','btn btn-success');
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
                <th>Nama Lab</th>
                <th>Nama Bahan</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Act</th>
              </thead>
              <tbody>
          <?php 
          $i = 1;
          foreach($pengajuan_bahan->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->id?></td>
            <td align="center"><?=$row->nama_lab?></td>
            <td align="center"><?=$row->nama_bahan?></td>
            <td align="center"><?=$row->merk?></td>
            <td align="center"><?=$row->tipe?></td>
            <td align="center"><?=$row->jumlah?></td>
            <td align="center"><?=$row->harga?></td>
            <td align="center"><?=$row->status?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("pengajuan/pengajuan_bahan/form/base1/'.$row->id.'","#modal")','','btn btn-info fa fa-search','data-toggle="tooltip" title="View"');
                echo button('load_silent("pengajuan/pengajuan_bahan/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('pengajuan/pengajuan_bahan/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus Pengajuan Bahan?')"><i class="fa fa-trash"></i></a>
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