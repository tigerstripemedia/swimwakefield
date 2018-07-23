<?php
/*
    Template Name: Entries Page
*/ 

// Custom Fields
$calculator_link  = get_field('calculator_link');
$committee_image  = get_field('committee_image');
$committee_name  = get_field('committee_name');
$committee_role  = get_field('committee_role');
$committee_info  = get_field('committee_info');
$committee_image_2  = get_field('committee_image_2');
$committee_name_2  = get_field('committee_name_2');
$committee_role_2  = get_field('committee_role_2');
$committee_info_2  = get_field('committee_info_2');

get_header();
?>

<section id="page-header">
  <div class="container">
    <h1>Entries</h1>
  </div>
</section>

<section id="events">
  <div class="container">
    <h2>Upcoming Events</h2>
    <hr class="hr">
    <div class="row">
      
      <?php $loop = new WP_Query( array( 'post_type' => 'entries_event', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
      
      <?php
       $event_title  = get_field('event_title');
       $event_date  = get_field('event_date');
       $event_venue  = get_field('event_venue');
       $event_info  = get_field('event_info');
       $event_deadline  = get_field('event_deadline');
       $event_link  = get_field('event_link');
       $swim_england_link  = get_field('swim_england_link');
      ?>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header text-center">
            <?php echo $event_title; ?>
          </div>
          <div class="card-body">
            <p class="card-text"><strong>Date:</strong> <?php echo $event_date; ?></p>
            <p class="card-text"><strong>Venue:</strong> <?php echo $event_venue; ?></p>
            <p class="card-text"><strong>Info:</strong> <?php echo $event_info; ?></p>
            <p class="card-text"><strong>Deadline:</strong> <?php echo $event_deadline; ?></p>
          </div>
          <div class="card-footer text-muted text-center">
            <a target="_blank" href="<?php echo $event_link; ?>" class="card-link">See Event Details <i class="fas fa-arrow-right"></i></a><br>
            <a target="_blank" href="<?php echo $swim_england_link; ?>" class="card-link">View on Swim England <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      
      <?php endwhile; ?>

    </div>
    
    <br>
    
    <?php echo $calculator_link; ?>
    
  </div>
</section>

<section id="entries">
  <div class="container">
    <h2>Enter an Event</h2>
    <hr class="hr">
    <div class="row">
      <div class="col-xl-8 col-lg-7 col-md-12">
        <form class="web-form">
            
          <div class="form-group">
            <label for="event-title">Event Title</label>
            <input type="text" class="form-control" id="event-title" placeholder="Event">
          </div>
          
          <div class="form-group">
            <label for="event-date">Event Date</label>
            <input type="text" class="form-control" id="event-date" placeholder="Date">
          </div>
          
          <div class="form-group">
            <label for="swimmer-name">Swimmer's Name</label>
            <input type="text" class="form-control" id="swimmer-name" placeholder="Name">
          </div>
          
          <div class="form-group">
            <label for="swimmer-dob">Swimmer's Date of Birth</label>
            <input type="date" class="form-control" id="swimmer-dob">
          </div>
          
          <div class="form-group">
            <label for="email">Contact Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          
          <div class="form-group">
            <label for="event-stroke">Individual Event(s), Stroke(s) & Distance(s)</label>
            <br>
            <small class="text-muted">
                Please list the events you wish to enter seperated by commas. 
                Enter the event's number followed by which stroke and distance 
                you would like to swim (as shown below).
            </small>
            <textarea class="form-control" id="event-stroke" rows="3" placeholder="Event Number - Stroke/Distance, ..."></textarea>          
          </div>
          
          <button type="submit" class="btn btn-primary btn-block entries-form-btn">Submit</button>
          <small class="text-muted">The information you provide will be used solely for correspondence and will be stored securely on a password protected server and device. We will not share your information with any other party. This information will be securely disposed once we no longer need to contact you or upon your request.</small>
        </form>
      </div>
      <div class="col-xl-4 col-lg-5 col-md-12 web-profile">
        <div class="card">
          <img class="card-img-top" src="<?php echo $committee_image; ?>" alt="<?php echo $committee_image['alt']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $committee_name; ?></h5>
            <h6 class="card-text text-muted"><?php echo $committee_role; ?></h6>
            <p class="card-text"><?php echo $committee_info; ?></p>
          </div>
        </div>
        <br>
        <div class="card">
          <img class="card-img-top" src="<?php echo $committee_image_2; ?>" alt="<?php echo $committee_image_2['alt']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $committee_name_2; ?></h5>
            <h6 class="card-text text-muted"><?php echo $committee_role_2; ?></h6>
            <p class="card-text"><?php echo $committee_info_2; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>