<?php if(isset($form)): ?>
<?php $form->html(); ?>
<?php endif; ?>
<div class="clear space"></div>
<div class="span16">
	<a href="/admin/<?=\Request::$current->controller()?>/form" data-toggle="modal" data-title="Add <?=ucfirst(\Request::$current->controller())?>" class="btn btn-info right margin-right"><?=__('Add')?> <?=ucfirst(\Request::$current->controller())?></a>
</div>
<div class="span16">
	<div class="padded-content">
	<?php if(isset($form)): ?>
		<h3><a href="#" class="icon download right download-selected-btn"></a><span class="right">Download:</span></h3>
		<div class="clear"></div>
		<?php $form->view()->attr(array('id' => 'download-form', 'action' => '/admin/leads/download')); ?>
		<?=$form->view()->open()?>
	<?php endif; ?>
		<?=$table->render()?>
	<?php if(isset($form)): ?>
		<?=$form->view()->close()?>
		<h3><a href="#" class="icon download right download-selected-btn"></a><span class="right">Download:</span></h3>
		<div class="clear"></div>
	<?php endif; ?>
		<?=$table->js()?>
	</div><!-- padded-content -->
</div><!-- span16 -->
<div class="clear space"></div>
