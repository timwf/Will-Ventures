<?php
  $image_background = get_field('image_background');
  $image_copy = get_field('image_copy');
  $copy = get_field('copy');
  $buttonLink = get_field('button');
?>





<section class="image-left-text section">
  <div class="image-left-text__inner container">
    <div class="image-left-text__left">      
      <div class="image-left-text__left-inner ">
        <div class="image-left-text__image-wrap">
          <?php _get_template_part('templates/components/_resp-img', ['field' => $image_background, 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>  
        </div>       
      </div>
    </div>
    <div class="image-left-text__right ">
      <h2 class="header-wide-med"><?php echo $copy ?></h2>
      <a href="<?php echo $buttonLink['url'] ?>"><button class="btn"><?php echo $buttonLink['title'] ?></button></a>
    </div>
  </div>
</section>