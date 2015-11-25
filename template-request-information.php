<?php
/**
 * Template Name: Request Information
 *
 * This is a custom template for the home page.
 * @link https://codex.wordpress.org/Template_Hierarchy
  * @package OneDay
 */
get_header(); ?>
<style type="text/css">
/*
* Stylesheet in cf-landing-page plugin /inc/css
*/
/*
* General
* */
.full-width {
	width: 100%;
}
/* Centering Modal */
.modal {
  text-align: center;
}
/* Gravity FOrms */
form .gform_body label {
}
form .gform_body label {
    color: #006496;
    text-transform: uppercase;
}
form .gform_body input {
    width: 100%!important;
    display: inline;
    margin: 0;
    border: 4px solid #006496;
    height: 3em;
}
form .gform_body input[type="submit"] {
    background-color: #006496;
    color: #fff;
    border: 0px solid #000;
    padding: 15px;
    text-transform: uppercase;
    transition: 1500ms;
        font-size: 2em;
}
form .gform_body input[type="submit"]:hover {
    background-color: #fff;
    color: #006496;
    border: 4px solid #006496;
}
/*Placeholder*/
form .gform_body input[placeholder] {
   color: #006496;
   padding-left: 10px;
}
/* Input Styling*/
form .gform_body input {
    color: #006496;
    padding-left: 10px;
}
input#gform_submit_button_1 {
    border: 4px solid #006496;
    color: #006496;
    margin: 10px auto;
}
input#gform_submit_button_1:hover {
    background: #006496;
    color: #fff;
}
.carousel-caption {
    background: #006496;
}
.request-info-desc-col p,  .request-info-desc-col h3 {
    font-size: 1.5em;
}
ul.gform_fields {
    list-style: none;
    padding: 0;
}
.gfield {
    margin-bottom: 15px;
}
</style>
	<div id="tabularpage-content-wrapper" class="content-wrapper">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'requestinfopage' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

	</div><!-- end of <div id="tabularpage-content-wrapper" class="content-wrapper"> -->

<?php get_footer(); ?>
