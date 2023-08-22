        <footer>
            <div class="container-fluid m-5">
                <div class="row">
                    <div class="col border" style="min-width: 200px"><?php dynamic_sidebar( wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'container-class' => 'extra-menu'
                            )
                        ) ) ?></div>
                    <div class="col border" style="min-width: 200px">row</div>
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