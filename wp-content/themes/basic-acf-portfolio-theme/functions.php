<?php

function custom_title(){
	$name = get_bloginfo ('name');
	$description = get_bloginfo ('description');
	$page_title = wp_title('|', true, 'right');
	$title = $page_title . $name . ' ~ ' . $description;
	return $title;
}

function excerpt($content, $length = 10) {
	$content = wp_strip_all_tags($content);
	$content = substr($content, 0, $length);
	echo $content;
}

add_action('init', 'register_menus');

function register_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu top of the page'
	]);
}

add_action('wp_enqueue_scripts', 'custom_scripts');

function custom_scripts() {
	wp_register_style(
		'bootstrap',
		'/wp-content/themes/basic-acf-portfolio-theme/vendor/bootstrap/css/bootstrap.min.css',
		[],
		1.0,
		false
	);
	wp_register_style(
		'modern-business',
		'/wp-content/themes/basic-acf-portfolio-theme/css/modern-business.css',
		['bootstrap'],
		1.0,
		false
	);

	wp_enqueue_style('bootstrap');
	wp_enqueue_style('modern-business');
}

?>