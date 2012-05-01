<?php

namespace Darth\Model;

class Lead extends User
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove
		(
			array
			(
				'campaign_id',
				'ip',
			)
		);

		$form->order
		(
			array
			(
				'full_name' => 0,
				'email' => 1,
			)
		);

		return $form;
	}

	public function get_lead_form()
	{
		$personal_phone = $this->get_phone('personal');
		$personal_phone_form = $personal_phone->get_form();

		$form = \Formo::form('lead')
			->add('name', array('label' => 'Full Name'))
			->add('email', array('type' => 'email', 'label' => 'Email'))
			->add('phone', 'group', $personal_phone_form)
			->add('message', 'textarea', array('label' => 'Message'))
			->rules('name', array(
			array('not_empty'),
			array('\Valid::full_name'),
		))
			->rules('email', array(
			array('not_empty'),
			array('email'),
			array('\Valid::unique_email', array(':value'))
		))
			->rules('phone', array(
			array('not_empty'),
			array('phone', array(':value', array(10))),
		))
			->callbacks(array(
			'fail' => array
			(
				'email' => array
				(
					array(function($field){
						$error = $field->error();
						if (strpos($error, 'already'))
						{
							$field->parent()->set('fail_unique_email', true);
						}
					}, array(':field')),
				)
			),
		));

		return $form;
	}

}
