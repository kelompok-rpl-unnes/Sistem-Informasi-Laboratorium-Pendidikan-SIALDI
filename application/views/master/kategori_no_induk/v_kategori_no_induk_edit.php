<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">No Induk</label>
            <div class="col-sm-8">
            <?php echo form_hidden('no_induk',$row->no_induk); ?>
            <?php echo form_input(array('name'=>'no_induk','value'=>$row->no_induk,'class'=>'form-control'));?>
            <?php echo form_error('no_induk');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Mahasiswa</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_mahasiswa','value'=>$row->nama_mahasiswa,'class'=>'form-control'));?>
            <?php echo form_error('nama_mahasiswa');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Angkatan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'angkatan','value'=>$row->angkatan,'class'=>'form-control'));?>
            <?php echo form_error('angkatan');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Program Studi</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'program_studi','value'=>$row->program_studi,'class'=>'form-control'));?>
            <?php echo form_error('program_studi');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kategori No Induk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kategori_no_induk','value'=>$row->kategori_no_induk,'class'=>'form-control'));?>
            <?php echo form_error('kategori_no_induk');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"master/kategori_no_induk/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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