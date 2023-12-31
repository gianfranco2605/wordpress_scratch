<!-- start bootstrap navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- get_home_url() = homepage -->
        <!-- < ? = is the same as < ? php echo -->
        

        <?php 
            if ( has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <a class="navbar-brand site-title" href="<?= get_home_url(); ?>">
                <?php bloginfo('name'); ?>
                </a>
                <?php
            }
        ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNavDropdown',  
                    'menu_class' => 'navbar-nav',
                    'walker' => new header_menu_walker(),
                )
            )
            ?>

            <form class="form-inline my-2 mr-lg-0" action="<?php home_url() ?>">
            <!-- input name="s" important!!!  -->
                <input name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <form role="search" method="get" action="http://wordpressscratch.local/" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><div class="wp-block-search__inside-wrapper "><input class="wp-block-search__input" id="wp-block-search__input-2" placeholder="Search Blogs" value="" type="search" name="s" required=""><button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit">Search</button></div></form>
            
        </div>
        
    </nav>
<!-- end bootstrap navbar -->

