<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= custom_title(); ?> </title>

  
    <?php wp_head(); ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php home_url(); ?>"> <?= get_bloginfo('name'); ?> </a>
          <?php wp_nav_menu([
            'menu_class' => 'navbar-nav ml-auto' , 
            'theme_location' => 'main-menu'
            ]); ?>
      </div>
    </nav>

