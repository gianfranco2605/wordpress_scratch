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