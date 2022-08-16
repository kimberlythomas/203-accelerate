<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
        <p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
</div><!-- #primary -->

	<div class="main-content" role="main">
		
	</div><!-- .main-content -->


<?php while ( have_posts() ) : the_post(); ?>

		
		<?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>