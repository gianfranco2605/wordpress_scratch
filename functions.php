<?php

function razorsharp_add_stuff() {

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    // true to send the script ad the body
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], '1.0.0', true);

};

add_action('init', 'razorsharp_add_stuff');

