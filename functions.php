<?php



function razorsharp_add_stuff() {

    if(!is_admin()) {
        
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
        // bootstrap style
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        // true to send the script to the body
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], '1.0.0', true);
        
    };

    add_theme_support('widgets');

    add_theme_support('menus');
    
    add_theme_support('post-thumbnails');

    add_image_size('post-preview', 280, 180, true);
    add_image_size('post-preview-small', 100, 100, true);

};

add_action('init', 'razorsharp_add_stuff');


// Another way to add actions, as a callback 
add_action('after_setup_theme', function() {
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-heigth' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-log' => true,
    );

    add_theme_support('custom-logo', $defaults);
});

// register menu
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Extra Menu' ),
        )
    );
}

add_action( 'init', 'register_my_menus' );


// register sidebars 
function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar1', 'theme_name' ),
		'id'            => 'footer-sidebar-1',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Sidebar2', 'theme_name' ),
		'id'            => 'footer-sidebar-2 ',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action('widgets_init', 'themename_widgets_init');


// template parts walker, widgets 
require get_template_directory() . '/templates-parts/walker.php';
require get_template_directory() . '/templates-parts/widgets.php';


// Customize API(customize panel section)

function themeslug_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
    // Image slider section dashboard
    $wp_customize->add_section( 'razzorsharp_slider_settings', array(
        'title' => __( 'Slide Image' ),
        'description' => __( 'Edit Slider Image' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
      ) );
      //slider image 1
      $wp_customize->add_setting( 'razzorsharp_slider_image_1', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'razzorsharp_slider_image_1',
			array(
				'label'      => __( 'Slider Image 1', 'Text Domain' ),
				'section'    => 'razzorsharp_slider_settings',
				'height'=>200, // cropper Height
				'width'=>1000, // Cropper Width
				'flex_width'=>false, //Flexible Width
				'flex_height'=>false, // Flexible Heiht
			)
		)
        
	);

    //slider image 2
    $wp_customize->add_setting( 'razzorsharp_slider_image_2', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'razzorsharp_slider_image_2',
			array(
				'label'      => __( 'Slider Image 2', 'Text Domain' ),
				'section'    => 'razzorsharp_slider_settings',
				'height'=>200, // cropper Height
				'width'=>1000, // Cropper Width
				'flex_width'=>false, //Flexible Width
				'flex_height'=>false, // Flexible Heiht
			)
		)
        
	);

    //slider image 3
    $wp_customize->add_setting( 'razzorsharp_slider_image_3', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'razzorsharp_slider_image_3',
			array(
				'label'      => __( 'Slider Image 3', 'Text Domain' ),
				'section'    => 'razzorsharp_slider_settings',
				'height'=>200, // cropper Height
				'width'=>1000, // Cropper Width
				'flex_width'=>false, //Flexible Width
				'flex_height'=>false, // Flexible Heiht
			)
		)
        
	);

  }
  add_action( 'customize_register', 'themeslug_customize_register' );
