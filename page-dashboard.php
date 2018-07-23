<?php
/*
    Template Name: Member Dashboard Page
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
      <h1><?php the_title(); ?></h1>
    </div>
  </section>
  
  <section id="members-dashboard">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3>Welcome to the Members Dashboard!</h3>
          <hr class="hr">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
          <a class="dash-menu-link" href="#">
            <div class="card text-white facebook-group bg-facebook mb-3">
              <div class="card-header"><i class="fab fa-facebook-square fa-2x"></i></div>
              <div class="card-body">
                <h5 class="card-title">Member Facebook Group</h5>
                <p class="card-text">Click here to access our Member Facebook Group. Please request to join if you are not already a member. Our Facebook group is a great way to recieve member-related news.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <section id="dashboard-menu">
    <div class="container">
      <div class="row">
  
        <div class="col-lg-3 col-md-6">
          <a class="dash-menu-link" href="/members">
            <div class="dash-menu-item bg-primary">
              <i class="fas fa-users fa-3x"></i>
              <h3>Members</h3>
            </div>
          </a>
        </div>
        <!-- col -->
  
        <div class="col-lg-3 col-md-6">
          <a class="dash-menu-link" href="/club-shop">
            <div class="dash-menu-item bg-success">
            <i class="fas fa-shopping-cart fa-3x"></i>
            <h3>Club Shop</h3>
            </div>
          </a>
        </div>
        <!-- col -->
  
        <div class="col-lg-3 col-md-6">
          <a class="dash-menu-link" href="/member-contact">
            <div class="dash-menu-item bg-danger">
              <i class="fas fa-comment fa-3x"></i>
              <h3>Contact</h3>
            </div>
          </a>
        </div>
        <!-- col -->
  
        <div class="col-lg-3 col-md-6">
          <a class="dash-menu-link" href="member-info">
            <div class="dash-menu-item bg-warning">
              <i class="fas fa-info-circle fa-3x"></i>
              <h3>Member Info</h3>
            </div>
          </a>
        </div>
        <!-- col -->
  
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

<?php } ?>


<?php get_footer(); ?>