<?=$form->render()?>
<script>
	$(document).ready(function() {
		if(!$('#Menu-parent_id').val()){
			$("#Menu-type option[value='submenu']").remove();
		}
	});

	$('#Menu-parent_id').change(function(){
		if($(this).val()) {
			$('#Menu-type option').removeAttr('selected');
			$('#Menu-type').append('<option value="submenu">Submenu</option>');
			$('#Menu-type').val('submenu');
			$("#Menu-type option[value='submenu']").attr('selected', 'selected');
			$('#Menu-type').attr('disabled', 'disabled');

		} else {
			$('#Menu-type').val('main');
			$("#Menu-type option[value='main']").attr('selected', 'selected');
			$("#Menu-type option[value='submenu']").remove();
			$('#Menu-type').removeAttr('disabled');
		}
	});
</script>