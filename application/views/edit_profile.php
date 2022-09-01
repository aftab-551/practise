<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo form_open_multipart('User/do_upload',array('method'=>'post',
        'class'=>'form-horizontal','id'=>'upload_image')); ?>
            <div class="form-group">
                <input type="file" class="form-control" name="userfile" />    
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="upload" />    
            </div>
        <?php echo form_close(); ?>
    </div>
</div>