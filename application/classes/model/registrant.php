<?php

namespace Darth\Model;

class Registrant extends User
{
	public function create_new_registrant($form)
	{
		//if this is an existing email then just update that leads info else create a new lead
		if(!\Valid::unique_email($form->email->val()))
		{
			$registrant = \Kacela::find('user', $form->email->val());
		}
		else
		{
			$registrant = $this;
			// Generate the temp password
			$temp_password = \Text::random();
			$hash_password = \Bonafide::instance()->hash($temp_password);
			$registrant->password = $hash_password;
		}

		// Set the user variables
		$registrant->full_name = $form->name->val();
		$registrant->email = $form->email->val();
		$registrant->role = 'registrant';
		$registrant->registration_date = time();
		$registrant->last_activity_date = time();
		$registrant->last_ip = \Request::$client_ip;
		$registrant->business_name = $form->company->val();
		$registrant->seats = $form->seats->val();
		$registrant->participants = $form->participants->val();
		$registrant->event_id = $form->event_id->val();
		$registrant->price = \Format::clean_number($form->price->val(), true);

		// Insert the user and client records
		$registrant->save();

		//insert or update primary phone
		$personal_phone = $registrant->get_phone('primary');
		$personal_phone->number = \Format::clean_number($form->number->val());
		$personal_phone->save();

		//insert or update address
		$business_address = $registrant->get_address('business');
		$business_address->user_id = $registrant->id;
		$business_address->address1 = $form->address->address1->val();
		$business_address->address2 = $form->address->address2->val();
		$business_address->city = $form->address->city->val();
		$business_address->state_id = $form->address->state_id->val();
		$business_address->province = $form->address->province->val();
		$business_address->postal = $form->address->postal->val();
		$business_address->country_id = $form->address->country_id->val();
		$business_address->save();

		//insert note
		$note = $this->get_note();
		$note->user_id = $registrant->id;
		$note->author_id = $registrant->id;
		$note->type = 'request';
		$note->note = $form->message->val();
		$note->save();

		//decrement the seats for this event
		$event = \Kacela::find_one('event', \Kacela::criteria()->equals('id', $form->event_id->val()));
		$event->remaining_seats = $event->remaining_seats - $form->seats->val();
		$event->save();

		// Start building the email
		$header = \View::factory('email/_header')
			->set('title', 'Registration for '.$event->title);
		$footer = \View::factory('email/_footer');
		$email_content = \View::factory('email/registration')
			->set('event', $event)
			->set('registrant', $registrant);

		$message = \View::factory('email/_template')
			->bind('header', $header)
			->bind('footer', $footer)
			->bind('content', $email_content);

		// Send the email
		$bcc_address = \Helper::language() === 'en-us' ? 'leads@matrix42.com' : 'leads@matrix42.de';
		$email_from = \Helper::language() === 'en-us' ? 'info@matrix42.com' : 'info@matrix42.de';
		$subject = 'Registration for '.$event->title;
		$email = \Email::factory($subject)
			->to($registrant->email)
			->bcc($bcc_address)
			->from($email_from)
			->message($message->render(), 'text/html')
			->send();
	}

	public function get_registration_form($name = 'registration')
	{
		$address = $this->get_address();

		$form = \Formo::form($name)
			->add('event_id', 'hidden')
			->add('name', array('label' => __('Full Name')))
			->add('email', array('type' => 'email', 'label' => 'Email'))
			->add('number', array('label' => __('Phone Number')))
			->add('company', array('label' => __('Business Name')))
			->add('address', 'group', $address->get_form())
			->add('seats', array('label' => __('Number of registrants'), 'value' => '1'))
			->add('participants', 'textarea', array('label' => __('Names of additional registrants')))
			->add('message', 'textarea', array('label' => __('Message')))
			->add('estimate', array('label' => __('Your Estimated Cost').'*', 'attr' => array('class' => 'estimate', 'disabled' => 'disabled')))
			->add('price', array('driver' => 'hidden'))
			->rules('name', array(
			array('not_empty'),
			array('\Valid::full_name'),
		))
			->rules('email', array(
			array('not_empty'),
			array('email'),
		))
			->rules('number', array(
			array('not_empty'),
			array('phone', array(':value')),
		))
			->rules('seats', array(
			array('not_empty'),
			array('numeric'),
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
					array(array($this, 'create_new_registrant'), array(':field')),
				),
			),
		));

		return $form;
	}
}