
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <?php
            echo form_open('/post/save','post',array('class'=>"form-horizontal",'method'=>"post",'id'=>"createpost"));
                echo form_label('Post Title','title');
                echo form_input('title',set_value('title'),'', array('required'=>'required','class'=>'form control','placeholder'=>'Enter Post title'));
                echo form_label('Post Body','title');
                echo form_textarea('body',set_value('body'),'',array('placeholder'=>'Enter Body text','required'=>'required','class'=>'form-control','row'=>5,'cols'=>80));
                echo form_submit('submit','add post',array('class'=>'btn btn-primary'));
            echo form_close();
        ?>

    </div>
</dv>
        

