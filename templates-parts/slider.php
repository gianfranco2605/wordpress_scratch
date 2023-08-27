<?php 

$slider_active = get_theme_mod('razzorsharp_slider_activate', 1);


if ($slider_active) :  

?>

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
      <div class="carousel-caption d-none d-md-block">
        <?php
        
        $header_image_1 = get_theme_mod('razzorsharp_slider_image_header_text_1', 'Hello WordPress');

        $content_image_1 = get_theme_mod('razzorsharp_slider_image_content_text_1', 'Some logo text for your image');

        ?>
        <h5><?= $header_image_1 ?></h5>
        <p><?= $content_image_1 ?></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= $image2 ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lorem Ipsum</h5>
        <p>Hello</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= $image3 ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lorem Ipsum</h5>
        <p>Hello</p>
      </div>
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

<?php endif; ?>


<!-- <div class="carousel-item">
  <img src="..." alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div> -->