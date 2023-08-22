<div class="text-center">
  <div class="m-0 "><?php the_post_thumbnail('post-thumbnail') ?></div>
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
    <p class="text-muted"><?php the_time('F j, Y'); ?></p> 
    <p class="card-text"><?= the_content() ?></p>
  </div>
  
</div>