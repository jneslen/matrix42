<?php defined('SYSPATH') or die('No direct script access.');



class Boldchat_Core {

	protected $_chat;
	protected $_chat_url;
	protected $_chat_id;
	protected $_bid;
	protected $_chat_vars = array();
	protected $_view = 'chat';

	public static function factory(array $config = array())
	{
		return new Boldchat($config);
	}

	public function __construct(array $config = array())
	{
		$configuration = \Kohana::$config->load('boldchat')->as_array();

		$this->_chat_url = $configuration['chat_url'];
		$this->_chat_id = $configuration['chat_id'];
		$this->_bid = $configuration['bid'];

		foreach($config as $k => $v) {
			switch($k) {
				case 'chat_url':
					$this->_chat_url = $v;
					break;
				case 'chat_id':
					$this->_chat_id = $v;
					break;
				case 'bid':
					$this->_bid = $v;
					break;
				case 'view':
					$this->_view = $v;
					break;
				case 'vars':
					foreach($v as $key => $val)
					{
						$this->set_var($key, $val);
					}
					break;
			}
		}
		return $this->render();
	}

	public function render()
	{
		foreach($this->_chat_vars as $k => $v)
		{
			$this->_chat_url .= '&amp;'.$k.'='.$v;
		}

		return \View::factory($this->_view)
			->set('url', $this->_chat_url)
			->set('id', $this->_chat_id)
			->set('bid', $this->_bid)
			->render();
	}

	public function set_var($var, $value)
	{
		$this->_chat_vars[$var] = $value;
		return $this;
	}
}