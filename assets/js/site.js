$(document).ready(function() {
	media_btn_resize();

	$(window).resize(function() {
		media_btn_resize();
	});

	$('.datepicker').datepicker();

	$('.dropdown-toggle').click(function(){
		event.preventDefault();
	});

	$('#home-banner').carousel({
		interval: 8000
	});

	$('.hint').popover();

	$('.tree-link').click(function(){
		window.location = $(this).attr('href');
	});

	$('a[data-toggle=modal]').click(function(event) {
		$('#modal-title').html($(this).attr('data-title'));
		$('#modal-body').load($(this).attr('href'), function() {
			$('#modal').modal({
				backdrop: true,
				show: true
			}).css({
				width: 'auto',
				'margin-left': function () {
					return -($(this).width() / 2);
				}
			});
		});
		event.preventDefault();
	});

	$('#modal .submit-button').click(function() {
		$('#modal form').submit();
	});

	$('#modal form').live('submit', function() {
		$(document).pngFix();

		$(this).ajaxSubmit({
			target: '#modal-body',
			type: 'post',
			success: function(r){
				obj = $.parseJSON(r);
				if(obj.success == true)
				{
					$('#modal').modal('hide');
					location.reload();
				}
			}
		});
		return false;
	});

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

	$('a[rel=disable]').click(function(event) {
		event.preventDefault();
		parent = $(this).parent().parent();
		$.ajax({
			url: $(this).attr('href'),
			success: function(){
				parent.remove();
			}
		});
	});

	function media_btn_resize() {
		if($(window).width() < 480) {
			$('.btn-large').addClass('btn-mini');
			$('.btn-large').addClass('former-large');
			$('.btn-large').removeClass('btn-large');
		}
		else if($(window).width() < 768) {
			$('.btn-large').addClass('former-large');
			$('.btn-large').removeClass('btn-large');
		}
		else if($(window).width() > 768) {
			$('.former-large').addClass('btn-large');
			$('.former-large').removeClass('btn-mini');
			$('.former-large').removeClass('former-large');
		}
	}
});