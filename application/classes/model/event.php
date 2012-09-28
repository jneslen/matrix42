<?php
namespace Darth\Model;

class Event extends Model
{
	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->description->set('driver', 'textarea');
		$form->location->set('driver', 'textarea');
		$form->use_time->set('attr', array('class' => 'use-time'));

		$form->order
		(
			array
			(
				'type' => 0,
				'title' => 1,
				'subtitle' => 2,
				'description' => 3,
				'use_time' => 4,
				'start_date' => 5,
				'end_date' => 6,
				'time_zone' => 7,
			)
		);

		return $form;
	}
}