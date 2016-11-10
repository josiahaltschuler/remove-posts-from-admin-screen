<?php
/*
Plugin Name: Remove Posts From Admin Screen
Description: Removes the posts menu item from the admin screen
Version: 0.1
License: GPL
Author: Josiah Altschuler, JSI
Author URI: http://jsi.com
*/

if (!defined('ABSPATH')) {
	exit;
}
    
function rpfas_remove_menu_pages() {
	remove_menu_page('edit.php');
}
add_action( 'admin_menu', 'rpfas_remove_menu_pages' );

function rpfas_remove_new_post( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'new-post' );
}
add_action( 'admin_bar_menu', 'rpfas_remove_new_post', 999 );

?>