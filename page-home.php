<?php
/*
    Template Name: Home Page
*/ 

// Custom Fields
$mission_statement_title = get_field('mission_statement_title');
$mission_statement_body = get_field('mission_statement_body');
$facebook_feed = get_field('facebook_feed');

get_header();
?>

	<!-- Banner -->
    <section id="banner">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
        <?php $loop = new WP_Query( array( 'post_type' => 'home_slide', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
        
        <div class="carousel-inner">
          
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $slide_image  = get_field('slide_image');
           $slide_title  = get_field('slide_title');
           $slide_sub_title  = get_field('slide_sub_title');
           $slide_link_url  = get_field('slide_link_url');
           $slide_link_text  = get_field('slide_link_text');
           $slide_class = get_field('slide_class');
          ?>
          <div class="carousel-item <?php echo $slide_class; ?>">
            <?php if( !empty($slide_link_url) ) : ?>
              <a href="https://<?php echo $slide_link_url; ?>" target="_blank">
            <?php endif; ?>
                <img class="d-block w-100 banner-image" width="100%" height="500" src="<?php echo $slide_image; ?>" alt="<?php echo $slide_image['alt']; ?>">
            <?php if( !empty($slide_link_url) ) : ?>
              </a>
            <?php endif; ?>
            <div class="carousel-caption d-none d-md-block">
              <h1><?php echo $slide_title; ?></h1>
              <h4><?php echo $slide_sub_title; ?></h4>
            </div>
          </div>
          <?php endwhile; ?>

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
    </section>

    <section id="welcome">
      <div class="container">
        <h3><?php echo $mission_statement_title; ?></h3>
        <br>
        <hr class="welcome-hr hr">
        <br>
        <?php echo $mission_statement_body; ?>
      </div>
    </section>
    
    <!--<section id="facebook-feed">-->
    <!--  <div class="container">-->
    <!--<?php echo $facebook_feed; ?> -->
    <!--  </div>-->
    <!--</section>-->

<?php get_footer(); ?>
