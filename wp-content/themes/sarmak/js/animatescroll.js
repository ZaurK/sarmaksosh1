


jQuery(window).scroll(function() {
    jQuery('.mov').each(function(){
      var imagePos = jQuery(this).offset().top;
      var topOfWindow = jQuery(window).scrollTop();
      if (imagePos < topOfWindow+800) {
        jQuery(this).addClass('zoomIn');
      }
    });
  });
		




