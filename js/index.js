$(function() {
		$('a[href=#take-the-tour]').click(function() {
	   $('html, body').animate({
		scrollTop: $("#index-content-1").offset().top
	}, "slide");
	});
});