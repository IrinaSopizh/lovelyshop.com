<?php foreach ($posts as $post):?>
  <div class="blog-post">
    <h2 class="blog-post-title"><?=$post->title;?></h2>                
    <p class="blog-post-meta"><?=$post->created_at;?></p>
    <blockquote>
       <p><?=$post->content;?></p>
    </blockquote>
  </div><!-- /.blog-post -->
<?php endforeach;?>