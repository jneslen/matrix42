<?php
namespace Darth\Model;

class Case_study extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->description->set('driver', 'textarea');

		return $form;
	}
}