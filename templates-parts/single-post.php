<div class="text-center">
  <div class="m-0 "><?php the_post_thumbnail('post-thumbnail') ?></div>
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="card-text"><?= the_content() ?></p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More</a>
  </div>
  
</div>