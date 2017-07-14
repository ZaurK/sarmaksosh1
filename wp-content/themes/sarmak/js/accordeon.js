
jQuery(function () {
	var el = jQuery('#nav_list_first li a');
	jQuery('#nav_list_first li:has("ul")').append('<span></span>');		
	el.click(function() {
		var checkElement = jQuery(this).next();	
		
		checkElement.stop().animate({'height':'toggle'}, 100).parent().toggleClass('active');
		if(checkElement.is('ul')) {
			return false;
		}		
	});
});




