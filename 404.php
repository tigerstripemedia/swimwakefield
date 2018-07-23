<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Swim_Wakefield
 */

get_header();
?>

	<div id="primary" class="content-area error-page">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
					<h1 class="error-message">Oops, something went wrong...</h1>
					<div class="error-num-wrap">
						<h1 class="error-num">404</h1>
					</div>
					<h4 class="error-text">It seems the page you are looking for doesn't exist. We are sorry about that. Try heading back to our homepage. If you have any questions you can <a href="/contact">contact us here.</a></h4>
					<br>
					<a href="/" class="btn btn-primary btn-block btn-error-page btn-lg"><i class="fas fa-home"></i> Go Home</a>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
