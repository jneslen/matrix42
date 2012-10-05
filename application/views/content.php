<?php foreach($page_contents as $content): ?>
<?php if($content->type == "main"): ?>
<?=$content->markdown('content')?>
<?php endif; ?>
<?php endforeach; ?>