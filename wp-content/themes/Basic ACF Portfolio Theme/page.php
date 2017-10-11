<?php get_header(); ?>
<?php the_post(); ?>


    <!-- Page Content -->
    <div class="container">
      
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Full Width
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Full Width</li>
      </ol>

      <div class="content">
        <?= the_content(); ?>
      </div>
      

    </div>
    <!-- /.container -->

<?php get_footer(); ?>