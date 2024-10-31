<?php 
/**
* Plugin Name: RubSum Social Links
* Description: Ads social icons with links to profile
* Version: 1.0
* Author: Rubel's on behalf of RubSum
*
**/

// Exit if Accessed Directly

if(!defined('ABSPATH')){
	exit;
}

// load Scripts

require_once(plugin_dir_path(__FILE__).'/includes/rubsum-social-links-scripts.php');

// load Class

require_once(plugin_dir_path(__FILE__).'/includes/rubsum-social-links-class.php');

//Register Widget

function register_social_links(){
	register_widget('Social_Links_Widget');
}

add_action('widgets_init', 'register_social_links');

