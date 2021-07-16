<?php
  $select_a_category = get_field('select_a_category');
  $header = get_field('header');
  $copy = get_field('copy');
  $image = get_field('image');
?>

<section class="prospectives-listen  prospectives-generic js-perspective-block active" data-category="<?php echo $select_a_category->name ?>">
  <div class="prospectives-listen__background"></div>
  <div class="prospectives-listen__inner ">
    <div class="prospectives-listen__left">
      <h2 class="header-compressed-med"><?php echo $header ?></h2>
      <p class="body-p"><?php echo $copy ?> </p>
    </div>
    <div class="prospectives-listen__right">
      <img src="<?php  echo $image['url']?>" alt=""> 
    </div>
  </div>
</section>
<div class="prospectives-listen__divider"></div>