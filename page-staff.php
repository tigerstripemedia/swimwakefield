<?php
/*
    Template Name: Coaching Staff Page
*/ 

get_header();
?>

<section id="page-header">
  <div class="container">
    <h1>Coaching Staff</h1>
  </div>
</section>

<section id="coaching-staff">
  <div class="container">
    <h2>Qualified Coaching Staff</h2>
    <hr class="hr">
    <div class="row">
      
      <?php $loop = new WP_Query( array( 'post_type' => 'coaching_staff', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $coach_image  = get_field('coach_image');
           $coach_name  = get_field('coach_name');
           $coach_qualification  = get_field('coach_qualification');
           $coach_info  = get_field('coach_info');
          ?>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card coaching-profile text-center">
          <div class="profile-img-wrapper">
            <img class="card-img-top profile-img" src="<?php echo $coach_image; ?>" alt="<?php echo $coach_image['alt']; ?>">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $coach_name; ?></h5>
            <h6 class="card-text text-muted"><?php echo $coach_qualification; ?></h6>
            <p class="card-text"><?php echo $coach_info; ?></p>
          </div>
        </div>
      </div>
      
      <?php endwhile; ?>

    </div>
    <!-- 1st row -->

    <h2>Coaching Assistants</h2>
    <hr class="hr">
    <div class="row">
      
      <?php $loop = new WP_Query( array( 'post_type' => 'coaching_assistants', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $assistant_image  = get_field('assistant_image');
           $assistant_name  = get_field('assistant_name');
           $assistant_qualification  = get_field('assistant_qualification');
           $assistant_info  = get_field('assistant_info');
          ?>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card coaching-profile text-center">
          <div class="profile-img-wrapper">
            <img class="card-img-top profile-img" src="<?php echo $assistant_image; ?>" alt="<?php echo $assistant_image['alt']; ?>">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $assistant_name; ?></h5>
            <h6 class="card-text text-muted"><?php echo $assistant_qualification; ?></h6>
            <p class="card-text"><?php echo $assistant_info; ?></p>
          </div>
        </div>
      </div>
      
      <?php endwhile; ?>

    </div>
    <!-- 2nd row -->
  </div>
  <!-- container -->
</section>

<?php get_footer(); ?>