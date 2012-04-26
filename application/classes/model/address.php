<?php

namespace Darth\Model;

class Address extends Model
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove
		(
			array
			(
				'state_id',
				'country_id',
				'disabled',
			)
		);

		$form->type->set('driver', 'hidden');
		$form->postal->set('label', 'Postal Code');
		$form->lead_id->set('driver', 'hidden');
		$form->address1->set('label', 'Address');
		$form->address2->set('label', ' ');

		return $form;
	}

	protected function _get_formatted_address()
	{
		return $this->address1.' '.$this->address2.'<br />'
			.$this->city.', '.$this->state_id.' '.$this->postal;
	}
}