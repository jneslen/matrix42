<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Index extends Controller_Public {

	public function action_index()
	{
		$this->_content = '<div class="row border" style="margin-top: 70px;"><div class="span12">Test</div></div>';
	}

}