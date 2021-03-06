<?php
/**
 * Template Name: Homepage
 *
 * This is a custom template for the home page.
 * @link https://codex.wordpress.org/Template_Hierarchy
  * @package Golden Gate Marathon
 */

get_header(); ?>
	<div id="homepage-content-wrapper" class="content-wrapper">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'homepage' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

	</div><!-- end of <div id="homepage-content-wrapper" class="content-wrapper"> -->

<?php get_footer(); ?>
