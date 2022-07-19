<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php foreach($users as $user): ?>  
            <h2><?php echo $user->username; ?></h2>
            <p> <?php echo $user->email; ?></p>
            <p><strong>Created at:</strong><span class="small"><?php echo $user->created_at; ?></span>
            <strong>Updated at at:</strong><span class="small"><?php echo $user->updated_at; ?></span>
            </p>
      <?php endforeach; ?>  

    </div>
</div>