<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">ID Pinjam</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id','readonly'=>'readonly','value'=>$row->id,'class'=>'form-control'));?>
            <?php echo form_error('id');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Peminjam</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_peminjam','value'=>$row->nama_peminjam,'class'=>'form-control'));?>
            <?php echo form_error('nama_peminjam');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Pinjam</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tgl_pinjam','type'=>'date','value'=>$row->tgl_pinjam,'class'=>'form-control'));?>
            <?php echo form_error('tgl_pinjam');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Selesai</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tgl_selesai','type'=>'date','value'=>$row->tgl_selesai,'class'=>'form-control'));?>
            <?php echo form_error('tgl_selesai');?>
            </div>
        </div>
        <div class="form-group">
                <label class="col-sm-2 control-label">Status Pinjam</label>
                <div class="col-sm-8">
                  <?php echo form_dropdown('status_pinjam',$status_pinjam,$row->status_pinjam,'id="status_pinjam" class="form-control select2"');?>
                  <?php echo form_error('status_pinjam', '<span class="error-span">', '</span>'); ?>
                </div>
            </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"peminjaman/peminjaman_lab/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>
