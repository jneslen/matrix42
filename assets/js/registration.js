$(document).ready(function() {

	if($('form #registration-seats').val().length > 0)
	{
		update_estimate($('form #registration-seats'));
	}

	$('form #registration-seats').keyup(function() {
		update_estimate(this);
	});

	//This option will only work if you include an object array of all the countries states See views/js/states.js.php
	$('#address-country_id').change(function() {
		var state_container = $('#address-state_id').parent().parent().parent();
		var province_container = $('#address-province').parent().parent().parent();
		var state_array = states[$(this).val()];

		if($(this).val() == 'US') {
			$('.label', state_container).html('State');
		} else if($(this).val() == 'CA') {
			$('.label', state_container).html('Province');
		} else if($(this).val() == 'GB') {
			$('.label', state_container).html('County');
		}

		if(state_array) {
			$('#address-province').prop('disabled', true);
			$('#address-province').val('');
			$("#address-state_id option[value='OT']").prop('selected', false);
			$("#address-state_id option[value='OT']").remove();
			var statesel = $('#address-state_id');
			statesel.prop('disabled', false);
			statesel.empty();
			statesel.append($("<option></option>")); //Need a blank option
			$.each(state_array, function(key, value) {
				statesel.append($("<option></option>").attr("value", key).text(value));
			});
			state_container.show();
			province_container.hide();
		} else {
			$('#address-state_id').prop('disabled', true);
			$('#address-state_id').append($("<option></option>").attr("value",'OT'));
			$('#address-state_id').val('OT');
			$("#address-state_id option[value='OT']").attr('selected', true);
			$('#address-province').prop('disabled', false);
			province_container.show();
			state_container.hide();
		}
		/*
		 if($(this).val() != 'US') {
		 $('#address-state_id').prop('disabled', true);
		 $('#address-state_id').append($("<option></option>").attr("value",'OT'));
		 $('#address-state_id').val('OT');
		 $("#address-state_id option[value='OT']").attr('selected', true);
		 $('#address-province').prop('disabled', false);
		 province_container.show();
		 address_container.hide();
		 } else {
		 $('#address-province').prop('disabled', true);
		 $('#address-province').val('');
		 $("#address-state_id option[value='OT']").prop('selected', false);
		 $("#address-state_id option[value='OT']").remove();
		 $('#address-state_id').prop('disabled', false);
		 address_container.show();
		 province_container.hide();
		 }
		 */
	});

});

function update_estimate(obj) {
	var event_price = $('#event-price').text();
	var monetary = $('#monetary').text();
	var remaining_seats = $('#remaining-seats').text();
	var user_seats = $('#registration-seats').val();
	var seats = $(obj).val();

	var parent = $('#registration-seats').parent();
	var container = parent.parent().parent();

	if(parseInt(user_seats) > parseInt(remaining_seats)) {
		$('#registration-seats').val(remaining_seats);
		parent.addClass('error');
		$('.error-message', container).html('There are only '+remaining_seats+' seats available for this event.');
		var estimate = (remaining_seats*event_price);
	} else {
		parent.removeClass('error');
		$('.error-message', container).html('');
		var estimate = (seats*event_price);
	}

	$('form #registration-estimate').val(monetary+estimate.toFixed(2));
	$('form #registration-price').val(estimate.toFixed(2)).attr('value', estimate.toFixed(2));
}