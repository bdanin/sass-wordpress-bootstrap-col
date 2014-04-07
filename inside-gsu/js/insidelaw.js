jQuery.noConflict();
jQuery(document).ready(function($) {
	
	// add pop-up effect to mobile menu
	$('.btn-activate').bind('click tap', function(e) {
		e.preventDefault();    
    $('.menu-collapse').toggleClass('open-active');
    $(this).toggleClass('activated');
  });

  // create toggle-states for 3rd tier mobile
  // $('.menu-global li').bind('touchstart touchend', function(e) {
  //   e.preventDefault();
  //   $(this).toggleClass('hover_effect');
  // });
});