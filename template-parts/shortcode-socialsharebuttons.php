<?php
/**
 * @version beta
 *
 * OneDay Shortcode Social Share Buttons [oneday_social_share_buttons]
 *
 * @package OneDay
 */
?>
<style type="text/css">
.social-shares {
    padding: 0;
    margin: 0 auto;
    display: block;
    width: 100%;
    max-width: 900px;
}
.social-shares li {
    display: inline-block;
    width: 100%;
    max-width: 24%;
    margin: 0 auto;
    text-align: center;
    border: inset;
    border-color: #006496;
    background: #006496;
}
.social-shares li a {
	color: #fff;
}
</style>
<?php
	// Get current page URL 
	$urlToShare = get_permalink();

	// Get current page title
	$titleToShare = str_replace( ' ', '%20', get_the_title());
	
	// Get Post Thumbnail for pinterest
	$thumbnailToShare = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$urlToShare;
	$twitterURL = 'https://twitter.com/intent/tweet?text='.$titleToShare.'&amp;url='.$urlToShare.'&amp;via=OneDayBrisbane';
	$googleURL = 'https://plus.google.com/share?url='.$urlToShare;
	$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$urlToShare.'&amp;media='.$thumbnailToShare[0].'&amp;description='.$titleToShare;
?>
<ul id="oneday-social-shares" class="social-shares">
	<li class="facebook-share">
		<a href="<?php echo $facebookURL; ?>"  type="button" data-toggle="tooltip" data-placement="top" title="Share On Facebook" target="_top">
			<i class="fa fa-facebook"></i>
		</a>
	</li>
	<li class="twitter-share">
		<a href="<?php echo $twitterURL; ?>" type="button" data-toggle="tooltip" data-placement="top" title="Share On Twitter" rel="nofollow" target="_top">
			<i class="fa fa-twitter"></i>
		</a>
	</li>
	<li class="pinterest-share">
		<a href="<?php echo $pinterestURL; ?>" type="button" data-toggle="tooltip" data-placement="top" title="Share On Pinterest" target="_top">
			<i class="fa fa-pinterest"></i>
		</a>
	</li>
	<li class="google-share">
		<a href="<?php echo $googleURL; ?>" type="button" data-toggle="tooltip" data-placement="top" title="Share On Google Plus" target="_top">
			<i class="fa fa-google"></i>
		</a>
	</li>
</ul>
