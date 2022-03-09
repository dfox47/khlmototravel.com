<?php
/*
   Plugin Name: Advanced Tours
   description: Create your own tours easy and fast.
   Version: 1.0
   Author: Ognyan Geshev
   License: GPL
*/

function tours_register_post_type() {
    $labels = array(
        'name' => __( 'Tours', 'khlmototravel' ),
        'singular_name' => __( 'Tour', 'khlmototravel' ),
        'add_new' => __( 'New Tour', 'khlmototravel' ),
        'add_new_item' => __( 'Add New Tour', 'khlmototravel' ),
        'edit_item' => __( 'Edit Tour', 'khlmototravel' ),
        'new_item' => __( 'New Tour', 'khlmototravel' ),
        'view_item' => __( 'View Tours', 'khlmototravel' ),
        'search_items' => __( 'Search Tours', 'khlmototravel' ),
        'not_found' =>  __( 'No Tours Found', 'khlmototravel' ),
        'not_found_in_trash' => __( 'No Tours found in Trash', 'khlmototravel' ),
);
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
        'title',
        'editor',
        'excerpt',
        'custom-fields',
        'thumbnail',
        'page-attributes'
        ),
        'rewrite'   => array( 'slug' => 'moto-tours' ),
        'show_in_rest' => true
    );
    register_post_type( 'khl_tour', $args );
}
add_action( 'init', 'tours_register_post_type' );

