
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        <?php
            echo form_open('/post/edit/'.$post->id,array('class'=>"form-control",'method'=>"post",'id'=>"updatepost"));
                // echo form_hidden('id',set_value('id',$post->id));
                echo form_label('Post Title','title');
                echo form_input('title',set_value('title',$post->title), array('required'=>'required','class'=>'form control','placeholder'=>'Enter Post title'));
                echo form_label('Post Body','title');
                echo form_textarea('body',set_value('body',$post->body),array('placeholder'=>'Enter Body text','required'=>'required','class'=>'form-control','row'=>5,'cols'=>80));
                echo form_submit('submit','update post',array('class'=>'btn btn-primary'));
            echo form_close();
        ?>

    </div>
</dv>
        

