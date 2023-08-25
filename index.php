<?php
        
        get_header();
?>

        <!-- carousel bootstrap -->
        <?php if( is_home() ) {
            get_template_part('templates-parts/slider');
        };
        ?>
        <div class="container-fluid">
            <div class="row">       
                <div class="p-4 col card-group justify-content-center align-items-start">

                    <?php 
                        if( have_posts() ) {
                            // loop
                            while( have_posts() ) {
                                //avoid infinity loop
                                the_post();
                                // in case of not single page
                                // if( is_single() ) {
                                    // single post 
                                    // get_template_part('templates-parts/single-post');
                                // } else {
                                    // homepage
                                    get_template_part('templates-parts/post');
                                }
                                
                            }
                        // }               
                    ?>         
                </div>
                <div class="row col-md-3 justify-content-center p-2">
                    <div class="bg-light p-4">
                        <?php dynamic_sidebar('sidebar-1') ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- wp_query -->
          <div class="p-4 card-group justify-content-around">

                    <?php
                        $args = ['category_name'=>'woks', 'post_type'=>'post'];

                        $my_post = new WP_Query( $args );

                        if( $my_post->have_posts() ) {
                            while($my_post->have_posts() ) {
                                $my_post->the_post();
                                    get_template_part('templates-parts/post');
                                }
                                
                            }
                            // restore original post data
                            wp_reset_postdata();
                    ?>         
        </div>
        <br>
        <div class="d-flex justify-content-center"><?php the_posts_pagination(); ?></div>
        

<?php get_footer() ?>   