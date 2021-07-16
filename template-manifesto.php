<?php
/*
Template Name: Credo
*/
get_header();

  $image_bg = get_field('image_bg');
  $image_one = get_field('image_one');
  $image_two = get_field('image_two');
  $image_three = get_field('image_three');

  $first_paragraph = get_field('first_paragraph');
  $second_paragraph = get_field('second_paragraph');
  $third_paragraph = get_field('third_paragraph');
  $points = get_field('points');
  $fourth_paragraph = get_field('fourth_paragraph');
  $button = get_field('button');




?>
<div class="page-wrap">
  <div class="credo">
    <div class="credo__inner">
      <div class="credo__left">
        <div class="credo__img-container ">
          <div class="credo__image-hidden">
            <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
          </div>
          <div class="credo__image-person credo__image-person--one">
            <img class="js-visibility reveal-slide-full" src="<?php  echo $image_one['url'] ?>" alt="">
          </div>
        </div>

        <div class="credo__img-container ">
          <div class="credo__image-hidden">
            <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
          </div>
        </div>
        <div class="credo__img-container ">
          <div class="credo__image-hidden">
            <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
          </div>
          <div class="credo__image-person credo__image-person--two">
            <img class="js-visibility reveal-slide-full" src="<?php  echo $image_two['url'] ?>" alt="">
          </div>
        </div>

        <div class="credo__img-container ">
          <div class="credo__image-hidden">
            <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
          </div>
        </div>
        <div class="credo__img-container ">
          <div class="credo__image-hidden credo__image-hidden--three">
          <img class="js-visibility reveal-slide-full "   src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/diver.png" alt="">  
            <!-- <img class="js-visibility reveal-slide-full" src="<?php  //echo //$image_bg['url'] ?>" alt=""> -->
          </div>
          <div class="credo__image-person credo__image-person--three">
            <!-- <img class="js-visibility reveal-slide-full" src="<?php // echo $image_three['url'] ?>" alt=""> -->
          </div>
        </div>


      </div>
      <div class="credo__right">
        <div class="credo__right-inner">
          <h1 class="header-compressed-med">CREDO</h1>
          <div class="credo__paragraph">
            <?php echo $first_paragraph ?>
          </div>

          <div class="credo__img-container" style="margin-top: 65px; margin-bottom: 39px">
            <div class="credo__image-hidden">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
            </div>
            <div class="credo__image-person credo__image-person--one">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_one['url'] ?>" alt="">
            </div>
          </div>

          <div class="credo__paragraph">
            <?php echo $second_paragraph ?>
          </div>

          <div class="credo__img-container " style="margin-top: 48px">
            <div class="credo__image-hidden">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
            </div>
          </div>
          <div class="credo__img-container ">
            <div class="credo__image-hidden">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
            </div>
            <div class="credo__image-person credo__image-person--two">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_two['url'] ?>" alt="">
            </div>
          </div>

          <div class="credo__paragraph">
            <?php echo $third_paragraph ?>
          </div>

          <div class="credo__points">
            <?php foreach ($points as $point):?>
              <div class="credo__point js-visibility reveal-slide">
                <div class="credo__point-line">
                </div>
                <p><?php echo $point['point']  ?></p>
              </div>
            <?php endforeach; ?>  
          </div>

          <div class="credo__paragraph">
            <?php echo $fourth_paragraph ?>
          </div>
          <a href="<?php echo $button['url'] ?>">
            <button class="btn"><?php echo $button['title'] ?></button>
          </a>

          <div class="credo__img-container " style="margin-top: 48px">
            <div class="credo__image-hidden">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
            </div>
          </div>
          <div class="credo__img-container ">
            <div class="credo__image-hidden">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_bg['url'] ?>" alt="">
            </div>
            <div class="credo__image-person credo__image-person--three">
              <img class="js-visibility reveal-slide-full" src="<?php  echo $image_three['url'] ?>" alt="">
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
