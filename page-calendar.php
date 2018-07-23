<?php
/*
    Template Name: Calendar Page 
*/

get_header();
?>
    
    <section id="page-header">
      <div class="container">
        <h1>Calendar</h1>
      </div>
    </section>
    
	<div id="primary" class="content-area">
	    <div class="calendar-page container">
    		<main id="main" class="site-main">
    
    		<?php
    		while ( have_posts() ) :
    			the_post();
    
    			get_template_part( 'template-parts/content', 'page' );
    
    			// If comments are open or we have at least one comment, load up the comment template.
    			if ( comments_open() || get_comments_number() ) :
    				comments_template();
    			endif;
    
    		endwhile; // End of the loop.
    		?>
    
    		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();