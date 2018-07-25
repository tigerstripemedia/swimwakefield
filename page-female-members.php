<?php
/*
    Template Name: Female Members Page
*/ 

get_header();
?>

<?php if ( post_password_required() ) {
 
  echo get_the_password_form();
 
} else { ?>

    <section id="page-header">
      <div class="container">
        <div class="member-dash-icon">
          <i class="fas fa-tachometer-alt fa-5x"></i>
        </div>
        <h1>Female Members</h1>
      </div>
    </section>

    <section id="member-profiles">
      <div class="container">
        <div class="row">

          <?php $loop = new WP_Query( array( 'post_type' => 'female_member', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            
            <?php
             $member_photo  = get_field('member_photo');
             $member_name  = get_field('member_name');
             $member_info  = get_field('member_info');
             $birth_date  = get_field('birth_date');
             $pb_link  = get_field('pb_link');
             
             $yearEnd = date("Y-12-31");
             $age = date_diff(date_create(str_replace('/', '.', $birth_date)), date_create('now'))->y;
             $yearEndAge = date_diff(date_create(str_replace('/', '.', $birth_date)), date_create($yearEnd))->y;
            ?>
            
            <div class="card member-profile text-center">
              <div class="profile-img-wrapper">
                <img class="card-img-top profile-img" src="<?php echo $member_photo; ?>" alt="<?php echo $member_photo['alt']; ?>">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $member_name; ?></h5>
                <p class="card-text"><?php echo $member_info; ?></p>
                <p class="card-text">Current Age: <?php echo $age; ?></p>
                <p class="card-text">Age at the end of <?php echo date('Y'); ?>: <?php echo $yearEndAge; ?></p>
              </div>
              <div class="card-footer text-muted text-center">
                <a href="<?php echo $pb_link; ?>" class="card-link">See Member's PBs <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
            
            </div>
            
            <?php endwhile; ?>

        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>

<?php } ?>

<?php get_footer(); ?>