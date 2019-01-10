<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Swim_Wakefield
 */

?>

<!-- Accreditations -->
<section id="accreditations">
  <div class="container">
    <div class="row">
      <div class="col-md-4 acceditation-wrapper">
        <a target="_blank" href="https://www.swimming.org/swimengland/swimmark-accreditation-for-clubs/">
          <div class="swim-mark">
            
          </div>
        </a>
      </div>
      <div class="col-md-4 acceditation-wrapper">
        <a target="_blank" href="https://www.swimming.org/swimengland/">
          <div class="swim-england">
            
          </div>
        </a>
      </div>
      <div class="col-md-4 acceditation-wrapper">
        <a target="_blank" href="https://www.sportenglandclubmatters.com/club-mark/">
          <div class="club-mark">
            
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer id="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4 class="footer-title"><?php $nav_menu = wp_get_nav_menu_object(5); echo $nav_menu->name; ?></h4>
        <hr class="hr">
        <?php
          wp_nav_menu( array(
              'theme_location'    => 'footer-one',
              'menu'              => 'ul',
              'menu_class'        => 'footer-menu'
      		) );
        ?>
      </div>
      <div class="col-md-4">
        <h4 class="footer-title"><?php $nav_menu = wp_get_nav_menu_object(6); echo $nav_menu->name; ?></h4>
        <hr class="hr">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer-two',
                'menu'              => 'ul',
                'menu_class'        => 'footer-menu'
        		) );
          ?>
      </div>
      <div class="col-md-4">
        <h4 class="footer-title"><?php $nav_menu = wp_get_nav_menu_object(7); echo $nav_menu->name; ?></h4>
        <hr class="hr">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer-three',
                'menu'              => 'ul',
                'menu_class'        => 'footer-menu'
        		) );
          ?>
      </div>
    </div>
    <div class="copyright">
      <small>&copy; <?php echo date('Y'); ?> City of Wakefield Swim Club | <a target="_blank" href="https://www.tigerstripemedia.com">Made with &#9825; by Tiger Stripe Media</a></small>
    </div>
  </div>
</footer>
    
<?php wp_footer(); ?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
