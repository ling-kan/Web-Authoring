//Back to Top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');


var amountScrolled = 100;

$(window).scroll(function() {
	// When the user scrolls more than 'amountScrolled' pixels the back to top button will appear
	if ( $(window).scrollTop() > amountScrolled ) {
	//Fade in and out for the back to top button
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});
// Once the user clicks on the button it will scroll back to 0px
$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
