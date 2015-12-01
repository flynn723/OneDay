<?php
/**
 * Template Name: Story Box
 *
 * This is a custom template for the home page.
 * @link https://codex.wordpress.org/Template_Hierarchy
  * @package Golden Gate Marathon
 */

get_header(); ?>
<style type="text/css">
.carousel-caption {
    background: #FEC52E;
}
.story-box h3 {
    color: #fff;
    font-size: 36px;
    font-weight: 700;
    margin: 5px 0 15px;
}
.story-box p.number {
    font-weight: 700;
    font-size: 1.8em;
}
.story-box a.btn {
    margin: 10px auto;
    display: block;
    padding: 10px;
    width: 50%;
    border:1px solid #fff;
    color: #fff;
}
.story-box a.btn:hover {
    background-color: #fff;
    color: #000;
}
.intro-text h3 {
    color: #0065a2;
    font-size: 3.5em;
    margin-bottom: 20px;
}
.intro-text p {
    font-size: 16px;
    line-height: 1.7;
}
/* TRANSITION fade */
.chameleon {
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  transition:.5s;
}
.green-text-hover,
a.green-text-hover {
    color: #4c9e45;
}
.orange-text-hover,
a.orange-text-hover {
    color: #e17f26;
}
.story-box p {
    font-size: 18px;
    color: #fff;
}
.story-box a {
    color: #fff;
}
@media screen and (min-width: 768px){
    .story-box p {
        margin-bottom: 8px;
    }   
}
@media screen and (min-width: 992px){
    .story-box p {
        font-size: 18px;
        color: #fff;
        margin-bottom: 15px;
    }
    .story-box h3 {
        margin: 15px 0 40px;
    }   
}
</style>
    <div id="storybox-content-wrapper" class="content-wrapper">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'storyboxpage' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>

            <?php endwhile; // End of the loop. ?>

    </div><!-- end of <div id="homepage-content-wrapper" class="content-wrapper"> -->

<?php get_footer(); ?>
