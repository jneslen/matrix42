<?php $form->html(); ?>
<?php $form->view()->attr('action', \Request::$current->url().'#lead-form-anchor'); ?>
<div class="row show-grid">
	<div id="lead-form" class="<?=$full ? 'span16' : 'span12'?>">
		<div id="lead-form-anchor" class="span4"></div>
		<div class="span4 contact-well">
			<div class="padded-content padded-top">
				<h3>Inquire online today</h3>
				<p>Please fill out the inquiry form, or contact us below using traditional methods.[translation needed]</p>
				<table>
					<tr>
						<td class="align-top"><h4>Address:&nbsp;</h4></td>
						<td class="align-top">
							<span>Dornhofstr. 44-46</span><br />
							<span>63263 Neu-Isenburg</span><br />
							<span>Deutschland</span>
						</td>
					</tr>
					<tr>
						<td class="align-top"><h4>Phone:&nbsp;</h4></td>
						<td class="align-top">+49 (0) 61 02 - 816-0</td>
					</tr>
					<tr>
						<td class="align-top"><h4>Email:&nbsp;</h4></td>
						<td class="align-top"><a href="mailto:info@matrix42.de">info@matrix42.de</a></td>
					</tr>
				</table>
			</div>
		</div><!-- contact-well -->
		<div class="<?=$full ? 'span12' : 'span8'?> contact-form">
			<div class="row padded-top">
			<?php if($complete): ?>
				<div class="span8">
					<h2 class="padded-content">Your inquiry has been submitted</h2>
					<p class="padded-content">You will be contacted shortly in regards to your request.</p>
				</div>
			<?php else: ?>
				<?=$form->view()->open()?>
				<?=$form->campaign_id->render()?>
				<div class="span4">
					<div class="padded-content">
						<?=$form->name->render()?>
						<?=$form->email->render()?>
						<?=$form->number->render()?>
					</div>
				</div>
				<div class="span4">
					<?=$form->message->render()?>
					<?=$form->submit->render()?>
				</div>
				<?=$form->view()->close()?>
			<?php endif; ?>
			</div>
		</div><!-- contact-form -->
		<div class="clear"></div>
	</div><!-- lead-form -->
</div><!-- row -->