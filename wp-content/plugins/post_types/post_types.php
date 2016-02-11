<?php
/*
Plugin Name: Polmo Lite Post Types
Description: Polmo Lite WordPress Post Type Plugins
Author: Jewel Theme
Author URI: http://www.jeweltheme.com
Version: 1.0.0
*/

function jeweltheme_polmo_register_post_type() {
    $labels = array(
        'name' => _x('Portfolios', 'Post Type General Name', 'jeweltheme_polmo'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'jeweltheme_polmo'),
        'menu_name' => __('Portfolios', 'jeweltheme_polmo'),
        'parent_item_colon' => __('Parent Portfolio:', 'jeweltheme_polmo'),
        'all_items' => __('All Portfolios', 'jeweltheme_polmo'),
        'view_item' => __('View Portfolio', 'jeweltheme_polmo'),
        'add_new_item' => __('Add New Portfolio', 'jeweltheme_polmo'),
        'add_new' => __('New Portfolio', 'jeweltheme_polmo'),
        'edit_item' => __('Edit Portfolio', 'jeweltheme_polmo'),
        'update_item' => __('Update Portfolio', 'jeweltheme_polmo'),
        'search_items' => __('Search Portfolios', 'jeweltheme_polmo'),
        'not_found' => __('No portfolio found', 'jeweltheme_polmo'),
        'not_found_in_trash' => __('No portfolios found in Trash', 'jeweltheme_polmo'),
    );
    $args = array(
        'label' => __('Portfolio', 'jeweltheme_polmo'),
        'description' => __('Portfolio', 'jeweltheme_polmo'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . '/images/portfolio.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('portfolio', $args);


 // Portfolio Category taxonomy,
  $labels1 = array(
        'name' => _x( 'Category', 'taxonomy general name', 'jeweltheme_polmo'),
        'singular_name' => _x( 'Category', 'taxonomy singular name', 'jeweltheme_polmo'),
        'search_items' =>  __( 'Search Category', 'jeweltheme_polmo'),
        'popular_items' => __( 'Popular Category', 'jeweltheme_polmo'),
        'all_items' => __( 'All Category\'s', 'jeweltheme_polmo'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Category', 'jeweltheme_polmo'),
        'update_item' => __( 'Update Category', 'jeweltheme_polmo'),
        'add_new_item' => __( 'Add New Category', 'jeweltheme_polmo'),
        'new_item_name' => __( 'New Category Name', 'jeweltheme_polmo'),
        'separate_items_with_commas' => __( 'Separate Category with commas', 'jeweltheme_polmo'),
        'add_or_remove_items' => __( 'Add or remove Category', 'jeweltheme_polmo'),
        'choose_from_most_used' => __( 'Choose from the most used Category', 'jeweltheme_polmo'),
        'menu_name' => __( 'Category', 'jeweltheme_polmo'),
    ); 

    //Register Taxonomy
    register_taxonomy('portfolio','portfolio',array(
        'hierarchical' => true,
        'labels' => $labels1,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'portfolio' ),
        ));
}
add_action('init','jeweltheme_polmo_register_post_type');

