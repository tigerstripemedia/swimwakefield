<?php
/*
    Template Name: Squads Page
*/ 

// Custom Fields


get_header();
?>

<section id="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section id="session-times">
  <div class="container">
    <h2>Session Times</h2>
    <hr class="hr">
    <div class="row">
      
      <?php $loop = new WP_Query( array( 'post_type' => 'training_session', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      
      <div class="col-lg-3 col-md-12 squad-icon">
        <div class="a-squad">
          <img class="squad-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/a-squad.png" alt="">
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Times</th>
            <th scope="col">Pool</th>
          </tr>
        </thead>
        <tbody>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $session_a_squad  = get_field('session_a_squad');
           $session_jb_squad  = get_field('session_jb_squad');
           $session_ib_squad  = get_field('session_ib_squad');
           $session_c_squad  = get_field('session_c_squad');
           $session_day  = get_field('session_day');
           $session_times  = get_field('session_times');
           $session_pool  = get_field('session_pool');
          ?>
          
          <?php if ($session_a_squad) : ?>
          
          <tr>
            <td><?php echo $session_day; ?></td>
            <td><?php echo $session_times; ?></td>
            <td><?php echo $session_pool; ?></td>
          </tr>
          
          <?php endif; ?>
          
          <?php endwhile; ?>
        </tbody>
      </table>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-12 squad-icon">
        <div class="jb-squad">
          <img class="squad-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jb-squad.png" alt="">
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Times</th>
            <th scope="col">Pool</th>
          </tr>
        </thead>
        <tbody>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $session_a_squad  = get_field('session_a_squad');
           $session_jb_squad  = get_field('session_jb_squad');
           $session_ib_squad  = get_field('session_ib_squad');
           $session_c_squad  = get_field('session_c_squad');
           $session_day  = get_field('session_day');
           $session_times  = get_field('session_times');
           $session_pool  = get_field('session_pool');
          ?>
          
          <?php if ($session_jb_squad) : ?>
          
          <tr>
            <td><?php echo $session_day; ?></td>
            <td><?php echo $session_times; ?></td>
            <td><?php echo $session_pool; ?></td>
          </tr>
          
          <?php endif; ?>
          
          <?php endwhile; ?>
        </tbody>
      </table>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-3 col-md-12 squad-icon">
        <div class="ib-squad">
          <img class="squad-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ib-squad.png" alt="">
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Times</th>
            <th scope="col">Pool</th>
          </tr>
        </thead>
        <tbody>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $session_a_squad  = get_field('session_a_squad');
           $session_jb_squad  = get_field('session_jb_squad');
           $session_ib_squad  = get_field('session_ib_squad');
           $session_c_squad  = get_field('session_c_squad');
           $session_day  = get_field('session_day');
           $session_times  = get_field('session_times');
           $session_pool  = get_field('session_pool');
          ?>
          
          <?php if ($session_ib_squad) : ?>
          
          <tr>
            <td><?php echo $session_day; ?></td>
            <td><?php echo $session_times; ?></td>
            <td><?php echo $session_pool; ?></td>
          </tr>
          
          <?php endif; ?>
          
          <?php endwhile; ?>
        </tbody>
      </table>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-12 squad-icon">
        <div class="c-squad">
          <img class="squad-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/c-squad.png" alt="">
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Times</th>
            <th scope="col">Pool</th>
          </tr>
        </thead>
        <tbody>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $session_a_squad  = get_field('session_a_squad');
           $session_jb_squad  = get_field('session_jb_squad');
           $session_ib_squad  = get_field('session_ib_squad');
           $session_c_squad  = get_field('session_c_squad');
           $session_day  = get_field('session_day');
           $session_times  = get_field('session_times');
           $session_pool  = get_field('session_pool');
          ?>
          
          <?php if ($session_c_squad) : ?>
          
          <tr>
            <td><?php echo $session_day; ?></td>
            <td><?php echo $session_times; ?></td>
            <td><?php echo $session_pool; ?></td>
          </tr>
          
          <?php endif; ?>
          
          <?php endwhile; ?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</section>

<section id="training-pools">
  <div class="container">
    <h2>Training Pools</h2>
    <hr class="hr">
    <div class="row">
      <div class="col-lg-6 col-md-12 pool">
        <h4>Sun Lane</h4>
        <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2362.974462953511!2d-1.494714884096594!3d53.68308055713604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487966555e3675ef%3A0xaacd39695c86b465!2sSun+Lane+Leisure!5e0!3m2!1sen!2suk!4v1527153891576" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 pool">
        <h4>Normanton</h4>
        <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2362.1102034322266!2d-1.4248044840961538!3d53.69848225597729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48796869322b0e8f%3A0xe2fb25a9d7529ba2!2sNormanton+Pool!5e0!3m2!1sen!2suk!4v1527153940517" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>