<?php
/**
 * Register custom gutenberg blocks
 */

 function theme_acf_block_render_callback( $block ) {
  // convert name ("acf/testimonial") into path friendly slug ("testimonial")
  $slug = str_replace('acf/', '', $block['name']);

  // include a template part from within the "template-parts/block" folder
  if( file_exists( get_theme_file_path("/templates/blocks/{$slug}.php") ) ) {
    include( get_theme_file_path("/templates/blocks/{$slug}.php") );
  }
}

function theme_acf_blocks_init() {

	// check function exists
	if( function_exists('acf_register_block_type') ) {

		// ******************* XXX Block *******************************
		acf_register_block_type(array(
			'name'				=> 'XXX',
			'title'				=> __('XXX Block'),
			'description'		=> __('XXX block'),
      'render_callback'	=> 'theme_acf_block_render_callback',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'XXX' ),
      'mode' 	=> 'edit',
		));

    acf_register_block_type(array(
			'name'				=> 'home-hero',
			'title'				=> __('Home Hero'),
			'description'		=> __('Hero'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/home-hero.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'hero'),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'text-image-right',
			'title'				=> __('Text / Image Right'),
			'description'		=> __('text-image-right'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/text-image-right.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'text image right'),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'image-left-text',
			'title'				=> __('Image Left / Text'),
			'description'		=> __('Image Left / Text'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/image-left-text.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'Image Left Text'),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'prospectives-listen',
			'title'				=> __('Prospectives Listen'),
			'description'		=> __('Prospectives Listen'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/prospectives-listen.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'prospectives listen'),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'perspectives-read',
			'title'				=> __('Prospectives Read'),
			'description'		=> __('Prospectives Read'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/perspectives-read.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'prospectives Read'),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'perspectives-learn',
			'title'				=> __('Prospectives Learn'),
			'description'		=> __('Prospectives Learn'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/perspectives-learn.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'prospectives Learn'),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'perspectives-generic',
			'title'				=> __('Prospectives Generic'),
			'description'		=> __('Prospectives Generic'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/perspectives-generic.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'prospectives Learn'),
      'mode' 	=> 'edit',
    ));

  }
}
add_action('acf/init', 'theme_acf_blocks_init');

// Remove the default gutenberg block
// https://rudrastyh.com/gutenberg/remove-default-blocks.html
function theme_allowed_block_types($allowed_blocks, $post) {

  // if(get_page_template_slug( $post ) === 'template-name.php') {
  //   return array();
  // }

  return array(
    'acf/xxx',
    'acf/home-hero',
    'acf/text-image-right',
    'acf/image-left-text',  
    'acf/prospectives-listen',
    'acf/perspectives-read',
    'acf/perspectives-learn',  
    'acf/perspectives-generic',   
  );
}
add_filter('allowed_block_types', 'theme_allowed_block_types', 10, 2);
