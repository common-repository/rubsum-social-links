<?php 

// Add Scripts

function rssl_add_scripts(){
	wp_enqueue_style('rssl-main-style', plugins_url('/css/style.css', __FILE__ ));
	wp_enqueue_script('rssl-main-script', plugins_url('/js/main.js', __FILE__ ), array('jquery') );
}

add_action('wp_enqueue_scripts', 'rssl_add_scripts');