<?php get_header(); ?>
<?php the_post(); ?>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
    
        <?php
     $slider = get_field('slider');
     foreach ($slider as $key => $slide) :
       if ($key === 0) {
          $class = 'active';
       } else {
          $class = '';
       }
         $image = $slide['slide_image']['sizes']['Hero'];
         $title = $slide['slide_title'];
         $description = $slide['slide_description'];
       ?>
  
      <!-- Slide One - Set the background image for this slide in the line below -->
       <div class="carousel-item <?= $class ?>" style="background-image: url('<?= $image ?>')">
         <div class="carousel-caption d-none d-md-block">
           <h3><?= $title ?></h3>
           <p><?= $description ?></p>
         </div>
       </div>

      <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Page Content -->
<div class="container">

  <h1 class="my-4">Welcome to Petar Petrovic Portfolio!</h1>


  <!-- Features Section -->
  <div class="row">
    <div class="col-lg-6">
      <?= the_content(); ?>
    </div>

    <?php 
          $url = get_field('welcome_image')['sizes']['Hero']; 
          
    ?>
      
    <div class="col-lg-6 content">

      <img class="img-fluid rounded mb-4" src="<?= $url ?>" alt="">
     
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Call to Action Section -->
     <?php 

      $text_field = get_field('text_field');
      $call_to_action = get_field('call_to_action');

     ?>
  <div class="row mb-4">
    <div class="col-md-8">
      <p><?=$text_field?></p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-secondary btn-block" href="<?=$call_to_action?>">Call to Action</a>
    </div>
  </div>

  <!-- Portfolio Section -->
  <h2>Testimonials</h2>

  <div class="row">
    <?php 
          $slides = get_field('slider_bottom');   
            foreach ($slides as $slide) :
              $url = $slide['slide_image']['sizes']['thumbnail'];
              $slide_title = $slide['slide_title'];
              $slide_description = $slide['slide_description'];
        ?>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?= $url ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?= $slide_title ?></a>
          </h4>
          <p class="card-text"><?= $slide_description ?></p>
        </div>
      </div>
    </div> 
      <?php 
        endforeach; 
      ?>
  </div>
  <!-- /.row -->
</div>

<?php get_footer(); ?>