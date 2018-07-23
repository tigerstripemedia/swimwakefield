<?php
/*
    Template Name: Committee Page
*/ 

get_header();
?>

<section id="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section id="committee-profiles">
  <div class="container">
    <div class="row">
      
      <?php $loop = new WP_Query( array( 'post_type' => 'committee_member', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $committee_image  = get_field('committee_image');
           $committee_name  = get_field('committee_name');
           $committee_role  = get_field('committee_role');
           $committee_info  = get_field('committee_info');
          ?>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card committee-profile text-center">
          <div class="profile-img-wrapper">
            <img class="card-img-top profile-img" src="<?php echo $committee_image; ?>" alt="<?php echo $committee_image['alt']; ?>">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $committee_name; ?></h5>
            <h6 class="card-text text-muted"><?php echo $committee_role; ?></h6>
            <p class="card-text"><?php echo $committee_info; ?></p>
          </div>
        </div>
      </div>
      
      <?php endwhile; ?>

    </div>
  </div>
  <!-- container -->
</section>

<?php get_footer(); ?>