<?php
/*
Template Name: Portfolio
*/
get_header();


  $copy = get_field('copy');
  $image_top = get_field('image_top');
  $image_bottom = get_field('image_bottom');
  $logo = get_field('logo');

?>


<div class="page-wrap">


<section class="portfolio-hero">
  <div class="portfolio-hero__inner ">
    <div class="portfolio-hero__left js-visibility reveal-slide">
      <h1 class="header-wide-med"><?php echo $copy ?></h1>
    </div>

    <div class="portfolio-hero__right js-visibility reveal-slide reveal-del-1">
      <div class="portfolio-hero__right-top ">
        <div class="portfolio-hero__right-top-text-wrap ">
        </div>        
        <img class="" src="<?php echo $image_top['url'] ?>" alt="">   
      </div>
      <div class="portfolio-hero__right-bottom ">
        <div class="portfolio-hero__right-bottom-image-wrap">
        <img  src="<?php echo $image_bottom['url'] ?>" alt="">  
        </div>
        <div class="portfolio-hero__right-bottom-text-wrap">      
        </div>  
      </div>
      <div class="portfolio-hero__bar">
      <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/bar.png" alt="">   
      </div>
    </div>
  </div>
</section>

<section class="portfolio-logos">
  <div class="portfolio-logos__inner container">
    <div class="portfolio-logos__grid">



    <?php foreach ($logo as $item):?>    

      <div class="portfolio-logos__grid-item">
        <div class="portfolio-logos__image-wrap">


          <?php  if($item['black_logo']['subtype'] == "svg+xml"){?>
            <img src="<?php echo $item['black_logo']['url'] ?>" alt="" class="portfolio-logos__svg">
          <?php
          }else{ ?>
            <img src="<?php echo $item['white_logo']['url'] ?>" alt="" class="portfolio-logos__white-img">
            <img src="<?php echo $item['black_logo']['url'] ?>" alt="" class="portfolio-logos__black-img">
          <?php
          }
          ?>



        </div>

        <div class="portfolio-logos__hidden-wrap">
          <div class="portfolio-logos__hidden-header">
            <a href="<?php echo $item['link']['url'] ?>">


            <?php  if($item['black_logo']['subtype'] == "svg+xml"){?>
            <img src="<?php echo $item['black_logo']['url'] ?>" alt="" class="portfolio-logos__svg-white">
          <?php
          }else{ ?>
              <img src="<?php echo $item['white_logo']['url'] ?>" alt="">
          <?php
          }
          ?>






            </a>
            <div class="js-close-logo">
              <?php _get_template_part('templates/components/_icon-close'); ?>
            </div>
          </div>

          
          <div class="portfolio-logos__founder-wrap">
            <p class="header-wide-small">FOUNDER</p>
            <p class="body-p-bold"><?php echo $item['founder'] ?></p>
          </div>
          <p class="oversized-p"><?php echo $item['copy'] ?></p>
          <h5 class="tags"><?php echo $item['tag_line'] ?></h5>          
        </div>

      </div>

      <?php endforeach; ?>  





    </div>
  </div>

</section>




<?php
  if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) : the_post();
    the_content();
    endwhile;
  else :
    echo "No posts found.";
  endif;     
?>






</div>

<?php get_footer(); ?>
