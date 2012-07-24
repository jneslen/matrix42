<div class="clear space"></div>
<div class="span16">
	<div class="padded">
		<h2 class="no-margin left">URL: <span class="emphasis"><a href="<?=$menu->url?>" target="preview"><?=$menu->url?></a></span></h2><a href="/admin/cms/form/<?=$menu->id?>" data-toggle="modal" data-title="Edit <?=$menu->title?> Menu" class="icon editdoc left"></a>
		<h6 class="clear"><?=$menu->role?> <span class="carrot">&gt;</span> <?=$menu->type?></h6>
		<div class="clear space"></div>
		<h3 class="no-margin">Page Title: <?=$menu->pagetitle?></h3>
		<h5><?=$menu->subtitle?></h5>
		<img src="/assets/img/banners/<?=$menu->banner ? $menu->banner : 'sub-banner-woman.jpg'?>" width="315" height="51" />
	</div><!-- padded -->
	<hr />
	<div class="padded margin-right">
		<h2 class="left">Content</h2>
		<a href="/admin/cms/content/0/<?=$menu->id?>" data-toggle="modal" data-title="Add Content" class="btn btn-info right margin-right">Add Content</a>
		<div class="clear"></div>
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>Type</th>
				<th class="align-left"><span class="padded">Content</span></th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($menu->contents as $content): ?>
			<tr>
				<td class="align-top"><?=ucfirst($content->type)?></td>
				<td><div class="padded well margin-right"><code><?=substr(htmlspecialchars($content->content), 0, 1000)?></code></div></td>
				<td><a href="/admin/cms/content/<?=$content->id?>" data-toggle="modal" data-title="Edit <?=$menu->title?> Content" class="icon editdoc"></a><a href="/admin/cms/disable/content/<?=$menu->id?>" class="icon trash" rel="disable"></a></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div><!-- padded -->
</div><!-- span16 -->
