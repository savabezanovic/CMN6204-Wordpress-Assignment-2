<?php 
/* Template Name: About Custom Template */ 
get_header();
the_post();
?>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">About
    <small>Subheading</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">About</li>
  </ol>

  <?php
    $url = get_field('my_portrait')['sizes']['Hero'];
    $alt = get_field('my_portrait')['alt'];
  ?>

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid" src="<?= $url ?>" alt="<?= $alt ?>">
    </div>
    <div class="col-lg-6">
      <?php the_content(); ?>
    </div>
    <!-- /.row -->

    <!-- Our Customers -->
    <h2>Our Customers</h2>
    <div class="row">
      
        <?php 
          
          $customers = get_field('customers');
          
            foreach ($customers as $customer) :
              $url = $customer['logo']['sizes']['thumbnail']; 
        ?>
      <div class="col-lg-2 col-sm-4 mb-4">
        
        <img class="img-fluid" src="<?= $url ?>" alt="">

      </div>
      <?php 

        endforeach; 

      ?>

      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php get_footer(); ?>