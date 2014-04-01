jQuery.noConflict();
jQuery(document).ready(function($) {
	$('.btn-activate').bind('click tap', function() {    
    $('.menu-collapse').toggleClass('open-active');
  });
});