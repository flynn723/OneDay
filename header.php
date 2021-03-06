<?php
/**
 * @version beta
 *
 * The header for our the ondeday wp theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OneDay
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container-fluid">
    <style type="text/css">

    </style>
    <!-- TOP NAVIGATION -->
    <header class="row header-row fixed-after-scroll-over-110-pixels">
      <div class="col-xs-8 col-sm-3 col-md-3">
      <a href="<?php echo get_site_url(); ?>" title="Go To <?php echo get_bloginfo('name'); ?> Homepage">
        <h1 class="hidden-site-title" style="visibility: hidden; margin: 0px; height: 0px;"><?php echo get_bloginfo('name'); ?></h1>
        <img src="<?php echo get_template_directory_uri(); ?>/img/oneday-logo.svg" class="full-width margin-center oneday-header-logo"/>
      </a>
      </div>
      <div class="hidden-xs hidden-sm col-md-5 col-lg-4">
          <nav id="nav-main-menu">
            <?php wp_nav_menu( array(
              'menu'              => 'main-menu',
              'theme_location'    => 'main-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navigation-collapsable',
              'menu_class'        => 'nav navbar-nav main-menu',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            ); ?>
          </nav>
      </div>
      <style type="text/css">
      .register-btn-dropdown-wrap .dropdown-menu {
          margin: -5px 0 0 2px;
          border-radius: 0px;
          width: 100%;
          max-width: 200px;
          min-width: 130%;
      }

      .register-btn-dropdown-wrap:hover .dropdown-menu {
          display: block;
      }
      .register-btn-dropdown-wrap.open .btn-green {
        background: #fff;
        color: #3D9B35;
      }
      .green-dropdown-menu {
          background: #3D9B35;
      }
      .green-dropdown-menu li {
          margin: 15px auto;
      }
      .green-dropdown-menu li a {
        color: #fff;
      }
      .green-dropdown-menu li a i {
        float: left;
      }
      .green-dropdown-menu:before {
          width: 0;
          height: 0;
          border-left: 15px solid transparent;
          border-right: 15px solid transparent;
          border-bottom: 15px solid #3D9B35;
          content: '';
          position: absolute;
          top: -15px;
          left: 40px;
      }
      @media screen and (min-width: 768px){
        .register-btn-dropdown-wrap .dropdown-menu {
          margin: 0px 0 0 15px;
        }
      }
      @media screen and (min-width: 992px){
        .register-btn-dropdown-wrap .dropdown-menu {
            margin: -2px 0 0 2px;
            min-width: 165%;
        }
      }
      </style>
      <div class="hidden-xs col-sm-7 col-md-4">
        <div class="row small-header-3-cta-btns-row md-row-col-2-padding">
          <div class="col-xs-4">
            <div class="register-btn-dropdown-wrap">
              <button class="button btn-green full-width text-center text-uppercase" id="registerLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Give A Donation">
                Register
              </button>
              <ul class="dropdown-menu green-dropdown-menu" aria-labelledby="registerLabel">
                <li>
                  <a href="#" class="white-clr full-width text-center text-uppercase" title="Register As A Individual" target="_blank"><i class="fa fa-user"></i>  Individual</a>
                </li>
                <li>
                  <a href="#" class="white-clr full-width text-center text-uppercase" title="Join A Team" target="_blank"><i class="fa fa-user-plus"></i>  Join A Team</a>
                </li>
                <li>
                  <a href="#" class="white-clr full-width text-center text-uppercase" title="Create A Team" target="_blank"><i class="fa fa-users"></i>  Create A Team</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-4">
            <a href="#" class="button btn-orange full-width text-center text-uppercase" title="Give A Donation" target="_blank">Donate</a>
          </div>
          <div class="col-xs-4">
            <a href="#" class="button btn-orange full-width text-center text-uppercase button-text-smaller" title="Request Info">Request Info</a>
          </div>
        </div><!-- end of <div class="row small-header-3-cta-btns-row"> -->
      </div>
      <div class="col-xs-4 col-sm-2 hidden-md hidden-lg">
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#rightMenu" data-canvas="body">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="clearfix hidden-sm hidden-md hidden-lg"></div>
      <div class="row mobile-header-3-cta-btns-row hidden-sm hidden-md hidden-lg">
        <div class="col-xs-4">
          <div class="register-btn-dropdown-wrap">
            <button class="button btn-green full-width text-center text-uppercase" id="registerLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Give A Donation">
              Register
            </button>
            <ul class="dropdown-menu green-dropdown-menu" aria-labelledby="registerLabel">
              <li>
                <a href="#" class="white-clr full-width text-center text-uppercase" title="Register As A Individual" target="_blank"><i class="fa fa-user"></i>  Individual</a>
              </li>
              <li>
                <a href="#" class="white-clr full-width text-center text-uppercase" title="Join A Team" target="_blank"><i class="fa fa-user-plus"></i>  Join A Team</a>
              </li>
              <li>
                <a href="#" class="white-clr full-width text-center text-uppercase" title="Join A Team" target="_blank"><i class="fa fa-users"></i>  Create A Team</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xs-4">
          <a class="button btn-orange full-width text-center text-uppercase">Donate</a>
        </div>
        <div class="col-xs-4">
          <a class="button btn-orange full-width text-center text-uppercase button-text-smaller">Request Info</a>
        </div>
      </div>
    </header>
    <?php
    /**
     * Get The Off Canvas Mobile Menu (header-offcanvasmobilemenu.php).
     *
     * @package OneDay
     */
    ?>
    <?php get_template_part('header', 'offcanvasmobilemenu'); ?>
    <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.register-btn-dropdown-wrap').mouseenter(function(){
        jQuery(this).addClass('open')
      }).mouseleave(function(){
        jQuery(this).removeClass('open');
      });
    });
    </script>
    <!-- end of header.php -->

