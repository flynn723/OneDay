<?php
/**
 * The template for displaying the footer sitemap.
 *
 * Contains the closing of the footer widgets 1, 2 & 3.
 *
 * @package OneDay
 *
 * @author jestrada@causeforce.com
 */
?>
<style type="text/css">
/* ==================================
* Footer SiteMap Styling
================================== */
/* general */
.footer-site-map-accordion {

}
.panel.panel-transparent {
    border: none;
    border-radius: 0;
    box-shadow: none;

}
.footer-site-map-accordion .panel-title {
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
}
.footer-site-map-accordio .panel-body {
  border-top: none;
}
.footer-site-map-accordion .panel-body a{
  display: block;
  text-align: center;
  color: #fff;
  font-size: 1.2em;
}
.footer-site-map-accordion .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: none;
}
.footer-site-map-accordion .panel-heading {
border-radius: 0px;
}
.within-other-panel {
    margin: 15px 15px 30px;
}
/* Colors */

.transparent-bg,
.panel-transparent {
  background-color: transparent;
}
/* breakpoints */
@media screen and (min-width: 768px){
/* bootstrap specific breakpoints */
  .footer-site-map-accordion .panel-title {
    text-align: left;
  }
  .footer-site-map-accordion .panel-body a {
      text-align: left;
  }
}
@media screen and (min-width: 992px){
  .panel.panel-transparent {
        padding-left: 6%;
  }
}
@media screen and (min-width: 1200px){
  .panel.panel-transparent {
    padding-left: 8%;
  }
}
/* ==================================
* End of Footer SiteMap Styling
================================== */
</style>
<!-- start of to16_footer_sitemap -->

<!-- <div class="col-xs-12 hidden-sm hidden-md hidden-lg"> -->
<!-- Left the data-parent attribute empty so accordion doesn't close other panels -->
<div class="footer-site-map-accordion">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="col-xs-12 col-sm-4 panel panel-transparent">
    <div class="panel-heading" role="tab" id="footerheadingOne">
      <h4 class="panel-title text-uppercase">
        <a class="collapsed yellow-clr" role="button" data-toggle="collapse" data-parent="" href="#footercollapseOne" aria-expanded="false" aria-controls="footercollapseOne">
          About&nbsp;<i class="fa fa-plus"></i>
        </a>
      </h4>
    </div>
    <div id="footercollapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="footerheadingOne">
      <div class="panel-body white-clr">
        <?php dynamic_sidebar( 'footer-1' ); ?>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4 panel panel-transparent">
    <div class="panel-heading" role="tab" id="footerheadingTwo">
      <h4 class="panel-title text-uppercase">
        <a class="collapsed green-clr" role="button" data-toggle="collapse" data-parent="" href="#footercollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Get Involved&nbsp;<i class="fa fa-plus"></i>
        </a>
      </h4>
    </div>
    <div id="footercollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="footerheadingTwo">
      <div class="panel-body white-clr">
        <?php dynamic_sidebar( 'footer-2' ); ?>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4 panel panel-transparent">
    <div class="panel-heading" role="tab" id="footerheadingThree">
      <h4 class="panel-title text-uppercase">
        <a class="collapsed orange-clr" role="button" data-toggle="collapse" data-parent="" href="#footercollapseThree" aria-expanded="false" aria-controls="footercollapseThree">
          My OneDay&nbsp;<i class="fa fa-plus"></i>
        </a>
      </h4>
    </div>
    <div id="footercollapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="footerheadingThree">
      <div class="panel-body white-clr">
        <?php dynamic_sidebar( 'footer-3' ); ?>
      </div>
    </div>
    <h4 class="panel-title text-uppercase within-other-panel">
          <a href="#" title="Login To Your OneDay" class="red-clr">My <span style="text-transform: capitalize;">OneDay</span></a>            
    </h4>   
  </div>
</div>
</div><!-- end of footer-site-map-accordion -->

<!-- end of to16_footer_sitemap -->