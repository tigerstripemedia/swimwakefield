<?php
/*
    Template Name: Club Shop Page
*/ 

// Custom Fields
$committee_image  = get_field('committee_image');
$committee_name  = get_field('committee_name');
$committee_role  = get_field('committee_role');
$committee_info  = get_field('committee_info');

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
  
  <section id="club-shop">
      <div class="container">
          <div class="row">
              
              <?php $loop = new WP_Query( array( 'post_type' => 'club_shop', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
              
              <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
              
              <?php
              $item_image  = get_field('item_image');
              $item_title  = get_field('item_title');
              $item_price  = get_field('item_price');
              $item_description  = get_field('item_description');
              ?>
              
              <div class="col-xl-3 col-md-6 shop-item">
                  <img class="shop-item-img" src="<?php echo $item_image; ?>" alt="<?php echo $item_image['alt']; ?>"></img>
                  <br>
                  <h4><?php echo $item_title; ?></h4>
                  <hr class="hr">
                  <h6 class="text-muted"><?php echo $item_price; ?></h6>
                  <p><?php echo $item_description; ?></p>
              </div>
              
              <?php endwhile; ?>
              
          </div>
      </div>
  </section>
  
  <section id="order-items">
    <div class="container">
      <h2>Order Club Shop Items</h2>
      <hr class="hr">
      <div class="row">
        <div class="col-xl-8 col-lg-7 col-md-12">
          <form class="web-form">
              
            <div class="form-group">
              <label for="swimmer-name">Swimmer's Name</label>
              <input type="text" class="form-control" id="swimmer-name" placeholder="Swimmer">
            </div>
            
            <div class="form-group">
              <label for="family-name">Family Name</label>
              <input type="text" class="form-control" id="family-name" placeholder="Family">
            </div>
            
            <div class="form-group">
              <label for="contact-num">Contact Number</label>
              <input type="tel" class="form-control" id="contact-num" placeholder="Tel">
            </div>
            
            <div class="form-group">
              <label for="order-details">Your Order</label>
              <br>
              <small class="text-muted">
                 Please include detail about what you would like to order, how many you would like and what size.
              </small>
              <textarea class="form-control" id="order-details" rows="3" placeholder="Item - Quantity - Size..."></textarea>          
            </div>
            
            <div class="form-group">
              <label for="print-name">Would you like your name printed on?</label>
              <input type="text" class="form-control" id="print-name" placeholder="Name">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block entries-form-btn">Submit</button>
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
        </div>
      </div>
    </div>
  </section>

<?php } ?>


<?php get_footer(); ?>