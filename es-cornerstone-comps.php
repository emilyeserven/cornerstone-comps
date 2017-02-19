<?php

/*
Plugin Name: Cornerstone Components
Plugin URI:
Description: Extra components for the Cornerstone builder on WordPress.
Author: Emily Serven
Author URI: www.emilyserven.net
Version: 0.1.0
*/

define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'MY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

add_action( 'wp_enqueue_scripts', 'my_extension_enqueue' );
add_action( 'cornerstone_register_elements', 'my_extension_register_elements' );

function my_extension_register_elements() {

	cornerstone_register_element( 'Iconbox_Element', 'iconbox-element', MY_PLUGIN_PATH . 'includes/iconbox-element' );

}

function my_extension_enqueue() {
	wp_enqueue_style( 'my_extension-styles', MY_PLUGIN_URL . '/assets/styles/es-cornerstone-comps.css', array(), '0.1.1' );
}