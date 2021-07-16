<?php
  $image = get_field('image');
  $copy = get_field('copy');
  $buttonLink = get_field('button');
?>

<section class="text-image-right section">
  <div class="text-image-right__inner container">
    <div class="text-image-right__left">
      <div class="text-image-right__left-inner">
        <h2 class="header-wide-med"><?php echo $copy ?></h2>
        <a href="<?php echo $buttonLink['url'] ?>"><button class="btn"><?php echo $buttonLink['title'] ?></button></a>
      </div>
    </div>
    <div class="text-image-right__right">
      <div class="text-image-right__image-wrap">
        <img class="text-image-right__image text-image-right__image-one" src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/basketball-man.png" alt="">
        <img class="text-image-right__image text-image-right__image-two" src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/basketball-man.png" alt="">
        <img class="text-image-right__image text-image-right__image-three" src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/basketball-man.png" alt="">
        <img class="text-image-right__image text-image-right__image-four" src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/basketball-man.png" alt="">

      </div>
     
    </div>
  </div>  
</section>
