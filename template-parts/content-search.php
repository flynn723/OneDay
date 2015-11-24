<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OneDay
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( 'page' === get_post_type() ) : ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>		
			<ul class="post-meta">
				<li><a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( '0 Comments', '1 Comment', '% Comments' );  ?></a>
				</li>
				<li class="post-category"><i class="fa fa-tag"></i> <?php the_category( ', ' ); ?></li>
				<li class="post-time"><i class="fa fa-clock-o"></i> <?php the_time( 'F j Y'); ?></li>
		 	</ul>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<div class="search-entry-footer entry-footer">
			<?php oneday_entry_footer(); ?>
		</div><!-- end of<div class="search-entry-footer entry-footer"> -->

		<?php endif; ?>

</article>

