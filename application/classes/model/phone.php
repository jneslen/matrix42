<?php

namespace Darth\Model;

class Phone extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove(array('disabled'));

		$form->number->set('label', 'Phone number');
		$form->user_id->set('driver', 'hidden');
		$form->type->set('driver', 'hidden');
		$form->add('type', 'hidden', array('value' =>$this->type));

		return $form;
	}

	protected function _get_formatted_phone()
	{
		return \Format::phone($this->number);
	}

	protected function _set_number($value)
	{
		$this->_originalData['number'] = $this->_data->number;
		$this->_data->number = preg_replace('/\D/', '', $value);
		$this->_changed[] = 'number';
	}
}