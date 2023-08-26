<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- creating variable to change in customize section -->
      <?php 

        $image1 = get_template_directory_uri() . '/assets/images/one.jpg';

        if( get_theme_mod('razzorsharp_slider_image_1', '') != "" ) {
          $image1 = wp_get_attachment_url(get_theme_mod('razzorsharp_slider_image_1', ''));
        }
      
      ?>

      <?php 

      $image2 = get_template_directory_uri() . '/assets/images/two.jpg';

      if( get_theme_mod('razzorsharp_slider_image_2', '') != "" ) {
        $image2 = wp_get_attachment_url(get_theme_mod('razzorsharp_slider_image_2', ''));
      }

      ?>

      <?php 

      $image3 = get_template_directory_uri() . '/assets/images/three.jpg';

      if( get_theme_mod('razzorsharp_slider_image_3', '') != "" ) {
        $image3 = wp_get_attachment_url(get_theme_mod('razzorsharp_slider_image_3', ''));
      }

      ?>
      <img src="<?= $image1 ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $image2 ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $image3 ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>