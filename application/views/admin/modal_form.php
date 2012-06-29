<?php if(isset($components)): ?>
<div class="container">
	<div class="row">
		<div class="span8 left">
<?php endif; ?>
			<?=$form->render()?>
<?php if(isset($components)): ?>
		</div><!-- span10 -->
		<div class="span8 left">
			<div class="margin-right">
				<h3>Components</h3>
				<table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Type</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
				<?php foreach($components as $component): ?>
					<tr>
						<td>
							<a href="#" data-content="<?=$component->name?>" class="icon arrow-left add-component"></a>
						</td>
						<td><?=$component->name?></td>
						<td><?=$component->type?></td>
						<td><?=$component->description?></td>
					</tr>
				<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- margin-right -->
		</div><!-- span4 -->
	</div><!-- row -->
</div><!-- container -->
<?php endif; ?>
<script>
	$(document).ready(function() {
		if(!$('#Menu-parent_id').val()){
			$("#Menu-type option[value='submenu']").remove();
		}
	<?php if(isset($components)): ?>
		$('.add-component').click(function(){
			$('.content-text').val($('.content-text').val()+$(this).attr('data-content'));
		});
	<?php endif; ?>
		$('#address-country_id').change(function() {
			if($(this).val() != 'US') {
				$('#address-state_id').prop('disabled', true);
				$('#address-state_id').append($("<option></option>").attr("value",'OT'));
				$('#address-state_id').val('OT');
				$("#address-state_id option[value='OT']").attr('selected', true);
				$('#address-province').prop('disabled', false);
			} else {
				$('#address-province').prop('disabled', true);
				$('#address-province').val('');
				$("#address-state_id option[value='OT']").prop('selected', false);
				$("#address-state_id option[value='OT']").remove();
				$('#address-state_id').prop('disabled', false);

			}
		});
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
<?php if(isset($scripts)): ?>
<?php foreach($scripts as $script): ?>
<script type="text/javascript" src="/assets/js/<?=$script?>.js"></script>
<?php endforeach; ?>
<?php endif; ?>