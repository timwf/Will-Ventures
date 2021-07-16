<?php
/*
Template Name: Playbook
*/
get_header();



$copy = get_field('copy');
$header = get_field('header');
$image = get_field('image');
$accordian = get_field('accordian');
?>


<div class="page-wrap">
  <section class="playbook-hero">
    <div class="playbook-hero__inner">
      <div class="playbook-hero__left">
        <div class="playbook-hero__image-wrap">
          <img class="playbook-hero__image playbook-hero__image-one" src="<?php echo $image['url'] ?>" alt="">
          <img class="playbook-hero__image playbook-hero__image-two" src="<?php echo $image['url'] ?>" alt="">
          <img class="playbook-hero__image playbook-hero__image-three" src="<?php echo $image['url'] ?>" alt="">
          <div class="playbook-hero__bar">
            <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/bar.png" alt=""> 
          </div>
 
        </div>
      </div>
      <div class="playbook-hero__right js-visibility reveal-slide">
        <h1 class="header-compressed-med"><?php echo $header ?></h1>
        <p class="oversized-p"><?php echo $copy ?></p>
      </div>
    </div>
  </section>
</div>
<div class="playbook-hero__seperator ">
  <h4 class="header-wide-small js-visibility reveal-slide">HOW WE DO IT</h4>
</div>

<section class="playbook-accordian">
  <div class="playbook-accordian__inner">
    <?php foreach ($accordian as $item):?>  
      <div class="playbook-accordian__item">
        <div class="playbook-accordian__header">
          <h2 class="header-wide"><?php echo $item['category'] ?></h2>
         
        </div>
        <div class="playbook-accordian__copy">
          <p class="body-p"><?php echo $item['category_copy'] ?></p>
        </div>

      </div>
      
    <?php endforeach; ?>  



  </div>
</section>


<?php get_footer(); ?>
