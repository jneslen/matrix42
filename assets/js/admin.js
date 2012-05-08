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
});