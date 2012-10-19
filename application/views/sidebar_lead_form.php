<div id="side-lead-form-anchor" class="span4"></div>
<?php $form->html(); ?>
<?php $form->view()->attr('action', \Request::$current->url().'#side-lead-form-anchor'); ?>
<div id="side-lead-form" class="well margin-right">
	<div class="well-container">
	<?php if($complete): ?>
		<div class="padded-content">
			<h2 class="emphasis"><span class="icon checkmark"></span>Thank you!</h2>
			<h3>Your Inquiry has been received</h3>
			<p>You will be contacted shortly in regards to your request.</p>
		</div><!-- padded-content -->
	<?php else: ?>
		<?=$form->view()->open()?>
		<?=$form->campaign_id->render()?>
		<div class="padded-content">
			<h2 class="emphasis"><span class="icon phone"></span>Request a Call!</h2>
			<h6>Fill out the following information to receive a consultation on how Matrix42 can help solve your IT needs.</h6>
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
<?=\Analytics::factory(array('google_adwords' => 'all'))->render()?>
<?php endif; ?>