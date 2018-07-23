<?php
/**
 * Template Name: Documents Page
 */

get_header();
?>

    <?php if ( post_password_required() ) {
 
      echo get_the_password_form();
     
    } else { ?>
    
    	<section id="page-header">
    	  <div class="container">
    	    <h1>Committee Documents</h1>
    	  </div>
    	</section>
    
    	<div id="primary" class="container page-standard">
    		<main id="main" class="site-main">
    
    		<?php
    		while ( have_posts() ) :
    			the_post();
    
    			get_template_part( 'template-parts/content', 'docs' );
    
    			// If comments are open or we have at least one comment, load up the comment template.
    			if ( comments_open() || get_comments_number() ) :
    				comments_template();
    			endif;
    
    		endwhile; // End of the loop.
    		?>
    
    		</main><!-- #main -->
    	</div><!-- #primary -->
    	
    <?php } ?>

<?php
get_footer();