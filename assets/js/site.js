$(document).ready(function() {
	$('.dropdown-toggle').dropdown();

	$('#home-banner').carousel();

	$('#home-banner').bind('slid', function() {
		if($('#banner7').hasClass('active')) {
			$('#home-banner').carousel('pause');
			$('#banner7 .bg').animate({
				opacity: 0
			}, 3000, function() {
				$('#home-banner').carousel('cycle');
				$('#banner7. bg').remove();
			});
		}
	});

});