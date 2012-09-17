<?php

namespace Darth\Model;

class Address extends Model
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);
		$countries = \Kacela::find_active('country', \Kacela::criteria()->sort('order', 'DESC'));

		$countries_array = array();
		$states = array();

		foreach($countries as $country)
		{
			$countries_array[$country->id] = $country->name;

			if($country->id == 'US') //might as well use the same query to get the states
			{
				foreach($country->states as $state)
				{
					$states[$state->id] = $state->name;
				}
			}
		}

		$form->state_id->set('driver', 'select')
			->set('label', 'State')
			->set('options', $states);
		$form->province->set('label', 'Province / Prefecture');

		if($this->country_id == 'US' OR $this->country_id == null)
		{
			$form->province->set('attr', array('disabled' => 'disabled'));
		}
		else
		{
			$form->state_id->set('attr', array('disabled' => 'disabled'));
			$form->state_id->set('value', 'OT');
		}

		$form->remove
		(
			array
			(
				'disabled',
			)
		);

		$form->set('label', ucfirst($this->type).' Address');
		$form->type->set('driver', 'hidden');
		$form->postal->set('label', 'Postal Code');
		$form->user_id->set('driver', 'hidden');
		$form->address1->set('label', 'Address');
		$form->address2->set('label', ' ');
		$form->country_id->set('driver', 'select')
			->set('label', 'Country')
			->set('options', $countries_array);

		$form->order
		(
			array
			(
				'country_id' => 6,
			)
		);

		return $form;
	}

	protected function _get_formatted_address()
	{
		$address = $this->care_of ? '<span class="italics">Care of: '.$this->care_of.'</span><br />' : '';

		$address .= $this->address1.' '.$this->address2.'<br />';

		if($this->country_id != 'US')
		{
			if($this->city)
			{
				$address .= $this->city.', '.$this->province.' '.$this->postal;
			}
			else
			{
				$address .= $this->province.' '.$this->postal;
			}

		}
		else
		{
			$address .= $this->city.', '.$this->state_id.' '.$this->postal;
		}

		$address .= '<br /><h6 class="emphasis">'.$this->country->name.'</h6>';

		return $address;
	}
}