$(document).ready(function() {

	$('a#show-post-link').on('click', function(event) {
		$('div#new-post').fadeOut(300, 'easeOutSine');
		$('div#show-post').delay(300).slideDown(400, 'easeOutSine');
		event.preventDefault();
	});

	$('a#new-post-link').on('click', function(event) {
		$('div#show-post').fadeOut(300, 'easeOutSine');
		$('div#new-post').delay(300).slideDown(400, 'easeOutSine');
		event.preventDefault();
	});

});