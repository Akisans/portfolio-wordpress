<?php

/**
 * Shema shortcodes
 *
 * @package Wordpress.Plugins
 * @subpackage Dropscodes
 * @since Dropscodes 1.0
 * @author TDGR / Pixeldrops.net
 */

if( !function_exists ('dropscodes_scripts') ) :
	function dropscodes_scripts() {

		$scripts_dir = plugin_dir_url( __FILE__ );
		wp_enqueue_script( 'tdgr-owl-carousel', $scripts_dir . 'assets/js/owl.carousel.min.js', array('jquery'), '2.0.0', true );
	
	}
	add_action('wp_enqueue_scripts', 'dropscodes_scripts');
endif;
