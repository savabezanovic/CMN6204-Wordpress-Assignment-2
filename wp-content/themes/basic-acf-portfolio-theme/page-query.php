<?php /* Template Name: Query Practice Template */ 


echo '<h1>This is an example of a very basic WP_Query Loop.</h1>';

	$query = new WP_Query([
		'post_type' => 'post'
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

echo '<h1>Now let\'s look at what get_posts does.<br>Note that i have added a posts_per_page parameter. It simply limits the number of the posts returned.</h1>';

	$posts = get_posts([
		'post_type' => 'post',
		'posts_per_page' => 1
	]);

	foreach ($posts as $post) {
		var_dump($post);
	}

echo '<h1>Let\'s try a more advanced example of a Query:<br>I am looking for all "posts" from the category "front-end", that are tagged "css". I want them to be ordered by "modified date" and presented in ascending order. *your category and tag names may differ</h1>';

	$query = new WP_Query([
		'post_type' => 'post',
		'category_in' => 'websites',
		'tag' => 'php',
		'orderby' => 'modified',
		'order' => 'ASC',
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

// Home work

echo '<h1>Task #1</h1>'	;
	$query = new WP_Query([
		'post_type' => 'post',
		'orderby' => 'modified',        
		'order' => 'ASC',
		'posts_per_page' => 2,
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

echo '<h1>Task #2</h1>';
	$query = new WP_Query([
		'post_type' => 'page',
		'order' => 'ASC',
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

echo '<h1>Task #3</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'orderby' => 'date',        
		'order' => 'ASC',
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo get_the_date();
		echo '<br>';
	}

	echo '<h1>Task #3.1</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'orderby' => 'completed_date',
		'orderby' => 'meta_value_num', 
		'order' => 'ASC'       
		
	]);

	while($query->have_posts()) {
		$query->the_post();
		$posts_date = get_field('completed_date');
		echo get_the_title() . ' - ' . $posts_date;
		echo '<br>';
	}

echo '<h1>Task #4</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'tag_slug__in' => ['php', 'wordpress'],
		'orderby' => 'modified',
		'order' => 'ASC',
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title() . ':  ';
		$post_tags = get_the_tags();
			if ( $post_tags ) {
    		foreach( $post_tags as $tag ) {
    		echo $tag->name . ', ' ; 
    		}
		}
	}
echo '<h1>Task #5</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'tag_slug__in' => ['php', 'wordpress'],
		'orderby' => 'modified',
		'order' => 'ASC',
		'posts_per_page' => 3,
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title() . ':  ';
		$post_tags = get_the_tags();
			if ( $post_tags ) {
    		foreach( $post_tags as $tag ) {
    		echo $tag->name . ', ' ; 
    		}
		}
	}
echo '<h1>Task #6</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'name' => 'Apple'
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo get_author_name() . ' ';
		echo get_the_author_meta('ID');
	}
echo '<h1>Task #7</h1>';
	$query = new WP_Query([
		'post_type' => 'post',
		'name' => 'Apple'
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo get_author_name() . ' ';
		echo get_the_author_meta('ID');
		$user = get_user_by('id', '1');
		if ($user){
			echo ' ' . $display_name . $user_email;
		}
	}
echo '<h1>Task #8</h1>';
$query = new WP_Query([
	'post_type' =>'post',
	'category_name' => 'websites',
	'order' => 'ASC',
	'posts_per_page' => -1,
]);
	while($query->have_posts()){
		$query->the_post();
		echo the_title('<li>');
	}

echo '<h1>Task #9</h1>';
$query = new WP_Query([
	'post_type' =>'post',
	'order' => 'ASC',
	'posts_per_page' => -1,
]);
	while($query->have_posts()){
		$query->the_post();
		echo  '<ol>' . the_title() . ' [ ' . get_author_name() . ' ] ' . ' ( ' . get_the_date() . ' ) ' . '</ol>';
	}