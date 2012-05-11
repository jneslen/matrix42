<?php
namespace Darth\Model;

class Country extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove
		(
			array
			(
				'order',
			)
		);
		return $form;
	}
}