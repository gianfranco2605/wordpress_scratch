<?php
        
        get_header();
?>

        <!-- carousel bootstrap -->
        <?php if( is_page() ) {
            get_template_part('templates-parts/slider');
        };
        ?>

<div class="container m-4">
  <div class="m-auto"><?php the_post_thumbnail('post-preview') ?></div>
  <div class="card-body">
    <h3 class="card-title"><?php the_title() ?></h3>
    <p class="card-text"><?php the_content() ?></p>
  </div>
</div>


<?php get_footer() ?>   