<?php
/**
 * OneDay functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OneDay
 */

/* Working Protocal Variable */
$protocol = is_ssl() ? 'https' : 'http'; 

/*
* Sanitize Text
=====================================*/
function sanitize_text( $text ) {
    return sanitize_text_field( $text );
}
/*
* Sanitize TextArea
=====================================*/
function sanitize_textarea( $text ) {
    return esc_textarea( $text );
}

if ( ! function_exists( 'oneday_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oneday_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on OneDay, use a find and replace
	 * to change 'oneday' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'oneday', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for Page & Post Excerpt.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_post_type_support( 'page', 'excerpt' );
	add_post_type_support( 'post', 'excerpt' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Main Menu', 'oneday' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'oneday_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // oneday_setup
add_action( 'after_setup_theme', 'oneday_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oneday_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oneday_content_width', 640 );
}
add_action( 'after_setup_theme', 'oneday_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function oneday_widgets_init( $name, $id, $description) {
	register_sidebar( array(
		'name'          => esc_html__( $name, 'oneday' ),
		'id'            => $id,
		'description'   => __($description),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
oneday_widgets_init( 'Sidebar', 'sidebar-1', 'Displays on the side of pages with a sidebar.' );
oneday_widgets_init( 'Footer 1', 'footer-1', 'First footer widget.' );
oneday_widgets_init( 'Footer 2', 'footer-2', 'Second footer widget.' );
oneday_widgets_init( 'Footer 3', 'footer-3', 'Third footer widget.' );
oneday_widgets_init( 'Mobile Menu 1', 'mobile-menu-1', 'First mobile menu widget.' );
oneday_widgets_init( 'Mobile Menu 2', 'mobile-menu-2', 'Second mobile menu widget.' );
oneday_widgets_init( 'Mobile Menu 3', 'mobile-menu-3', 'Third mobile menu widget.' );

/**
 * Enqueue scripts and styles.
 */
function oneday_scripts() {

	wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');

	wp_enqueue_style('jansy-extended-bootstrap-css', '//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css');

	wp_enqueue_style('font-awesome-important', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

	wp_enqueue_style( 'oneday-style', get_stylesheet_uri() );

	wp_enqueue_style('local-fonts', get_template_directory_uri(). '/css/fonts.css');

	wp_enqueue_script('jquery-lib', '//code.jquery.com/jquery-2.1.4.min.js');

	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');

	wp_enqueue_script('extended-bootstrap-js', '//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js');

	wp_enqueue_script( 'oneday-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'oneday-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'oneday-general-theme-script', get_template_directory_uri() . '/js/theme-script.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'oneday_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Extend bootstrap menus for WP
* Register Custom Navigation Walker */
require_once( get_template_directory() . '/inc/wp_bootstrap_navwalker.php' );

/* Customizing WordPress Admin Login Form Logo
=====================================*/
function oneday_login_css() { ?>
    <style type="text/css">
	    body {
			background: url('<?php echo get_template_directory_uri(); ?>/img/geometry.png');
		}
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/oneday-logo.svg);
            padding-bottom: 30px;
            background-size: 200px;
		    height: 70px;
		    width: 200px;
        }
        .login form {
	        background: #ef4e30;
	        border-radius: 0pxz;
	        box-shadow: 2px 2px 4px rgba(0,0,0,0.5);
		}
		.login label {
		color: #fff;
		font-weight: bold;
		}
		form#loginform {
		    background: repeating-linear-gradient( 125deg, #B9292F, #B9292F 20%, #4EA246 20%, #4EA246 39%, #ffCa2f 39%, #ffCa2f 59%, #00699E 59%, #00699E 79%, #ED8528 79%, #ED8528 100% )!important;
		    background: -webkit-repeating-linear-gradient( -25deg, #B9292F, #B9292F 20%, #4EA246 20%, #4EA246 39%, #ffCa2f 39%, #ffCa2f 59%, #00699E 59%, #00699E 79%, #ED8528 79%, #ED8528 100% )!important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'oneday_login_css' );
/* Links WordPress Admin Login Form Logo to Website
=====================================*/
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
    return 'OneDay';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/* Admin Area CSS
=====================================*/
function oneday_admin_color_schemes(){
	$theme_dir = get_template_directory_uri();
	wp_admin_css_color(
		'oneday', __('OneDay'),
		$theme_dir.'/admin-colors/oneday/colors.css',
		array('#006496', '#e17f26', '#fec52e', '#b4282e', '#4c9e45')
	);
}
add_action('admin_init', 'oneday_admin_color_schemes');
/* Force  Users to use oneday color scheme
================================= */
function force_oneday_admin_color($result) {
    return 'oneday';
}
add_filter('get_user_option_admin_color', 'force_oneday_admin_color');
function oneday_admin_area_js(){
	?>
	<script type="text/javascript">
		jQuery('#wpfooter').prepend('<p class="alignleft">WordPress Theme Built By <a href="http://causeforce.com" title="View Causeforce Website" target="_blank">Causeforce</a> Author: <a href="mailto:jestrada@causeforce.com">jestrada@causeforce.com</a> </p>');
	</script>
	<?php
}
add_action('admin_head', 'oneday_admin_area_js');
/*
* Favicon
=====================================*/
function oneday_fav() {
	if( get_theme_mod( 'oneday_favicon') != "" ):
	  echo '<link rel="Favicon Icon" href="'; echo get_theme_mod( "oneday_favicon" ); echo '" type="image/ico" sizes="16x16"/>';
	else:
	  echo '<link rel="Favicon Icon" href="'; echo get_template_directory_uri(); echo '/img/oneday-default-favicon.png" type="image/ico" sizes="16x16"/>';
	endif;
}
add_action( 'login_enqueue_scripts', 'oneday_fav' );
add_action('wp_head', 'oneday_fav');
add_action('admin_head', 'oneday_fav');

/*
* Google Analytics
=====================================*/
function add_googleanalytics() {
	echo '<!-- =================================================================
		==================== Google Analytics Tracking ======================
		=================================================================== -->';
	?>
	<script type="text/javascript">
	<?php
	if( get_theme_mod('google_analytics_code') != '' ) {
		echo get_theme_mod('google_analytics_code');
	} else { ?>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66635107-1', 'auto');
  ga('send', 'pageview');
	<?php } ?>
	console.log('Proudly Powered By Causeforce');
	console.log('Report Errors To: jestrada@causeforce.com ');
	</script><?php
}
add_action('wp_footer', 'add_googleanalytics');

/* Creates shortcode [homepage_oneday_carousel] */
function homepage_oneday_carousel_func(){
	/**
	 *
	 * @package OneDay
	 */
	get_template_part( 'template-parts/shortcode', 'homepagecarousel' );
}
add_shortcode('homepage_oneday_carousel', 'homepage_oneday_carousel_func');

/* Creates shortcode [oneday_social_boxes] */
function oneday_social_boxes_func(){
	/**
	 *
	 * @package OneDay
	 */
	get_template_part( 'template-parts/shortcode', 'socialboxes' );
}
add_shortcode('oneday_social_boxes', 'oneday_social_boxes_func');



/* Creates shortcode [oneday_social_share_buttons] */
function oneday_social_share_buttons_func(){
	/**
	 *
	 * @package OneDay
	 */
	get_template_part( 'template-parts/shortcode', 'socialsharebuttons' );
}
add_shortcode('oneday_social_share_buttons', 'oneday_social_share_buttons_func');

/*BreadCrumb ShortCode
* Creates [breadcrumb]
======================================== */
/* BreadCrumb Function
======================================== */
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_site_url();
	$pstTemp = False;
	if (get_post_type( get_the_ID() ) == 'post'){
        	echo '/blog';
		$pstTemp = True;
	}
        echo '">';
	if ($pstTemp){
        	echo 'Blog';
	} else {
		echo 'Portfolio';
	}
        echo '</a></li><li class="separator"> &raquo; </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> &raquo; </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> &raquo; </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator"> &raquo; </li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}
function breadcrumb_short(){
	return the_breadcrumb();
}
add_shortcode('breadcrumb','breadcrumb_short');

