<?php
namespace Darth\Model;

class Press extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->content->set('driver', 'textarea');
		$form->release_date->set('class', 'datepicker');

		return $form;
	}
}