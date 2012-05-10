<?php

namespace Darth\Model;

class Note extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove(array
		(
			'note_date',
			'disabled'
		));

		$form->note->set('driver', 'textarea');
		$form->user_id->set('driver', 'hidden');
		$form->author_id->set('driver', 'hidden');
		$form->parent_id->set('driver', 'hidden');

		return $form;
	}
}