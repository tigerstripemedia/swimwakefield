<?php
/*
    Template Name: Club Shop Page
*/ 

// Custom Fields
$committee_member_image  = get_field('committee_member_image');
$committee_member_name  = get_field('committee_member_name');
$committee_member_info  = get_field('committee_member_info');

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
              
              <div class="col-xl-3 col-md-6 shop-item">
                  <img class="shop-item-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/polo.png"></img>
                  <br>
                  <h4>Polo Shirt</h4>
                  <hr class="hr">
                  <h6 class="text-muted">£6.00</h6>
                  <p>Size’s Child/Small/Medium/Large. Any name can be added for an additional £2.</p>
              </div>
              
              <div class="col-xl-3 col-md-6 shop-item">
                  <img class="shop-item-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hoodie.png"></img>
                  <br>
                  <h4>Hoodie</h4>
                  <hr class="hr">
                  <h6 class="text-muted">Child Size £20 | Adult Size £25 </h6>
                  <p>Size's Small/Medium/Large. Name included in the price.</p>
              </div>
              
              <div class="col-xl-3 col-md-6 shop-item">
                  <img class="shop-item-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hats.png"></img>
                  <br>
                  <h4>Swim Caps</h4>
                  <hr class="hr">
                  <h6 class="text-muted">£4.00</h6>
                  <p>Available in Blue or White. Can add a name please ask Neil for details.</p>
              </div>
              
              <div class="col-xl-3 col-md-6 shop-item">
                  <img class="shop-item-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/polo.png"></img>
                  <br>
                  <h4>T-Bag Poolside T-shirt</h4>
                  <hr class="hr">
                  <h6 class="text-muted">£6.00</h6>
                  <p>A quick drying T-Shirt for use directly after racing.</p>
              </div>
              
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
            <img class="card-img-top" src="<?php echo $committee_member_image; ?>" alt="<?php echo $committee_member_image['alt']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $committee_member_name; ?></h5>
              <p class="card-text"><?php echo $committee_member_info; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php } ?>


<?php get_footer(); ?>