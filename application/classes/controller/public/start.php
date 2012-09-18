<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Start extends Controller_Public {

	public function action_index()
	{
		$user = ORM::factory('user', 1);

		$this->_content = $user->username;
	}

	public function action_test_email()
	{
		$lead = \Kacela::find_one('lead', \Kacela::criteria()->equals('leads.id', '13'));

		$header = \View::factory('email/_header')
			->set('title', 'Test Send');
		$footer = \View::factory('email/_footer');
		$email_content = \View::factory('email/new_lead')
			->set('lead', $lead);

		$message = \View::factory('email/_template')
			->bind('header', $header)
			->bind('footer', $footer)
			->bind('content', $email_content);

		// Send the email
		$email = \Email::factory('Test Email')
			->to('jeff.neslen@matrix42.com')
			->from('info@matrix42.com')
			->message($message->render(), 'text/html')
			->send();
	}

}
