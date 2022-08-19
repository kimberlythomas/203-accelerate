<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
	<!-- <div class="main-content" role="main"> -->
        <div class="notfound-image">
        <img class="notfound-photo" alt="404 Error" src="http://localhost:8888/accelerate/wp-content/themes/accelerate-theme-child/img/404.jpg">

        <p class="notfound-credit"><a href="https://www.freepik.com/vectors/computer-error">Computer error vector created by storyset - www.freepik.com</a></p>
</div>
<div class="notfound-text">
        <h1 class="notfound-header">Lost in Cyberspace</h1>
    <p>Sorry, this page no longer exists, never existed, or has been moved.</p>
    <p>Feel free to take a look around our <a href="blog">blog</a> or some of our featured <a href="case-studies">work</a>.</p>
</div>
		<?php while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
        
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->

</div><!-- #primary -->

<?php get_footer(); ?>