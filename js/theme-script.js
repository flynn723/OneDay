/* ==================================
* Start of General Site Wide JavaScript
================================== */
jQuery(document).ready(function(){

  var date = new Date().getFullYear();
  jQuery('.currYear').text(date);

  jQuery(window).scroll(function(){
     if(jQuery(this).scrollTop() <= 110){
        jQuery('.fixed-after-scroll-over-110-pixels').removeClass('fixed-header');
     }
     if(jQuery(this).scrollTop() > 110){
        jQuery('.fixed-after-scroll-over-110-pixels').addClass('fixed-header');
     }
  });

  /* Toggle Off Canvas Mobile Menu Accordion Icon CLick */
  jQuery('.mobile-menu-off-canvas-panel-group .panel-title a').click(function(){
    var faIcon = jQuery(this).find('i');
    if (faIcon.hasClass('fa-angle-down') ){
      faIcon.attr('class', 'fa fa-angle-up');
    } else {
      faIcon.attr('class', 'fa fa-angle-down');
    }
  });


  /* Add To Calendar Script */
  (function () {
  if (window.addtocalendar)if(typeof window.addtocalendar.start == "function")return;
  if (window.ifaddtocalendar == undefined) { window.ifaddtocalendar = 1;
      var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
      s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;
      s.src = ('https:' == window.location.protocol ? 'https' : 'http')+'://addtocalendar.com/atc/1.5/atc.min.js';
      var h = d[g]('body')[0];h.appendChild(s); }})();
  if (jQuery('.atcb-list li').html != ''){
    console.log('There is an add to Calendar Button On This Page.');
  }
  /* Place the addtocalender.com rendered links in the dynamic bootstrap footer Modal & then show the modal */
  jQuery('.add-to-calendar-element').click(function(){
    jQuery('.modal-title').empty();
    jQuery('.modal-body').empty();

    var modalTitle = jQuery(this).attr("modal-title");
    jQuery('.modal-title').html(modalTitle);

    jQuery('.modal-body').html('<ul class="modal-body-atc-list"></ul>');
    jQuery('.atcb-list li').each(function(){
      jQuery('.modal-body ul').prepend('<li>'+jQuery(this).html()+'</li>');     
    });

    $('#dynamicFooterModal').modal({show:true});/* Requires a $ sign */
  });
  /* End of Add To Calendar Script */

  /* Bootstrap Lightbox Modal JS */
  /* Script captures the click event of an anchor wrapped around an image and puts it into a bootstrap modal,
  anchor tag links should be a "#",
  requires the anchor to have a class of lightbox-img,
  requires the image to have a title if one is to use the caption
  */
  jQuery('.lightbox-img').click(function(){
      jQuery('.modal-title').empty();
      jQuery('.modal-body').empty();

      var title = $(this).attr("title");
      var imgSRC = jQuery(this).find('img').attr("src");

      jQuery('.modal-title').html(title);
      jQuery('.modal-body').html('<img src="'+imgSRC+'" alt="'+title+'"width="100%"/>');
      
      $('#dynamicFooterModal').modal({show:true});/* Requires a $ sign */
  });

  jQuery(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

});
/* ==================================
* End of General Site Wide JavaScript
================================== */
/* ==================================
* Footer SiteMap JavaScript
================================== */
jQuery(document).ready(function(){
    var windowWidth = jQuery(window).width();
    if (windowWidth > 768 ){
        jQuery('.footer-site-map-accordion .panel-title a i').hide();
        jQuery('.footer-site-map-accordion .collapse').addClass('in');
    }

    jQuery(window).resize(function(){
        var windowWidth = jQuery(window).width();
        if ( windowWidth >= 768 ){
            jQuery('.footer-site-map-accordion .panel-title a i').hide();
            jQuery('.footer-site-map-accordion .collapse').addClass('in');
        } else {
            jQuery('.footer-site-map-accordion .panel-title a').find('i');
            jQuery('.footer-site-map-accordion .panel-title a i').show();
            jQuery('.footer-site-map-accordion .collapse').removeClass('in');
        }
    });

  /* Toggle Accordion Icon CLick */
  jQuery('.footer-site-map-accordion .panel-title a').click(function(){
    var faIcon = jQuery(this).find('i');
    if (faIcon.hasClass('fa-plus') ){
      faIcon.removeClass('fa-plus');
      jQuery(this).find('i').addClass('fa-times');
    } else {
      faIcon.removeClass('fa-times');
      jQuery(this).find('i').addClass('fa-plus');
    }
  });
});
/* ==================================
* End of Footer SiteMap JavaScript
================================== */