<?php
/**
 * The template for displaying search results pages
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


	<div class="main-content" role="main">
        <h1 class="search-title">
        <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
</h1>
		<?php while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->

</div><!-- #primary -->

<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to Blog</span></a></div>
</nav>

<?php get_footer(); ?>