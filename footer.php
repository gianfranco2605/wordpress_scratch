        <footer>
            <div class="container-fluid m-5">
                <div class="row">
                    <div class="col border" style="min-width: 200px"><?php dynamic_sidebar( wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'container-class' => 'extra-menu'
                            )
                        ) ) ?></div>
                    <div class="col border" style="min-width: 200px">
                    <?php
                        $args = ['category_name'=>'woks', 'post_type'=>'post'];

                        $my_post = new WP_Query( $args );

                        if( $my_post->have_posts() ) {
                            while($my_post->have_posts() ) {
                                $my_post->the_post();
                                    get_template_part('templates-parts/post-sidebar');
                                }
                                
                            }
                            // restore original post data
                            wp_reset_postdata();
                    ?>
                    </div>
                    <div class="col border" style="min-width: 200px">
                        <!-- adminbar -->
                        <?php wp_footer();
                        
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'container-class' => 'extra-menu'
                            )
                        )
                        ?>  
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>