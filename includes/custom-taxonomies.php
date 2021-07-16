<?php
/**
 * Custom taxonomies for use with this theme
 *
 *
 * @package theme-name
 */

function teammates_category_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Teammate Category', 'Taxonomy General Name', 'will-ventures-theme' ),
		'singular_name'              => _x( 'Teammate Category', 'Taxonomy Singular Name', 'will-ventures-theme' ),
		'menu_name'                  => __( 'Teammate Category', 'will-ventures-theme' ),
		'all_items'                  => __( 'All Teammate Category', 'will-ventures-theme' ),
		'parent_item'                => __( 'Parent Teammate Category', 'will-ventures-theme' ),
		'parent_item_colon'          => __( 'Parent Teammate Category:', 'will-ventures-theme' ),
		'new_item_name'              => __( 'New Teammate Category', 'will-ventures-theme' ),
		'add_new_item'               => __( 'Add Teammate Category', 'will-ventures-theme' ),
		'edit_item'                  => __( 'Edit Teammate Category', 'will-ventures-theme' ),
		'update_item'                => __( 'Update Teammate Category', 'will-ventures-theme' ),
		'view_item'                  => __( 'View Teammate Category', 'will-ventures-theme' ),
		'separate_items_with_commas' => __( 'Separate Teammate Category with commas', 'will-ventures-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Teammate Category', 'will-ventures-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'will-ventures-theme' ),
		'popular_items'              => __( 'Popular Teammate Category', 'will-ventures-theme' ),
		'search_items'               => __( 'Search Teammate Category', 'will-ventures-theme' ),
		'not_found'                  => __( 'Not Found', 'will-ventures-theme' ),
		'no_terms'                   => __( 'No Teammate Category', 'will-ventures-theme' ),
		'items_list'                 => __( 'Teammate Category list', 'will-ventures-theme' ),
		'items_list_navigation'      => __( 'Teammate Category list navigation', 'will-ventures-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'teammates_category', array( 'teammates' ), $args );

}
add_action( 'init', 'teammates_category_taxonomy', 0 );
