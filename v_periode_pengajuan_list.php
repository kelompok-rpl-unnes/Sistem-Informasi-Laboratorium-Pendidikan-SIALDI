<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">PERIODE PENGAJUAN</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("pengajuan/periode_pengajuan/form/base","#modal")','Add New Periode Pengajuan','btn btn-success');
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
                <th>Id Pengajuan</th>
                <th>Semester</th>
                <th>Tgl Pengajuan</th>
                <th>Sumber Pendanaan</th>
                <th>Tgl Pendanaan Turun</th>
                <th>Pajak</th>
                <th>Status Pengajuan</th>
                <th>Status</th>
                <th>Act</th>
              </thead>
              <tbody>
          <?php 
          $i = 1;
          foreach($periode_pengajuan->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->id?></td>
            <td align="center"><?=$row->semester?></td>
            <td align="center"><?=$row->tgl_pengajuan?></td>
            <td align="center"><?=$row->sumber_pendanaan?></td>
            <td align="center"><?=$row->tgl_pendanaan_turun?></td>
            <td align="center"><?=$row->pajak?></td>
            <td align="center"><?=$row->status_pengajuan?></td>
            <td align="center"><?=$row->status?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("pengajuan/periode_pengajuan/form/base1/'.$row->id.'","#modal")','','btn btn-info fa fa-search','data-toggle="tooltip" title="View"');
                echo button('load_silent("pengajuan/periode_pengajuan/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('pengajuan/periode_pengajuan/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin Menghapus Periode Pengajuan?')"><i class="fa fa-trash"></i></a>
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