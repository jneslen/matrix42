<?php

namespace Darth\Model;

class Lead extends User
{
	public function create_new_lead($form)
	{
		// Generate the temp password
		$temp_password = \Text::random();
		$hash_password = \Bonafide::instance()->hash($temp_password);

		// Set the user variables
		$this->full_name = $form->name->val();
		$this->email = $form->email->val();
		$this->role = 'lead';
		$this->password = $hash_password;
		$this->inquiry_date = time();
		$this->last_activity_date = time();
		$this->message = $form->message->val();
		$this->last_ip = \Request::$client_ip;
		$this->inquiry_ip = \Request::$client_ip;

		// Insert the user and client records
		$this->save();

		$personal_phone = $this->get_phone('primary');
		$personal_phone->number = \Format::clean_number($form->number->val());
		$personal_phone->save();

		// Start building the email
		/*TODO: need to set up email system
		$message = \View::factory('email/_template')
			->bind('header', $header)
			->bind('footer', $footer)
			->bind('content', $email_content);


		$header = \View::factory('email/_header')
			->set('title', 'Welcome to Lendio');
		$footer = \View::factory('email/_footer');
		$email_content = \View::factory('email/welcome')
			->set('temp_password', $temp_password);

		// Send the email
		$email = \Email::factory('Welcome to Lendio')
			->to($form->email->val())
			->from('members@lendio.com')
			->message($message->render(), 'text/html')
			->send();
		*/
	}

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
		$form = \Formo::form('lead')
			->add('name', array('label' => 'Full Name'))
			->add('email', array('type' => 'email', 'label' => 'Email'))
			->add('number', array('label' => 'Phone Number'))
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
			->rules('number', array(
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
			'pass' => array
			(
				':self' => array
				(
					array(array($this, 'create_new_lead'), array(':field')),
				),
			),
		));

		return $form;
	}
}
