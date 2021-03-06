<?php
/**
 * @version beta
 *
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package OneDay
 */

get_header(); ?>
<style type="text/css">

</style>
	<div id="search-content-wrapper" class="content-wrapper">

			<div class="search-container inside-page-container inside-page-has-sidebar container">

				<div class="row">
					<div class="search-page-header col-xs-12 text-center">
						<h2 class="search-page-title"><i class="fa fa-search"></i> <?php printf( esc_html__( 'Search Results for: %s', 'oneday' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					</div><!-- end of <div class="search-page-header text-center"> -->
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-8">

					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 * @package OneDay
							 */
							get_template_part( 'template-parts/content', 'search' );
							?>

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

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

			</div><!-- end of <div class="search-container container"> -->

	</div><!-- end of <div id="search-content-wrapper" class="content-wrapper"> -->

<?php get_footer(); ?>
