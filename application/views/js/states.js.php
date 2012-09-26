<script type="text/javascript">
	var states = new Array();
<?php foreach($countries as $country): ?>
<?php if(!empty($country->states)): ?>
	states["<?=$country->id?>"] = {
	<?php foreach($country->states as $state): ?>
		"<?=$state->id?>" : "<?=$state->name?>",
		<?php endforeach; ?>
		};
<?php endif; ?>
<?php endforeach; ?>
</script>