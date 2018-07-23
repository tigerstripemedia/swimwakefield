<?php
/*
    Template Name: Members Page
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
        <h1>Members</h1>
      </div>
    </section>

    <section id="member-select">
      <div class="container text-center">
        <h2>Which members would you like to view?</h2>
        <hr class="hr">
        <div class="row">
          <div class="col-md-6">
            <a class="member-choice-link" href="/male-members">
              <div class="member-choice bg-primary">
                <i class="fas fa-male fa-3x"></i>
                <h3>Male Members</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a class="member-choice-link" href="/female-members">
              <div class="member-choice bg-danger">
                <i class="fas fa-female fa-3x"></i>
                <h3>Female Members</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

<?php } ?>

<?php get_footer(); ?>