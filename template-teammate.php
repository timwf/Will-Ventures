<?php
/*
Template Name: Team Mate
*/
  get_header();  
  $cat = get_field('category');
  $title = get_field('title');
?>


<div class="page-wrap">

  <section class="teammate-header js-visibility reveal-slide">
    <div class="teammate-header__inner container">
      <div class="teammate-header__left">
        <h1 class="header-compressed">TEAMMATES</h1>
      </div>
      <div class="teammate-header__right">
        <p class="oversized-p">We’re the teammates that match your mindset and work ethic. </p>
      </div>
    </div>
  </section>

<?php
$post_type = 'teammates';
// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );
foreach( $taxonomies as $taxonomy ) : 
    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );
    $reversed  = array_reverse($terms);

    foreach( $reversed  as $term ):
      $args = array(
        'post_type' => 'teammates', // if you want to further filter by post_type

          'order' => 'ASC',
        'tax_query' => array(
          array(
          'taxonomy' => 'teammates_category',
          'field' => 'term_id',
          'terms' => $term->term_id // you need to know the term_id of your term "example 1"
           )
        )
        );
        $query = new WP_Query( $args );  ?>
        <section class="teammates-divider">
          <h4 class="header-wide-small container"><?php echo $term->name ?></h4>
        </section>
        <section class="teammates-grid">
          <div class="teammates-grid__inner container js-visibility reveal-slide">
        <?php        
        while ( $query->have_posts() ):
          $query->the_post();
          $name = get_field('name');
          $job_description = get_field('job_description');
          $quote = get_field('quote');
          $text = get_field('text');
          $linkedin_url = get_field('linkedin_url');
          $titter_url = get_field('titter_url');
          $image = get_field('image');
          $teammates_category = get_the_terms( $post, 'teammates_category' ); 
        ?>         

        <div class="teammates-grid__item ">
          <img src="<?php echo $image['url'] ?>" alt="">
          <h2><?php echo $name ?></h2>
          <h3 class="btn-text"><?php echo $job_description ?></h3>
          <div class="teammates-grid__hidden">
            <div class="teammates-grid__header">
              <div class="teammates-grid__social">
                <a href="">
                  <?php _get_template_part('templates/components/_twitter'); ?>
                </a>
                <a href="">
                  <?php _get_template_part('templates/components/_linkedin'); ?>
                </a>
              </div>
              <?php _get_template_part('templates/components/_icon-close'); ?>
            </div>
            <h4 class="black-p-expanded"><?php echo $quote ?></h4>
            <p class="body-p"><?php echo $text ?></p>
          </div>
        </div>
    <?php endwhile;?>
  </div>
</section>

<?php
    endforeach; 
endforeach;
?>

<?php get_footer(); ?>
