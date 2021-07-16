<?php
/*
Template Name: Perspectives
*/
get_header();



$add_menu_items = get_field('add_menu_items');


?>
<div class="page-wrap">
<section class="top-bar-page active">
  <div class="top-bar-page__inner">
    <ul>
      <div class="top-bar-page__menu-wrap" style="display: flex">
      <li class="body-p active" data-category="All">
        EVERYTHING
      </li>

      <?php foreach ($add_menu_items as $item):?>

        <li class="body-p" data-category="<?php echo $item['category']->name ?>">
          <?php echo $item['category']->name ?>
        </li>
      <?php endforeach; ?>  


      <!-- <li class="body-p" data-category="Podcast">
        PODCAST
      </li>
      <li class="body-p" data-category="Founder Stories">
        FOUNDER STORIES
      </li>
      <li class="body-p" data-category="Insights">
        INSIGHTS
      </li> -->
      </div>
  
        <div class="top-bar-page__search top-bar-page__search--perspectives">
          <input class="top-bar-page__input" type="text">
          <?php _get_template_part('templates/components/_icon-search'); ?>
        </div>

    </ul>
    <!-- <div class="top-bar-page__search">
      <input class="top-bar-page__input" type="text">
      <?php //_get_template_part('templates/components/_icon-search'); ?>
    </div> -->
    
  </div>
</section>

<!-- <section class="perspectives-mobile-search active">
  <div class="perspectives-mobile-search__inner container">
      <p class="body-p">SEARCH</p>
      <input class="perspectives-mobile-search__input" type="text">
      <?php //_get_template_part('templates/components/_icon-search'); ?>
  </div>
</section> -->

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



<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

  if($post_query->have_posts() ) { ?>
    <section class="post-results"> 
      <div class="post-results__inner ">
    
    <?php
      while($post_query->have_posts() ) {
        $post_query->the_post();
        $category = get_the_category( )[0]->name;
        ?>
        <a href="<?php echo the_permalink() ?>">
        <div class="post-results__item-wrap" data-category="<?php echo $category ?>">
          <div class="post-results__item container">
            <div class="post-results__item-content">
              <h2 class="header-compressed-med"><?php the_title(); ?></h2>
              <?php the_excerpt(); ?>
              
            </div>
            <?php if($category == "Podcast"){ ?>
            <?php _get_template_part('templates/components/_icon-play'); ?>
            <?php 
            }
            ?>
          </div>
        </div>
        </a>
      <?php
      } ?>
      </div>
    </section>
    <?php
  }
?>




</div>

<?php get_footer(); ?>
