<?php
/*
    Template Name: Member Contact Page
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
        <h1>Contact the Club</h1>
      </div>
    </section>

    <section id="contact-club">
      <div class="container">
        <h2>Have you got a question you wish to contact the club about?</h2>
        <p>Select the option that best suits your query below and fill in the form.</p>
        <hr class="hr">
        <br>
        <h3>My question is related to...</h3>
        <br>
        <div class="col-md-8 offset-md-2">
          
          <?php $loop = new WP_Query( array( 'post_type' => 'member_contact', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
          
          <div class="accordion" id="accordionContact">
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
            <?php
             $mem_contact_title  = get_field('mem_contact_title');
             $mem_contact_desc  = get_field('mem_contact_desc');
             $mem_contact_shortcode  = get_field('mem_contact_shortcode');
             $mem_contact_id  = get_field('mem_contact_id');
             $mem_contact_heading  = get_field('mem_contact_heading');
            ?>
            
            <div class="card question-card">

              <a class="contact-club-link" data-toggle="collapse" data-target="#<?php echo $mem_contact_id; ?>" aria-expanded="false" aria-controls="<?php echo $mem_contact_id; ?>">
                <div class="card-header" id="<?php echo $mem_contact_heading; ?>">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $mem_contact_id; ?>" aria-expanded="false" aria-controls="<?php echo $mem_contact_id; ?>">
                      <?php echo $mem_contact_title; ?>
                    </button>
                  </h5>
                </div>
              </a>

              <div id="<?php echo $mem_contact_id; ?>" class="collapse" aria-labelledby="<?php echo $mem_contact_heading; ?>" data-parent="#accordionContact">
                <div class="card-body bg-light">
                  <p class="text-muted"><?php echo $mem_contact_desc; ?></p>
                  <?php echo $mem_contact_shortcode; ?>
                </div>
              </div>
            </div>
            
            <?php endwhile; ?>
            
          </div>
        </div>
      </div>
    </section>

<?php } ?>

<?php get_footer(); ?>