<!DOCTYPE html>
<html <?php language_attributes( ) ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description') ?>">
        <title><?php bloginfo( 'info' ) ?></title>
        <!-- wordpress styles scripts meta links -->
        <?php wp_head() ?>
    </head>
    <!-- body classes -->
    <body <?php body_class() ?>>
        <!-- body script -->
        <?php wp_body_open() ?>

        <!-- start bootstrap navbar -->
        <?php get_template_part('templates-parts/nav')?>
        <!-- end bootstrap navbar -->

        <!-- carousel bootstrap -->
        <?php get_template_part('templates-parts/slider')?>

        <?php 
            if( have_posts() ) {
                // loop
                while( have_posts() ) {
                    //avoid infinity loop
                    the_post();
                    ?>
                        <h1><? the_title() ?></h1>
                        <p><?php the_content() ?></p> <!--i can use the the_excerpt() just to see part of the paragraph-->
                        <hr>
                    <?php
                }
            }
        ?>

        <!-- adminbar -->
        <?php wp_footer() ?>   
    </body>
</html>