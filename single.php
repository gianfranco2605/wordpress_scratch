<?php
        
        get_header();
?>

        <div class="p-4 card-group justify-content-around">

            <?php 
                if( have_posts() ) {
                    while( have_posts() ) {

                        the_post();
                        get_template_part('templates-parts/single-post');
                        }
                        
                }               
            ?>
        </div>
<?php get_footer() ?>   