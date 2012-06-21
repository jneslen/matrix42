<?php

namespace Darth\Model;

class Partner extends User
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);
		$form->role->set('value', 'partner');

		$phone = $this->get_phone();
		$form->add('phone', 'group', $phone->get_form());

		$address = $this->get_address();
		$form->add('address', 'group', $address->get_form());

		$form->order
		(
			array
			(
				'company_name' => 0,
				'full_name' => 1,
				'email' => 2,
			)
		);

		return $form;
	}
}