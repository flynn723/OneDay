<?php
/**
 * @version beta
 *
 * The template for displaying the header mobile menu.
 *
 * Contains the closing of the header mobile menu widgets 1, 2 & 3.
 *
 * @package OneDay
 *
 * @author jestrada@causeforce.com
 */
?>
<style type="text/css">
.navmenu.offcanvas {
    background: #616C73;
}
.navmenu-default .navmenu-nav>li>a, .navbar-default .navbar-offcanvas .navmenu-nav>li>a {
    color: #fff;
}
.four-off-canvas-buttons a.button {
    max-width: 80%;
    margin: 10px auto;
}
.navmenu-default .navmenu-nav>li>a.btn-white:hover {
    background: #fff;
    color: #616C73;
}
.navmenu-default .navmenu-nav>li>a.btn-green:hover {
    color: #3D9B35;
}
.navmenu-default .navmenu-nav>li>a.btn-orange:hover {
    color: #E17F26;
}
.mobile-menu-off-canvas-panel-group .panel-title {
    padding-left: 15px;  text-transform: uppercase;     font-size: 1.25em;
}
.mobile-menu-off-canvas-panel-group ul.menu {
    list-style: none;
}
.mobile-menu-off-canvas-panel-group ul.menu a {
    color: #006496;
    font-size: 1.25em;
}
.mobile-menu-off-canvas-panel-group .panel-default>.panel-heading {
    color: #fff;
    background-color: transparent;
    border: none;
}
.mobile-menu-off-canvas-panel-group .panel {
    background: transparent;
    border-radius: 0px;
    border: none;
}
.mobile-menu-off-canvas-panel-group .panel-collapse {
    background: #fff;
}
.mobile-menu-off-social-icons a {
    width: 50px;
    display: inline-block;
}
.mobile-menu-off-social-icons {
    width: 100%;
    max-width: 80%;
    margin: 10px auto;
    display: block;
    background: #E17F26;
    color: #fff;
    text-align: center;
    font-size: 2em;
}
.mobile-menu-off-social-icons i {
    color: #fff;
}
</style>
<!-- ********** OFF CANVAS MOBILE NAV ********** -->
<nav id="rightMenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
    <ul class="nav navmenu-nav four-off-canvas-buttons">
      <li class=""><a href="#" class="button btn-white text-center text-uppercase" title="">Login</a></li>
      <li class=""><a href="#" class="button btn-green text-center text-uppercase" title="">Register</a></li>
      <li class=""><a href="#" class="button btn-orange text-center text-uppercase" title="">Donate</a></li>
      <li class=""><a href="#" class="button btn-orange text-center text-uppercase" title="">Request Info</a></li> 
    </ul>
    
  <div class="mobile-menu-off-canvas-panel-group panel-group" id="mobile-off-canvas-accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingMOne">
        <h2 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#mobile-off-canvas-accordion" href="#collapseMOne" aria-expanded="false" aria-controls="collapseMOne">
            About&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
          </a>
        </h2>
      </div>
      <div id="collapseMOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
          <ul class="menu list-unstyled">
            <?php dynamic_sidebar('mobile-menu-1'); ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingMTwo">
        <h2 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#mobile-off-canvas-accordion" href="#collapseMTwo" aria-expanded="false" aria-controls="collapseMTwo">
            Get Involved&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
          </a>
        </h2>
      </div>
      <div id="collapseMTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMTwo" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
          <ul class="menu list-unstyled">
            <?php dynamic_sidebar('mobile-menu-2'); ?>
          </ul>       
      </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingMThree">
        <h2 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#mobile-off-canvas-accordion" href="#collapseMThree" aria-expanded="false" aria-controls="collapseMThree">
            My OneDay&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
          </a>
        </h2>
      </div>
      <div id="collapseMThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMThree" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
          <ul class="menu list-unstyled">
            <?php dynamic_sidebar('mobile-menu-3'); ?>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- end of <div class="panel-group" id="mobile-off-canvas-accordion" role="tablist" aria-multiselectable="true"> -->
  <div class="mobile-menu-off-social-icons">
    <a class=" " href="https://www.facebook.com/OneWalkToronto" target="_blank"><i class="fa fa-facebook"></i></a>
    <a class=" " href="https://twitter.com/onewalktoronto" target="_blank"><i class="fa fa-twitter"></i></a>
    <a class=" " href="http://instagram.com/onewalktoronto" target="_blank"><i class="fa fa-instagram"></i></a>
    <a class=" " href="https://www.youtube.com/user/OneWalkToronto" target="_blank"><i class="fa fa-youtube-play"></i></a>
  </div>
</nav>
<script type="text/javascript">
</script>