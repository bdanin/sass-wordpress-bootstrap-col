jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
	$('.btn-activate').on('click', function(e) {
    $('.menu-collapse').toggleClass("open-active"); //you can list several class names 
    e.preventDefault();
  });
});