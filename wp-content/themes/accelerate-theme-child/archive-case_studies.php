<?php
/**
 * The template for displaying the case study archive.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">


        <?php while ( have_posts() ) : the_post();	
	$services = get_field('services');
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');
    $image_3 = get_field('image_3');
    $size = "full";
    $the_permalink = get_permalink();
    ?>

<article class="case-study"><aside class="case-study-sidebar">
<h2><?php the_title(); ?></h2>
<h3><?php echo $services; ?></h3>
				<?php the_excerpt(); ?>

                <p class="read-more-link"><a href="<?php echo $the_permalink; ?>">View Project ›</a></p>

</aside>

<div class="case-study-images">

<?php if($image_1) { 
	echo wp_get_attachment_image( $image_1, $size );
    } ?>
    
</div></article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>