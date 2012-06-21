<?php
namespace Darth\Model;

class Company extends Model {
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->set('label', 'Company Info');
		$form->name->set('label', 'Company Name');

		$form->remove
		(
			array
			(
				'address_id',
				'phone_id',
			)
		);

		return $form;
	}
}