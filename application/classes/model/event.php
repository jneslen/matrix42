<?php
namespace Darth\Model;

class Event extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->description->set('driver', 'textarea');
		$form->use_time->set('attr', array('class' => 'use-time'));

		return $form;
	}
}