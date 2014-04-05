jQuery.noConflict();
jQuery(document).ready(function($) {
	$('.btn-activate').bind('click tap', function(e) {
		e.preventDefault();    
    $('.menu-collapse').toggleClass('open-active');
  });
});