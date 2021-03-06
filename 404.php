<?php
/**
 * Template Name: Page Not Found
 *
 * This is a custom template for the home page.
 * @link https://codex.wordpress.org/Template_Hierarchy
  * @package Golden Gate Marathon
 */

get_header(); ?>

	<div id="pagenotfound-content-wrapper" class="content-wrapper">

		<div class="error-404-container inside-page-container inside-page-has-sidebar container">
			<div class="page-header page-not-found-header">
				<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'oneday' ); ?></h1>
			</div><!-- end of <div class="page-header page-not-found-header"> -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'oneday' ); ?></p>

				<?php get_search_form(); ?>

				<?php 
				/**
				 *
				 * @package OneDay
				 */
				/* get_template_part('template-parts/content', 'pagenotfound'); */ ?>

				<a class="button btn-green margin-center text-center max-width-350" title="Go To <?php bloginfo('name'); ?> Homepage" href="<?php echo get_site_url(); ?>"><i class="fa fa-home"></i> <?php esc_html_e( 'Go To', 'oneday'); ?> <?php bloginfo('name'); ?> <?php esc_html_e( 'Homepage', 'oneday'); ?></a>

			</div><!-- .page-content -->
		</div><!-- end of <div class="error-404-container inside-page-container inside-page-has-sidebar container"> -->

	</div><!-- end of <div id="pagenotfound-content-wrapper" class="content-wrapper"> -->

<?php get_footer(); ?>
