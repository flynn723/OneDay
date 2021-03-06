<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OneDay
 */

get_header(); ?>

	<div id="index-content-wrapper" class="content-wrapper">

	<div class="index-container inside-page-container inside-page-has-sidebar container">

		<?php if ( have_posts() ) : ?>

		<div class="row">

			<div class="col-xs-12 col-sm-4">

				<?php
					/* Start the Loop */ 
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; ?>

			</div>

			<div class="col-xs-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- end of <div class="row"> -->

		<div class="row">
			<div class="col-xs-12">
				<?php the_posts_navigation(); ?>
			</div>
		</div>

		<?php else : ?>

		<div class="row">

			<div class="col-xs-12 text-center">

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

			</div>

		</div>

		<?php endif; ?>

	</div><!-- end of <div class="index-container inside-page-container inside-page-has-sidebar container"> -->
	</div><!-- end of <div id="index-content-wrapper" class="content-wrapper"> -->

<?php get_footer(); ?>
