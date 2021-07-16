<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme-name
 */

 get_header(); ?>



 <?php

  $copy = get_field('copy');

?>


<div class="page-wrap page-wrap--white">
	<div class="article">

		<section class="top-bar-page active">
		<div class="top-bar-page__inner">
			<p onclick="history.back()" class="body-p" >Back</p>
			<div class="top-bar-page__search">
				<input class="top-bar-page__input" type="text">
				<?php _get_template_part('templates/components/_icon-search'); ?>
			</div>    
			</div>
		</section>

		<div class="article">
			<div class="article__inner container">
				<div class="article__left">
					<div class="article__left-wrap">
						<h1 class="header-compressed"><?php the_title() ?></h1>
						<?php the_excerpt() ?>

						<div class="article__social">
							<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo home_url( $_SERVER['REQUEST_URI'] ) ?>">
								<?php _get_template_part('templates/components/_twitter'); ?>
							</a>	
							<a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo home_url( $_SERVER['REQUEST_URI'] ) ?>"> 
								<?php _get_template_part('templates/components/_linkedin'); ?>
							</a>
							<a href="mailto:?subject=<?php echo home_url( $_SERVER['REQUEST_URI'] ) ?>">
								<?php _get_template_part('templates/components/_icon-mail'); ?>
							</a>
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url( $_SERVER['REQUEST_URI'] ) ?>">
								<?php _get_template_part('templates/components/_icon-facebook'); ?>
							</a>						
						</div>
					</div>			
				</div>
				<div class="article__right">
					<?php echo $copy ?>
				</div>
			</div>
		</div>

		<div class="article__pagination">
			<div class="article__pagination-left">
				<?php $prev_post = get_adjacent_post(false, '', true);
					if(!empty($prev_post)) :
						$link = get_permalink($prev_post->ID);
						$title =  $prev_post->post_title; 
						$excerpt =  $prev_post->post_excerpt; ?>
					<a href="<?php echo $link ?>">
					<div class="article__pagination-inner">
						<h3 class="header-wide-med">PREVIOUS</h3>
						<p class="body-p"><?php echo $title ?></h1>
					</div>
					</a>
				<?php endif?>
			</div>
			<div class="article__pagination-right">
			<?php $next_post = get_adjacent_post(false, '', false);
				if(!empty($next_post)) :
					$link = get_permalink($next_post->ID);
					$title =  $next_post->post_title; 
					$excerpt =  $next_post->post_excerpt; ?>
					<a href="<?php echo $link ?>">
					<div class="article__pagination-inner">
						<h3 class="header-wide-med">NEXT</h3>
						<p class="body-p"><?php echo $title ?></h1>
					</div>
					</a>
      	<?php endif?>
			</div>
		</div>

	</div>

</div>




 		<?php
 		if ( have_posts() ) :

 			/* Start the Loop */
 			while ( have_posts() ) : the_post();

 			the_content();

 			endwhile;

 		else :

 			echo "No posts found.";

 		endif; ?>

 <?php get_footer(); ?>
