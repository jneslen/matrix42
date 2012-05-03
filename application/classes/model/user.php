<?php

namespace Darth\Model;

class User extends Model {

	static $temp_password_expiration = '+3 days';

	protected $_addresses = array();

	protected $_phones = array();

	public function authenticate($values)
	{
		$bonafide = \Bonafide::instance();

		$email = \Arr::get($values, 'email');
		$password = \Arr::get($values, 'password');

		// First try to retrieve a user with this email
		$user = \Kacela::find('user', $email);

		if ( ! $user->id)
		{
			// No user exists with this email
			return false;
		}

		// Check if a temp password is set and not expired
		if ($user->temp_password AND $user->temp_password_date >= time() AND $password == $user->temp_password)
		{
			// Set up to reset password
			$session = \Session::instance();
			$session->set('temp_password_redirect', true);
		}

		$prefix = (substr($user->password, 0, 6) == 'bcrypt')
			? null
			: 'legacy';

		if ($bonafide->check($password, $prefix.$user->password))
		{
			// Set up the email and password
			$this->id = $user->id;
			$this->email = $email;
			$this->password = $password;

			// The password was also correct
			return true;
		}

		return false;
	}

	public function create_new_lead($form)
	{
		exit(\Debug::vars($form));
		// Get a new user model
		$lead = new \Darth\Model\Lead;

		// Generate the temp password
		$temp_password = \Text::random();
		$hash_password = \Bonafide::instance()->hash($temp_password);

		// Set the user variables
		$lead->full_name = $form->name->val();
		$lead->email = $form->email->val();
		$lead->role = 'lead';
		$lead->password = $hash_password;
		$lead->last_login = time();

		// Insert the user and client records
		$saved = $lead->save();

		$personal_phone = $this->get_phone('primary');
		$personal_phone->number = \Format::clean_number($form->phone->val());
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

	public function end_hijack()
	{
		if ($user_id = $this->is_hijacked(true))
		{
			$session = \Session::instance();
			$session->set('user_id', $user_id);
			$session->delete('hijacker_id');
		}
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

	public function get_login_form()
	{
		$form = \Formo::form('log_in')
			->add('email')
			->add('password', 'password')
			->rule('email', 'not_empty')
			->rule('password', 'not_empty')
			->rule('log_in', array($this, 'authenticate'), array(':value'))
			->callbacks(array(
			'pass' => array
			(
				':self' => array
				(
					array(array($this, 'login'), array($this))
				),
			),
		));

		return $form;
	}

	public function get_address($type = 'business')
	{
		foreach($this->addresses as $address)
		{
			if($address->type == $type)
			{
				return $address;
			}
		}

		if(isset($this->_addresses[$type]))
		{
			return $this->_addresses[$type];
		}

		$this->_addresses[$type] = new \Darth\Model\Address;

		$this->_addresses[$type] ->user_id = $this->id;
		$this->_addresses[$type] ->type = $type;

		return $this->_addresses[$type];
	}

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->password->set('driver', 'password');
		$form->role->set('driver', 'hidden');


		$form->user_notes->set('driver', 'textarea');

		$form->add('full_name', array('value' => $this->full_name, 'label' => 'Full Name'));

		$form->remove
		(
			array
			(
				'first',
				'last',
				'initial',
				'temp_password_date',
				'last_activity_date',
				'logins',
				'last_login',
				'token',
				'last_ip',
				'password',
				'temp_password',
				'user_notes',
				'registration_date',
				'disabled',
				'email_confirmed'
			)
		);

		return $form;
	}

	public function get_password_form($change = false)
	{
		$form = \Formo::form('password')
			->add('new', 'password', array('label' => 'New password'))
			->rules('new', array(
			array('not_empty'),
			array('min_length', array(':value', 5))
		));

		if ($change === true)
		{
			$form
				->add('confirm', 'password', array('label' => 'Confirm new password'))
				->rules('confirm', array(
				array('matches', array(':validation', 'confirm', 'new'))
			))
				->callbacks(array(
				'pass' => array
				(
					'new' => array
					(
						array(array($this, 'set_password'), array(':value')),
					),
				),
			));
		}

		return $form;
	}

	public function get_phone($type = 'primary')
	{
		foreach($this->_phones as $phone)
		{
			if($type == $phone->type)
			{
				return $phone;
			}
		}

		if(isset($this->_phones[$type]))
		{
			return $this->_phones[$type];
		}

		$this->_phones[$type] = new \Darth\Model\Phone;

		$this->_phones[$type] ->user_id = $this->id;
		$this->_phones[$type] ->type = $type;

		return $this->_phones[$type];
	}

	public function get_reset_password_form()
	{
		$form = \Formo::form('reset_password')
			->add('email')
			->rules('email', array(
			array('not_empty'),
			array('email'),
			array('\Valid::email_exists'),
		))
			->callbacks(array(
			'pass' => array
			(
				'email' => array
				(
					array(array($this, 'reset_password'), array(':value'))
				),
			),
		));

		return $form;
	}


	public function is_hijacked($return_id = false)
	{
		$hijacker_id = \Session::instance()->get('hijacker_id');

		return ($return_id === true)
			? $hijacker_id
			: (bool) $hijacker_id;
	}

	public function login()
	{
		\Session::instance()->set('user_id', $this->id);
	}

	public function logout()
	{
		$session = \Session::instance();

		$session->delete('user_id');
		$this->end_hijack();
	}

	public function reset_password($email)
	{
		// Generate a random string
		$temp_password = \Text::random();

		// Save the temp password
		$user = \Kacela::find('user', $email);
		$user->temp_password = $temp_password;
		$user->save();

		// Create the email
		/*TODO: need to set up email system
		$message = \View::factory('email/_template')
			->bind('header', $header)
			->bind('footer', $footer)
			->bind('content', $email_content);

		$header = \View::factory('email/_header')
			->set('title', 'Your Lendio password has been reset');

		$footer = \View::factory('email/_footer');

		$email_content = \View::factory('email/reset_password')
			->bind('email', $email)
			->bind('tmp', $temp_password);

		// Send the email
		$email = \Email::factory('Your Lendio password has been reset')
			->to('benmidget@gmail.com')
			->from('members@lendio.com')
			->message($message->render(), 'text/html')
			->send();
		*/
	}

	public function save($data = null)
	{
		if($this->registration_date == null)
		{
			$this->registration_date = time();
		}

		if($this->temp_password != null AND $this->temp_password_date != null)
		{
			// set the expiration of temp password
			$this->temp_password_date = strtotime(self::$temp_password_expiration);
		}

		return parent::save($data);
	}

	public function set_password($password)
	{
		$bonafide = \Bonafide::instance();
		$this->password = $bonafide->hash($password);
		$this->save();
	}

	protected function _get_full_name()
	{
		return $this->first.' '.$this->last;
	}

	protected function _set_full_name($val)
	{
		$names = explode(' ', $val);

		array_walk($names, 'trim');

		$this->first = current($names);

		$this->last = end($names);
	}
}
