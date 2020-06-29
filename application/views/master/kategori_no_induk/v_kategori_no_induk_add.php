<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        
        <div class="form-group">
            <label class="col-sm-4 control-label">No Induk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'no_induk','class'=>'form-control'));?>
            <?php echo form_error('no_induk');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Mahasiswa</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_mahasiswa','class'=>'form-control'));?>
            <?php echo form_error('nama_mahasiswa');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Angkatan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'angkatan','class'=>'form-control'));?>
            <?php echo form_error('angkatan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Program Studi</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'program_studi','class'=>'form-control'));?>
            <?php echo form_error('program_studi');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kategori No Induk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kategori_no_induk','class'=>'form-control'));?>
            <?php echo form_error('kategori_no_induk');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"master/kategori_no_induk/show_addForm/","#divsubcontent")','Save','btn btn-success')." ";
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