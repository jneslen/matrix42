<?php

namespace Darth\Model;

class Partner extends User
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->description->set('driver', 'textarea');

		$form->role->set('value', 'partner');
		$phone = $this->get_phone();
		$form->add('phone', 'group', $phone->get_form());

		$address = $this->get_address();
		$form->add('address', 'group', $address->get_form());

		$form->order
		(
			array
			(
				'type' => 0,
				'company_name' => 1,
				'full_name' => 2,
				'email' => 3,
			)
		);

		return $form;
	}
}