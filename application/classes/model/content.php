<?php
namespace Darth\Model;

class Content extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);
		$form->set('label', ucfirst($this->type).' Content');
		$form->remove(array('elements'));
		$form->menu_id->set('driver', 'hidden');
		$form->content->set('driver', 'textarea')
			->set('label', 'Content <h7>(html)</h7>');

		return $form;
	}

	protected function _get_content()
	{
		return $this->_data->content;
	}
}