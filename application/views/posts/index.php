<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php foreach($posts as $post): ?>  
        <a href="<?php echo base_url('/post/show/'.$post->id); ?>"  >  <h2><?php echo $post->title; ?></h2></a>
            <p> <?php echo $post->body; ?></p>
            <p><strong>Created at:</strong><span class="small"><?php echo $post->created_at; ?></span>
            <strong>Updated at at:</strong><span class="small"><?php echo $post->updated_at; ?></span>
            </p>
            <p><a href="<?php echo base_url('/post/edit/'.$post->id); ?>" class="btn btn-primary">edit</a> | <a href="<?php echo base_url('/post/delete/'.$post->id); ?>" class="btn btn-danger">delete</a> </p>
      <?php endforeach; ?>  

    </div>
</div>