<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <?php
            echo form_open('/student/cms',array('class'=>"form-horizontal",'method'=>"post",'id'=>"entercms"));
                echo form_label('Enter Cms','cms');
                echo form_input('cms',set_value('cms'),'', array('required'=>'required','class'=>'form control','placeholder'=>'Enter Cms Here'));
                echo form_submit('submit','enter cms',array('class'=>'btn btn-primary'));
            echo form_close();
        ?>

    </div>
</dv>