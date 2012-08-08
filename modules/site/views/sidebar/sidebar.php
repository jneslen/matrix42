<?php foreach($views as $view): ?>
<?=$view->render()?>
<?php endforeach; ?>
<?php if($support): ?>
	<?=$support?>
<?php endif; ?>