<?php
namespace Darth\Model;

class Event extends Model
{
	public function get_form($name = null)
	{
		//exit(\Debug::vars($this->_fields['type']->values));
		$form = parent::get_form($name);

		$form->description->set('driver', 'textarea');
		$form->type->set('driver', 'select');
		$form->use_time->set('attr', array('class' => 'use-time'));
		//$form->add('type', 'select', array('options' => $this->_fields['type']->values));

		return $form;
	}
}