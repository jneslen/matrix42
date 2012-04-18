<?php if($support): ?>
<?=$support?>
<?php endif; ?>
<?php foreach($views as $view): ?>
<?=$view->render()?>
<?php endforeach; ?>