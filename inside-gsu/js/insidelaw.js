jQuery.noConflict();
jQuery(document).ready(function($) {
	
	// add pop-up effect to mobile menu
	$('.btn-activate').bind('click tap', function(e) {
		e.preventDefault();    
    $('.menu-collapse').toggleClass('open-active');
  });
});