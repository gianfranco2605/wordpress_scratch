<div class="text-center card m-4 shadow border" style="max-width: 280px; min-width: 280px">
  <div class="m-auto"><?php the_post_thumbnail('post-preview') ?></div>
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="text-muted">
    <?php
        $cat = get_the_category();
        if(is_array($cat)){
          foreach($cat as $cat_obj) {
            echo '<i class="fa fa-layer-group"></i><a href="'.$cat_obj->taxonomy.'/'.$cat_obj->slug.'">'.$cat_obj->name.'</a>';
          }
       }
    ?>
    </p>  
    <p class="text-muted"><?php the_time('M j, Y'); ?> | by <?php the_author(); ?> </p>

    <p class="card-text"><?= substr(get_the_excerpt(), 0, 50) ?>...</p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More</a>
  </div>
</div>