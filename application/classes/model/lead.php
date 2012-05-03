<?php

namespace Darth\Model;

class Lead extends User
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove
		(
			array
			(
				'campaign_id',
				'ip',
			)
		);

		$form->order
		(
			array
			(
				'full_name' => 0,
				'email' => 1,
			)
		);

		return $form;
	}
}
