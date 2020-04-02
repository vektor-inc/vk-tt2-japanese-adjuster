<?php
/**
 * Plugin Name:     Lightning Customize Plugin
 * Plugin URI:      https://github.com/vektor-inc/lightning-customize-plugin
 * Description:     
 * Author:          
 * Author URI:      
 * Text Domain:     lightning-customize-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 * License: 		GNU General Public License v2 or later
 * License URI: 	http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package         Lightning_Customize_Plugin
 */

// Your code starts here.

/*
  Change Author Archive title
/*-------------------------------------------*/
function my_lightning_get_the_archive_title( $title ){
	if ( is_author( )){
		$title = '<span>' . esc_html( get_the_author() ). '</span>';
	}
	return $title;
}
add_filter( 'lightning_get_the_archive_title', 'my_lightning_get_the_archive_title' );