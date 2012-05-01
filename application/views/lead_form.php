<?php $form->html(); ?>
<div id="lead-form" class="row">
	<div class="span4 contact-well">
		<div class="padded-content padded-top">
			<h3>Inquire online today</h3>
			<p>Please fill out the inquiry form, or contact us below using traditional methods.</p>
			<table>
				<tr>
					<td class="align-top"><h4>Address:&nbsp;</h4></td>
					<td class="align-top">
						<span>3400 North Ashton Blvd Ste 110</span></br>
						<span>Lehi, Utah 84043</span>
					</td>
				</tr>
				<tr>
					<td class="align-top"><h4>Phone:&nbsp;</h4></td>
					<td class="align-top">(888) 694-2872</td>
				</tr>
				<tr>
					<td class="align-top"><h4>Email:&nbsp;</h4></td>
					<td class="align-top"><a href="mailto:info@matrix42.com">info@matrix42.com</a></td>
				</tr>
			</table>
		</div>
	</div><!-- contact-well -->
	<div class="span8 contact-form">
		<div class="row padded-top">
			<?=$form->view()->open()?>
			<div class="span4">
				<div class="padded-content">
					<?=$form->name->render()?>
					<?=$form->email->render()?>
					<?=$form->phone->render()?>
				</div>
			</div>
			<div class="span4">
				<?=$form->message->render()?>
				<?=$form->submit->render()?>
			</div>
			<?=$form->view()->close()?>
		</div>
	</div>
</div>