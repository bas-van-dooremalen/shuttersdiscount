<?php
// Custom Post types & Taxonomies here

add_action( 'init', 'shutter_deals' );
/**
 * Register a case post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function shutter_deals() {
	$labels = array(
		'name'               => _x( 'Deals', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Deal', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Deals', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Deal', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Voeg nieuwe deal toe', 'deal', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Voeg nieuwe deal toe', 'deal' ),
		'new_item'           => __( 'Nieuwe deal', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Bewerk deal', 'your-plugin-textdomain' ),
		'view_item'          => __( 'Bekijk alle Deals', 'your-plugin-textdomain' ),
		'all_items'          => __( 'Alle Deals', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Zoek Deals', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'Geen deals gevonden.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'Geen deals in prullenbak gevonden.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'shutters-prijzen' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author' )
	);

	register_post_type( 'shutter-deal', $args );
}

add_action( 'init', 'shutter_reviews' );
/**
 * Register a case post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function shutter_reviews() {
	$labels = array(
		'name'               => _x( 'Reviews', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Review', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Reviews', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Review', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Voeg nieuwe review toe', 'review', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Voeg nieuwe review toe', 'review' ),
		'new_item'           => __( 'Nieuwe review', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Bewerk review', 'your-plugin-textdomain' ),
		'view_item'          => __( 'Bekijk alle reviews', 'your-plugin-textdomain' ),
		'all_items'          => __( 'Alle reviews', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Zoek reviews', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'Geen reviews gevonden.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'Geen reviews in prullenbak gevonden.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'shutters-reviews' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author' )
	);

	register_post_type( 'shutter-review', $args );
}