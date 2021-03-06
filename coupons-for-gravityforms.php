<?php
/*
Plugin Name: Coupons for Gravity Forms
Plugin URI: todo
Description: Adds coupon support for Gravity Forms
Version: 1.0
Author: WP Theme Tutorial
Author URI: http://wpthemetutotial.com/about/
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 *
 */
function gf_coupon_add_cpt(){

  register_post_type( 'gfcoupon', // http://codex.wordpress.org/Function_Reference/register_post_type
    array(
      'labels'                => array(
        'name'                  => __('Coupons'),
        'singular_name'         => __('Coupon'),
        'add_new'               => __('Add New'),
        'add_new_item'          => __('Add New Coupon'),
        'edit'                  => __('Edit'),
        'edit_item'             => __('Edit Coupon'),
        'new_item'              => __('New Coupon'),
        'view'                  => __('View Coupon'),
        'view_item'             => __('View Coupons'),
        'search_items'          => __('Search Coupons'),
        'not_found'             => __('No Coupons Found'),
        'not_found_in_trash'    => __('No Coupons found in Trash')
        // only useful if like pages 'parent'                => __()
        ), // end array for labels
      'description'           => __('Coupons for Gravity Forms'),
      'public'                => true,
      'menu_position'         => 5, // sets admin menu position
      //'menu_icon'           => get_stylesheet_directory_uri().'/assets/images/show-post-icon.png',
      'hierarchical'          => false, // funcions like posts
      'rewrite'               => array('slug' => 'show', 'with_front' => true,), // permalinks format
      'can_export'            => true,
    ) // end array for register_post_type
  ); // end register_post_type

}

add_action('init', 'gf_coupon_add_cpt' );

function gf_coupon_add_menu(){

}

//creates the subnav left menu
add_filter( 'gform_addon_navigation', 'gf_coupon_add_menu' );
?>
