<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Id</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'id','value'=>$row->id,'class'=>'form-control'));?>
            <?php echo form_error('id');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Mata Kuliah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_matkul','value'=>$row->nama_matkul,'class'=>'form-control'));?>
            <?php echo form_error('nama_matkul');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah SKS</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'sks_matkul','value'=>$row->sks_matkul,'class'=>'form-control'));?>
            <?php echo form_error('sks_matkul');?>
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
            <label class="col-sm-4 control-label">Update</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"master/mata_kuliah/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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