<?php foreach($page_contents as $content): ?>
<?php if($content->type == "main"): ?>
<?=$content->content?>
<?php endif; ?>
<?php endforeach; ?>