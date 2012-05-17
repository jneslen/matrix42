<div class="clear space"></div>
<div class="span16">
	<a href="/admin/<?=\Request::$current->controller()?>/form" data-toggle="modal" data-title="Add <?=ucfirst(\Request::$current->controller())?>" class="btn btn-info right margin-right">Add <?=ucfirst(\Request::$current->controller())?></a>
</div>
<div class="span16">
	<div class="padded-content">
		<?=$table->render()?>
		<?=$table->js()?>
	</div><!-- padded-content -->
</div><!-- span16 -->
<div class="clear space"></div>
