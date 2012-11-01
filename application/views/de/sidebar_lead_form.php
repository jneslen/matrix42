<div id="side-lead-form-anchor" class="span4"></div>
<?php $form->html(); ?>
<?php $form->view()->attr('action', \Request::$current->url().'#side-lead-form-anchor'); ?>
<div id="side-lead-form" class="well margin-right">
	<div class="well-container">
		<?php if($complete): ?>
		<div class="padded-content">
			<h2 class="emphasis"><span class="icon checkmark"></span>Vielen Dank!</h2>
			<h3>Ihre Anfrage ist eingegangen.</h3>
			<p>Sie werden in Kürze bezüglich Ihrer Anfrage kontaktiert werden.</p>
		</div><!-- padded-content -->
		<?php else: ?>
		<?=$form->view()->open()?>
		<?=$form->campaign_id->render()?>
		<div class="padded-content">
			<h2 class="emphasis"><span class="icon phone"></span>Wir rufen Sie gerne an!</h2>
			<h6>Füllen Sie bitte folgende Felder aus, wenn Sie beraten werden möchten, wie Matrix42 Ihnen bei der Erfüllung Ihrer IT-Anforderungen helfen kann.</h6>
			<?=$form->name->render()?>
			<?=$form->email->render()?>
			<?=$form->number->render()?>
			<?=$form->message->render()?>
			<?=$form->submit->render()?>
		</div><!-- padded-content -->
		<?=$form->view()->close()?>
		<?php endif; ?>
	</div><!-- support-container -->
</div><!-- support -->
<?php if($complete): ?>
	<?=\Analytics::factory(array('google_adwords_de' => 'all'))->render()?>
<?php endif; ?>