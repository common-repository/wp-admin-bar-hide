<?php

/* 
Plugin Name: WP Adminbar Hide
Description: Hides the WP Admin Bar in frontend .
Version: 1.0.1
Author: Mahesh Prajapati
Author URI:https://store.idomit.com/
Text Domain: wp-admin-bar-hide
*/ 
add_action('admin_print_scripts', 'wp_admin_bar_hide');
function wp_admin_bar_hide() { ?>
<style type="text/css">
	.show-admin-bar {display: none;}
</style>
<?php
}
add_filter('show_admin_bar', '__return_false');