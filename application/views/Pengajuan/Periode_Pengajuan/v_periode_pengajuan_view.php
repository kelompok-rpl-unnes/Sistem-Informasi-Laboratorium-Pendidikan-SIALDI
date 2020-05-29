<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($view);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Id</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id','value'=>$row->id,'class'=>'form-control'));?>
            <?php echo form_error('id');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Semester</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'semester','value'=>$row->semester,'class'=>'form-control'));?>
            <?php echo form_error('semester');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tgl. Pengajuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tgl_pengajuan','value'=>$row->tgl_pengajuan,'class'=>'form-control'));?>
            <?php echo form_error('tgl_pengajuan');?>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Sumber Pendanaan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'sumber_pendanaan','value'=>$row->sumber_pendanaan,'class'=>'form-control'));?>
            <?php echo form_error('sumber_pendanaan');?>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tgl. Pendanaan Turun</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tgl_pendanaan_turun','value'=>$row->tgl_pendanaan_turun,'class'=>'form-control'));?>
            <?php echo form_error('tgl_pendanaan_turun');?>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Pajak</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'Pajak','value'=>$row->pajak,'class'=>'form-control'));?>
            <?php echo form_error('pajak');?>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Status Pengajuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'status_pengajuan','value'=>$row->status_pengajuan,'class'=>'form-control'));?>
            <?php echo form_error('status_pengajuan');?>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'status','value'=>$row->status,'class'=>'form-control'));?>
            <?php echo form_error('status');?>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"pengajuan/periode_pengajuan/show_viewForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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