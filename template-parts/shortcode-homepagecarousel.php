<?php
/**
 * @version beta
 *
 * OneDay Shortcode Homepage Carousel.
 *
 * @package OneDay
 */
?>
	<!-- Carousel -->
	<div class="row">
	    <div id="onedayHomepageCarousel" class="carousel slide carousel-shortcode">
			<ol class="carousel-indicators">
				<li data-target="#onedayHomepageCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#onedayHomepageCarousel" data-slide-to="1"></li>
				<li data-target="#onedayHomepageCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="first-slider slide-bg" src="<?php echo get_template_directory_uri(); ?>/img/default-featured-image.jpeg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
						  <h2 class="caption-text padding-top-10">One Walk. One Ride. All Cancers.</h2>
						  <h2 class="caption-cta"><a class="btn-green padding-top-10" href="#" role="button">Register Now!</a></h2>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="first-slider slide-bg" src="<?php echo get_template_directory_uri(); ?>/img/default-featured-image.jpeg" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
						  <h2 class="caption-text padding-top-10">One Walk. One Ride. All Cancers.</h2>
						  <h2 class="caption-cta"><a class="btn-orange padding-top-10" href="#" role="button">Donate Now!</a></h2>
						</div>
					</div>    
				</div>
				<div class="item">
					<img class="first-slider slide-bg" src="<?php echo get_template_directory_uri(); ?>/img/default-featured-image.jpeg" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
						  <h2 class="caption-text padding-top-10">One Walk. One Ride. All Cancers.</h2>
						  <h2 class="caption-cta"><a class="btn-orange padding-top-10" href="#" role="button">Request Info!</a></h2>
						</div>
					</div>    
				</div>
			</div>     
			<a class="left carousel-control" href="#onedayHomepageCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#onedayHomepageCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>      
	    </div>
	</div><!-- end of div class="row"> -->
    <!-- End Carousel -->