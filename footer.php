<!-- Start of footer.php -->
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OneDay
 */
?>
<style type="text/css">
/**/
footer p {
  font-size: 1.25em;
}
footer .tooltip.top {
  margin-top: -10px;
}
.footer-social-icons>div {
    display: inline; position: relative;
}
.footer-social-icons .tooltip.top {
  width: 150px;
}
.inset-tooltip {
    background: #fff;
    color: #000;
    border-radius: 5px;
    padding: 3px!Important;
    width: 100px;
    text-align: center;
    position: absolute;
    top: 25px;
    left: -30px;
    display: none;
}
.fb-footer-social-icon:hover #fb-tooltip,
.ig-footer-social-icon:hover #ig-tooltip,
.tw-footer-social-icon:hover #tw-tooltip,
.yt-footer-social-icon:hover #yt-tooltip {
    display: block;
}
.inset-tooltip:before {
    content: '';
    position: absolute;
    top: -5px;
    left: 45px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid #fff!important;
}
</style>
  <!-- Footer Modal To Be Used Dynamically -->
  <div id="dynamicFooterModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
          <h3 class="modal-title">Modal Heading</h3>
      </div>
      <div class="modal-body">
          
      </div>
      <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
  </div>
  <!-- End Footer Modal -->
  <div class="row blue-bg">
    <div class="row footer-colorbar-row">
      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/colorBarMobile.svg" alt="Colorbar Mobile SVG" class="full-width"/>
      </div>
      <div class="col-xs-12 hidden-xs">
        <img src="<?php echo get_template_directory_uri(); ?>/img/colorBarDesktop.svg" alt="Colorbar Desktop SVG" class="full-width"/>
      </div>
    </div>
    <footer class="container footer-container blue-bg">
      <div class="col-xs-12">
        <img class="margin-center footer-oneday-logo" src="<?php echo get_template_directory_uri(); ?>/img/oneday-white-logo.svg" alt="OneDay Color Logo">
      </div>
      <div class="col-xs-12 footer-contact-info text-center white-clr">
        <p>
          <a href="tel:1-300-584-655" class="phone-num white-clr" type="button" data-toggle="tooltip" data-placement="top" title="Contact One Walk">1300.584.655</a><br class="xs-only"/>
        </p>
        <!-- add to calendar event -->
        <div class="hidden">
        <!-- info: http://addtocalendar.com/ -->
        <span class="addtocalendar atc-style-blue">
            <var class="atc_event">
                <var class="atc_date_start">2016-08-20 00:00:00</var>
                <var class="atc_date_end">2016-08-21 00:00:00</var>
                <var class="atc_timezone">America/Los_Angeles</var>
                <var class="atc_title">Quest For The Gold Jersey</var>
                <var class="atc_description">OneDay. One Walk. One Ride. One Goal.</var>
                <var class="atc_location">Brisbane, Canada</var>
                <var class="atc_organizer">Brisbane OneRide Canada</var>
                <var class="atc_organizer_email">mcampbell@causeforce.com</var>
            </var>
        </span>
        </div>
        <!-- end of add to calendar event -->
        <p class="event-date cursor-pointer add-to-calendar-element" modal-title="<i class='fa fa-calendar-plus-o'></i> Add OneDay To Your Calendar" style="font-size: 1.25em;" type="button" data-toggle="tooltip" data-placement="top" title="Add To Calendar">August 20, 2016</p>
        <p class="event-location">
          <a class="cursor-pointer event-location white-clr" type="button" data-toggle="tooltip" data-placement="top" title="View Address In Google Maps">PO Box 15161, <br class="xs-only"/>City East. QLD. 4002.</a>
        </p>
      </div>
      <div class="col-xs-12">
        <hr class="footer-white-line-break"/>
        <div class="footer-social-icons">
          <div class="fb-footer-social-icon">
            <a href="https://www.facebook.com/BrisbaneOneDay" target="_blank" type="button" data-toggle="tooltip" data-placement="top" title="View OneDay Facebook"><i class="fa fa-facebook"></i></a>
            <div class="inset-tooltip tooltip fade bottom in" id="fb-tooltip" role="tooltip" style="">
              <div class="fb-like" data-href="https://www.facebook.com/BrisbaneOneDay/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
            </div>
          </div>
          <div class="ig-footer-social-icon">
            <a href="https://instagram.com/brisbaneoneday" target="_blank" type="button" data-toggle="tooltip" data-placement="top" title="View OneDay Instagram"><i class="fa fa-instagram"></i></a>
            <div class="inset-tooltip tooltip fade bottom in" id="ig-tooltip" role="tooltip" style="">
              <span class="ig-follow" data-id="e88b8820c0" data-handle="brisbaneoneday" data-count="false" data-size="small" data-username="false"></span>
            </div>
          </div>
          <div class="tw-footer-social-icon">
            <a href="https://twitter.com/OneDayBrisbane" target="_blank" type="button" data-toggle="tooltip" data-placement="top" title="View OneDay Twitter"><i class="fa fa-twitter"></i></a>
            <div class="inset-tooltip tooltip fade bottom in" id="tw-tooltip" role="tooltip" style="">
              <a href="https://twitter.com/OneDayBrisbane" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @OneDayBrisbane</a>
            </div>
          </div>
          <div class="yt-footer-social-icon">
            <a href="https://www.youtube.com/channel/UCqlRlaQMVPTR5O3SvAFygZg" target="_blank" type="button" data-toggle="tooltip" data-placement="top" title="View OneDay YouTube"><i class="fa fa-youtube"></i></a>
            <div class="inset-tooltip tooltip fade bottom in" id="yt-tooltip" role="tooltip" style="">
              <div class="g-ytsubscribe" data-channelid="UCqlRlaQMVPTR5O3SvAFygZg" data-layout="default" data-count="hidden"></div>
            </div>
          </div>
        </div>
        <hr class="footer-white-line-break"/>
      </div>
        <?php 
        /*
        * Get The Footer SiteMap (footer-sitemap.php).
        * @package OneDay
        * */ ?>
        <?php get_template_part('footer', 'sitemap'); ?>
      <div class="col-xs-12">
        <p class="footer-copyright text-center white-clr">&copy; <span class="currYear"></span> Causeforce, LLC. The OneWalk to Conquer Cancer logo is a registered trademark of The Princess Margaret Cancer Foundation, used under license.</p>
      </div>
    </footer>
  </div><!-- end of <div class="row purple-bg"> -->
</div><!-- <div class="container-fluid"> -->
<script type="text/javascript">
  /* Bootstrap Lightbox Modal JS */
  /* Script captures the click event of an anchor wrapped around an image and puts it into a bootstrap modal,
  anchor tag links should be a "#",
  requires the anchor to have a class of lightbox-img,
  requires the image to have a title if one is to use the caption
  */
  jQuery('.event-location').click(function(){
      jQuery('.modal-title').empty();
      jQuery('.modal-body').empty();

      var address = jQuery(this).text();
      var eventLocationIFrame = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.582582342017!2d153.37898461506998!3d-28.067767182643934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a03aaaaaaab%3A0x4062ec5e99f851b!2sAustralian+Organisation+For+Quality-Queensland+Inc!5e0!3m2!1sen!2sus!4v1447718850923" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';

      jQuery('.modal-title').html(address);
      jQuery('.modal-body').html(eventLocationIFrame);
      jQuery('.modal-body').append('<a class="button btn-green text-center" href="http://maps.google.com/?q=City%20East.%20QLD.%204002." title="View On Google Maps" target="_blank"><i class="fa fa-map-marker"></i> View On Google Maps</a>');
      jQuery('#dynamicFooterModal').modal({show:true});
  });
</script>
<!-- Start of Social Button Scripts -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1600203523551529";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script src="https://apis.google.com/js/platform.js"></script>
<!-- End o f Social Button Scripts -->
<?php wp_footer(); ?>
</body>
<!-- End of footer.php -->
</html>
