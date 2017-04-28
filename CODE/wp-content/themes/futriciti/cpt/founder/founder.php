<?php
/**
 * Created by: Jenrry Cordero
 * */

// Register Custom Post Type
function f_founder_post_type() {

    $labels = array(
        'name' => _x('Founder', 'Post Type General Name', 'f'),
        'singular_name' => _x('Founder', 'Post Type Singular Name', 'f'),
        'menu_name' => __('Founder', 'f'),
        'name_admin_bar' => __('Founder', 'f'),
        'archives' => __('Item Archives', 'f'),
        'parent_item_colon' => __('Parent Item:', 'f'),
        'all_items' => __('All Items', 'f'),
        'add_new_item' => __('Add New Item', 'f'),
        'add_new' => __('Add New', 'f'),
        'new_item' => __('New Item', 'f'),
        'edit_item' => __('Edit Item', 'f'),
        'update_item' => __('Update Item', 'f'),
        'view_item' => __('View Item', 'f'),
        'search_items' => __('Search Item', 'f'),
        'not_found' => __('Not found', 'f'),
        'not_found_in_trash' => __('Not found in Trash', 'f'),
        'featured_image' => __('Featured Image', 'f'),
        'set_featured_image' => __('Set featured image', 'f'),
        'remove_featured_image' => __('Remove featured image', 'f'),
        'use_featured_image' => __('Use as featured image', 'f'),
        'insert_into_item' => __('Insert into item', 'f'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'f'),
        'items_list' => __('Items list', 'f'),
        'items_list_navigation' => __('Items list navigation', 'f'),
        'filter_items_list' => __('Filter items list', 'f'),
    );
    $rewrite = array(
        'slug' => 'founder',
        'with_front' => true,
        'pages' => true,
        'feeds' => true,
    );
    $args = array(
        'label' => __('Founder', 'f'),
        'description' => __('Post Type Description', 'f'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'query_var' => 'founder',
        'rewrite' => $rewrite,
        'capability_type' => 'page',
    );
    register_post_type('founder', $args);
}

add_action('init', 'f_founder_post_type', 0);

