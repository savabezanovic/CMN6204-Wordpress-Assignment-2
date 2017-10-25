<?php /* Template Name: Portfolio Custom Template */ ?>
<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Services
    <small>Subheading</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Services</li>
  </ol>

  <!-- Image Header -->
  <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

  <!-- Marketing Icons Section -->
<div class="row">
<?php 
  $categories = get_categories();
    foreach ($categories as $category) : 
         
?>

  
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header"> <?= $category->name ?> </h4>
        <div class="card-body">
          <p class="card-text"> <?= $category->description ?> </p>
        </div>
        <div class="card-footer">
          <a href=" <?= get_category_link($category->cat_ID); ?> " class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  

<?php endforeach; 
  wp_reset_postdata();
?>
</div>
  <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>