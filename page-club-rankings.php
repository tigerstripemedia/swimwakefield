<?php
/*
    Template Name: Club Rankings Page
*/ 

// Custom Fields
$club_rankings_desc  = get_field('club_rankings_desc');


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
  
  <section id="club-rankings">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 offset-md-3">
            
            <p><?php echo $club_rankings_desc; ?></p>
            
            <form id="club-rankings-form">
              <div class="form-group">
                <label for="selectTimescale">Timescale</label>
                <select class="form-control" id="selectTimescale">
                  <option>Select...</option>
                  <option value="12months/last12.php?">Last 12 Months</option>
                  <option value="eventrankings/eventrankings.php?">All Time</option>
                </select>
              </div>
      
              <div class="form-group">
                <label for="selectGender">Gender</label>
                <select class="form-control" id="selectGender">
                  <option>Select...</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
      
              <div class="form-group">
                <label for="selectCourse">Short / Long Course</label>
                <select class="form-control" id="selectCourse">
                  <option>Select...</option>
                  <option value="S">Short Course</option>
                  <option value="L">Long Course</option>
                </select>
              </div>
      
              <div class="form-group">
                <label for="selectEvent">Event</label>
                <select class="form-control" id="selectEvent">
                  <option>Select...</option>
                  <option value="1">50m Free</option>
                  <option value="2">100m Free</option>
                  <option value="3">200m Free</option>
                  <option value="4">400m Free</option>
                  <option value="5">800m Free</option>
                  <option value="6">1500m Free</option>
                  <option value="7">50m Breast</option>
                  <option value="8">100m Breast</option>
                  <option value="9">200m Breast</option>
                  <option value="10">50m Fly</option>
                  <option value="11">100m Fly</option>
                  <option value="12">200m Fly</option>
                  <option value="13">50m Back</option>
                  <option value="14">100m Back</option>
                  <option value="15">200m Back</option>
                  <option value="16">200m IM</option>
                  <option value="17">400m IM</option>
                  <option value="18">100m IM</option>
                </select>
              </div>
      
            </form>
      
            <a href="" id="btnResults" class="btn btn-primary btn-block">Get Results</a>
          </div>
        </div>
      </div>
  </section>

<?php } ?>


<?php get_footer(); ?>