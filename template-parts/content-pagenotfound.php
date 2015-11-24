<?php
/**
 * @version beta
 *
 * The content for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package OneDay
 */
?>
	<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

	<?php if ( oneday_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
	<div class="widget widget_categories">
		<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'oneday' ); ?></h2>
		<ul>
		<?php
			wp_list_categories( array(
				'orderby'    => 'count',
				'order'      => 'DESC',
				'show_count' => 1,
				'title_li'   => '',
				'number'     => 10,
			) );
		?>
		</ul>
	</div><!-- .widget -->
	<?php endif; ?>

	<?php
		/* translators: %1$s: smiley */
		$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'oneday' ), convert_smilies( ':)' ) ) . '</p>';
		the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
	?>

	<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>