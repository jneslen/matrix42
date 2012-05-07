<div class="span16 large-space"></div>
<div class="span16">
	<a href="/admin/<?=\Request::$current->controller()?>/form" class="btn btn-info right margin-right">Add <?=ucfirst(\Request::$current->controller())?></a>
</div>
<div class="span16">
	<div class="padded-content">
		<?=$table->render()?>
		<?=$table->js()?>
	</div>
</div>
<div class="span16 large-space"></div>
