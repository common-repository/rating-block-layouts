<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/chinteshprajapati/
 * @since             1.0.0
 * @package           Rating_Layouts
 *
 * @wordpress-plugin
 * Plugin Name:       Rating Block Layouts
 * Plugin URI:        -
 * Description:       Display ratings in different layouts using wordpress block.
 * Version:           1.0.0
 * Author:            Chintesh Prajapati
 * Author URI:        https://profiles.wordpress.org/chinteshprajapati/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rating-layouts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


function rating_layouts_block_admin_enqueue_script() {

	wp_enqueue_style( 'rating-layout-font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_script(
	    'rating-layout-build',
	    plugins_url( 'rating-layout-build.js', __FILE__ ),
	    array('wp-block-editor', 'wp-blocks', 'wp-components', 'wp-compose', 'wp-element', 'wp-polyfill', 'wp-primitives'),
	    'd5785c5ee2338c0a7311b4feecab0820'
	);	
}
add_action( 'admin_enqueue_scripts', 'rating_layouts_block_admin_enqueue_script' );

function rating_layouts_block_public_enqueue_script() {

	wp_enqueue_style( 'rating-layout-font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'rating_layouts_block_public_enqueue_script' );