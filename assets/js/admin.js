$(document).ready(function() {
	settimepicker();

	$('.use-time').live('click', function() {
		settimepicker();
	});

	function settimepicker() {
		if($('.use-time').is(':checked')) {
			$('.datepicker').datepicker('destroy');
			$('.datepicker').addClass('datetimepicker');
			$('.datetimepicker').removeClass('datepicker');
			$('.datetimepicker').datetimepicker();
			$('.datetimepicker').datetimepicker('enable');
		} else {
			$('.datetimepicker').datetimepicker('destroy');
			$('.datetimepicker').addClass('datepicker');
			$('.datepicker').removeClass('datetimepicker');
			$('.datepicker').datepicker();
			$('.datepicker').datepicker('enable');
		}
	}

	$("#menu-tree").jstree({
		'themes' : {
			'theme' : 'apple',
			'dots' : false,
			'icons' : false
		}
	});

	$('#select-all').live('click', function(e){
		if ($(this).is(':checked')) {
			$('.checkbox-cell input:visible').attr('checked', true);
		} else {
			$('.checkbox-cell input:visible').attr('checked', false);
		}
	});

	$('a[rel=contact-date]').click(function(event) {
		event.preventDefault();
		$.ajax({
			url: $(this).attr('href'),
			success: function(r){
				obj = $.parseJSON(r);
				if(obj.success == true)
				{
					$('#contact-date').text(obj.contact_date);
				}
			}
		});
	});
});