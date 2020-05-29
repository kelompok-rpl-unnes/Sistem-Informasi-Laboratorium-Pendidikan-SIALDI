<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Id</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'id','class'=>'form-control'));?>
            <?php echo form_error('id');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Semester</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'semester','class'=>'form-control'));?>
            <?php echo form_error('semester');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tgl Pengajuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tgl_pengajuan','class'=>'form-control'));?>
            <?php echo form_error('tgl_pengajuan');?>
            <span id="check_data"></span>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Sumber Pendanaan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'sumber_pendanaan','class'=>'form-control'));?>
            <?php echo form_error('sumber_pendanaan');?>
            <span id="check_data"></span>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tgl Pendanaan Turun</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tgl_pendanaan_turun','class'=>'form-control'));?>
            <?php echo form_error('tgl_pendanaan_turun');?>
            <span id="check_data"></span>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Pajak</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'pajak','class'=>'form-control'));?>
            <?php echo form_error('pajak');?>
            <span id="check_data"></span>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Status Pengajuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'status_pengajuan','class'=>'form-control'));?>
            <?php echo form_error('status_pengajuan');?>
            <span id="check_data"></span>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'status','class'=>'form-control'));?>
            <?php echo form_error('status');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"pengajuan/periode_pengajuan/show_addForm/","#divsubcontent")','Save','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>