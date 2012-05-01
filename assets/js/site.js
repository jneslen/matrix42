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

	$('#latest').tab();

	//The following adds a rounded top left border to the tab-content container if any tab is clicked and removes that if the first is clicked.
	$('a[data-toggle]').click(function() {
		var parent = $(this).parent().parent().attr('id');
		var tabcontainer = $(this).parent().parent().parent().attr('id');
		if($(this).is('#'+parent+' li:first-child a')) {
			$('#'+tabcontainer+' .tab-content').removeClass('rounded-top-left');
		} else {
			$('#'+tabcontainer+' .tab-content').addClass('rounded-top-left');
		}
	});

	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});
});