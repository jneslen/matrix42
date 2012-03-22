<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Start extends Controller_Public {

	public function action_index()
	{
		$user = ORM::factory('user', 1);

		$this->_content = $user->username;
	}

	public function action_test()
	{
		exit('testing');
	}

}
