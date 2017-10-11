<?php

function custome_title(){
	return get_bloginfo('name').' ~ '.get_bloginfo('description');
}


add_action('init', 'register_menus');
function register_menus() {
	register_nav_menus([
		'main' => 'Main Menu for top of the page',
		
]);

}

?>