<?php
/**
 * @version beta
 *
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OneDay
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div id="top-carousel-inside-page" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<!--
		<ol class="carousel-indicators">
		<li data-target="#top-carousel-inside-page" data-slide-to="0" class="active"></li>
		<li data-target="#top-carousel-inside-page" data-slide-to="1"></li>
		</ol>
		-->
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<img src="<?php if ($url): echo $url; else: echo 'http://gghalf.us/wp-content/uploads/2015/11/GGSlide2.png'; endif; ?>" alt="<?php the_title(); ?>">
				<div class="carousel-caption">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<!--
		<a class="left carousel-control" href="#top-carousel-inside-page" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#top-carousel-inside-page" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		-->
		</div><!-- end of <div id="top-carousel-inside-page" class="carousel slide" data-ride="carousel"> -->
	</div><!-- end of <div class="row"> -->
	<div class="inside-page-container container">
		<div class="storybox-page-content row">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oneday' ),
				'after'  => '</div>',
			) );
		?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'oneday' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
		</div>
	</div>
</article><!-- end of <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->