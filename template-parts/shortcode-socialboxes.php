<?php
/**
 * @version beta
 *
 * OneDay Shortcode Social Boxes. [oneday_social_boxes]
 *
 * @package OneDay
 */
?>
<style type="text/css">
/* Connect With Us*/
.mobile-social-row .col-xs-3 {
    height: 4.5em;
    text-align: center;
}
.mobile-social-row i {
    color: #fff;
    display: block;
    font-size: 2em;
    margin-top: 8%;
    margin-bottom: 2%;
}
@media screen and (min-width: 600px){
  .mobile-social-row .col-xs-3 {
    height: 5.5em;
  }
}
@media screen and (min-width: 768px){
  /* bootstrap specific breakpoint */
  .single-social-media-block {
    text-align: center;
    position: relative;
    transition: 500ms;
  }
  .single-social-media-block i {
    color: #fff;
    font-size: 5em;
    margin: 20% auto;
    transition: 500ms;
  }
  .social-media-action {
    position: absolute;
    top: 10%;
    right: 5%;
    opacity: 0;
    z-index: 1;
  }
  .single-social-media-block:hover .social-media-action {
    opacity: 1;
    z-index: 2;
    transition: 1500ms;
  }
  .single-social-media-block:before {
      border-top: 0px solid #fff;
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      width: 0;
      z-index: 1;
      transition: 500ms;
  }
  .single-social-media-fb-block:before {
      border-left: 0px solid #3F5382;
  }
  .single-social-media-tw-block:before {
    border-left: 0px solid #358AAF;
  }
  .single-social-media-yt-block:before {
      border-left: 0px solid #A23C42;
  }
  .single-social-media-inst-block:before {
      border-left: 0px solid #23384E;
  }

  .single-social-media-fb-block:hover:before {
    border-left: 12em solid #3F5382;
  }
  .single-social-media-tw-block:hover:before {
      border-left: 12em solid #358AAF;
  }
  .single-social-media-yt-block:hover:before {
      border-left: 12em solid #A23C42;
  }
  .single-social-media-inst-block:hover:before {
      border-left: 12em solid #23384E;
  }
  .single-social-media-block:hover:before {
      border-top: 8em solid #fff;
      transition: 500ms;
  }
}
@media screen and (min-width: 992px){
  /* boostrap specific breakpoint */
  .single-social-media-block:hover:before {
      border-left: 14em solid #23384E;
  }
}
@media screen and (min-width: 1200px){
  /* bootstrap specific breakpoint */
  .single-social-media-block:hover:before {
      border-left: 17em solid #23384E;
  }
  .single-social-media-block:hover:before {
      border-top: 10em solid #fff
  }
}
</style>
<!-- Social Boxes -->
  <div class="mobile-social-row hidden-sm hidden-md hidden-lg">
    <div class="col-xs-3" style="background: #5B78BB;">
        <a style="text-decoration: none;" href="https://www.facebook.com/BrisbaneOneDay" target="_blank" title="Visit Facebook Page">
          <i class="fa fa-facebook"></i>
        </a>
        <div class="social-media-action">
          <div class="fb-like" data-href="https://www.facebook.com/BrisbaneOneDay/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
    </div>
    <div class="col-xs-3" style="background: #436A93;">
        <a style="text-decoration: none;" href="http://instagram.com/brisbaneoneday" target="_blank" title="Visit YouTube Profile">
          <i class="fa fa-instagram"></i>
        </a>
        <div class="social-media-action">
          <span class="ig-follow" data-id="e88b8820c0" data-handle="brisbaneoneday" data-count="false" data-size="small" data-username="false"></span>
        </div>
    </div>
    <div class="col-xs-3" style="background: #4BBBEC;">
        <a style="text-decoration: none;" href="https://twitter.com/OneDayBrisbane" target="_blank" title="Visit Twitter Profile">
          <i class="fa fa-twitter"></i>
        </a>
        <div class="social-media-action">
          <a href="https://twitter.com/OneDayBrisbane" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @OneDayBrisbane</a>
        </div>
    </div>
    <div class="col-xs-3" style="background: #EC5B64;">
        <a style="text-decoration: none;" href="https://www.youtube.com/channel/UCqlRlaQMVPTR5O3SvAFygZg" target="_blank" title="Visit YouTube Channel">
          <i class="fa fa-youtube-play"></i>
        </a>
        <div class="social-media-action">
          <div class="g-ytsubscribe" data-channelid="UCqlRlaQMVPTR5O3SvAFygZg" data-layout="default" data-count="hidden"></div>
        </div>
    </div>
  </div><!-- end of <div class="mobile-social-row hidden-sm hidden-md hidden-lg"> -->
  <div class="clearfix"></div>
  <div class="desktop-social-row hidden-xs">
    <div class="col-xs-3 single-social-media-block single-social-media-fb-block" style="background: #5B78BB;">
        <a style="text-decoration: none;" href="https://www.facebook.com/BrisbaneOneDay" target="_blank" title="Visit Facebook Page">
          <i class="fa fa-facebook"></i>
        </a>
        <div class="social-media-action">
          <div class="fb-like" data-href="https://www.facebook.com/BrisbaneOneDay" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
    </div>
    <div class="col-xs-3 single-social-media-block single-social-media-inst-block" style="background: #436A93;">
        <a style="text-decoration: none;" href="https://instagram.com/brisbaneoneday" target="_blank" title="Visit YouTube Profile">
          <i class="fa fa-instagram"></i>
        </a>
        <div class="social-media-action">
        	<span class="ig-follow" data-id="e88b8820c0" data-handle="brisbaneoneday" data-count="false" data-size="small" data-username="false"></span>
        </div>
    </div>
    <div class="col-xs-3 single-social-media-block single-social-media-tw-block" style="background: #4BBBEC;">
        <a style="text-decoration: none;" href="https://twitter.com/OneDayBrisbane" target="_blank" title="Visit Twitter Profile">
          <i class="fa fa-twitter"></i>
        </a>
        <div class="social-media-action">
          <a href="https://twitter.com/OneDayBrisbane" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @OneDayBrisbane</a>
        </div>
    </div>
    <div class="col-xs-3 single-social-media-block single-social-media-yt-block" style="background: #EC5B64;">
        <a style="text-decoration: none;" href="https://www.youtube.com/channel/UCqlRlaQMVPTR5O3SvAFygZg" target="_blank" title="Visit YouTube Channel">
          <i class="fa fa-youtube-play"></i>
        </a>
        <div class="social-media-action">
          <div class="g-ytsubscribe" data-channelid="UCqlRlaQMVPTR5O3SvAFygZg" data-layout="default" data-count="hidden"></div>
        </div>
    </div>
  </div><!-- end of <div class="desktop-social-row hidden-xs" style="margin-top:50px;"> -->
<!-- End of Social Boxes -->