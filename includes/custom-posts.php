<?php
/**
 * Custom posts for use with this theme
 *
 *
 * @package theme-name
 */
// Function to change "posts" to "news" in the admin side menu
// function change_post_menu_label() {
//   global $menu;
//   global $submenu;
//   $menu[5][0] = 'ITEMs';
//   $submenu['edit.php'][5][0] = 'ITEMs';
//   $submenu['edit.php'][10][0] = 'Add ITEM';
//   $submenu['edit.php'][16][0] = 'Tags';
//   echo '';
// }
// add_action( 'admin_menu', 'change_post_menu_label' );
// // Function to change post object labels to "news"
// function change_post_object_label() {
//   global $wp_post_types;
//   $labels = &$wp_post_types['post']->labels;
//   $labels->name = 'ITEMs';
//   $labels->singular_name = 'ITEM';
//   $labels->add_new = 'Add ITEM';
//   $labels->add_new_item = 'Add ITEM';
//   $labels->edit_item = 'Edit ITEM';
//   $labels->new_item = 'ITEM';
//   $labels->view_item = 'View ITEM';
//   $labels->search_items = 'Search ITEMs';
//   $labels->not_found = 'No ITEMs found';
//   $labels->not_found_in_trash = 'No ITEMs found in Trash';
// }
// add_action( 'init', 'change_post_object_label' );

function teammates_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'artmother-theme' ),
		'singular_name'         => _x( 'Teammate', 'Post Type Singular Name', 'artmother-theme' ),
		'menu_name'             => __( 'Teammates', 'artmother-theme' ),
		'name_admin_bar'        => __( 'Teammate', 'artmother-theme' ),
		'archives'              => __( 'Teammate Archives', 'artmother-theme' ),
		'attributes'            => __( 'Teammate Attributes', 'artmother-theme' ),
		'parent_item_colon'     => __( 'Parent Teammate:', 'artmother-theme' ),
		'all_items'             => __( 'All Teammates', 'artmother-theme' ),
		'add_new_item'          => __( 'Add New Teammate', 'artmother-theme' ),
		'add_new'               => __( 'Add New', 'artmother-theme' ),
		'new_item'              => __( 'New Teammate', 'artmother-theme' ),
		'edit_item'             => __( 'Edit Teammate', 'artmother-theme' ),
		'update_item'           => __( 'Update Teammate', 'artmother-theme' ),
		'view_item'             => __( 'View Teammate', 'artmother-theme' ),
		'view_items'            => __( 'View Teammates', 'artmother-theme' ),
		'search_items'          => __( 'Search Teammate', 'artmother-theme' ),
		'not_found'             => __( 'Not found', 'artmother-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'artmother-theme' ),
		'featured_image'        => __( 'Featured Image', 'artmother-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'artmother-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'artmother-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'artmother-theme' ),
		'insert_into_item'      => __( 'Insert into Event', 'artmother-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'artmother-theme' ),
		'items_list'            => __( 'Teammates list', 'artmother-theme' ),
		'items_list_navigation' => __( 'Teammates list navigation', 'artmother-theme' ),
		'filter_items_list'     => __( 'Filter Teammates list', 'artmother-theme' ),
	);
	$args = array(
		'label'                 => __( 'Teammate', 'artmother-theme' ),
		'description'           => __( 'Teammate Post Type Description', 'artmother-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'category' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'teammates', $args );

}
add_action( 'init', 'teammates_custom_post_type', 0 );
