<?php 
get_header(); 

the_post();

?>

<!-- Page Content -->
<div class="container">

 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">Portfolio Item
   <small>Subheading</small>
 </h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.html">Home</a>
   </li>
   <li class="breadcrumb-item active">Portfolio Item</li>
 </ol>


 <pre>
   <?php
   $url = get_field('hero_image')['sizes']['Portfolio Featured'];
   $alt = get_field('hero_image')['alt'];
   ?>
 </pre>


 <!-- Portfolio Item Row -->
 <div class="row">

   <div class="col-md-8">
     <img class="img-fluid" src="<?= $url ?>" alt="<?= $alt ?>">
   </div>

   <div class="col-md-4">
     <?php  
     $content = get_the_content();
     echo $content;
     ?>
   </div>

 </div>
 <!-- /.row -->

 <!-- Related Projects Row -->
 <h3 class="my-4">Related Projects</h3>

 <div class="row">


   <?php
   $current_id = get_the_ID();
   $related_posts = new WP_Query([
     'post-type' => 'post',
     'orderby' => 'rand',
     'category__in' => wp_get_post_categories($post->ID),
     'post__not_in' => [$current_id]
   ]);
   while ($related_posts->have_posts()) :
     $related_posts->the_post();
     $posts_title = get_the_title();
     ?>
     
     <!-- $post_title je dodat samo zbog lakseg uocavanja -->
     <div class="col-md-3 col-sm-6 mb-4">
       <?= $posts_title ?>
       <a href="<?= get_permalink() ?>">
         <img class="img-fluid" src="http://placehold.it/500x300" alt="">
       </a>
     </div>

     <?php
   endwhile;
   wp_reset_postdata();
   ?>

 </div>
 <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>