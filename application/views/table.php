<div class="padded-content">
	<?=$table->render()?>
<?php if(isset($sorting) AND $sorting == false): ?>
	<?=$table->js(array("aaSorting" => array(), "bSort" => false))?>
<?php else: ?>
	<?=$table->js(array("aaSorting" => array()))?>
<?php endif; ?>
</div><!-- padded-content -->
<div class="clear space"></div>