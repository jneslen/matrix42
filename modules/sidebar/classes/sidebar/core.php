<?php defined('SYSPATH') or die('No direct script access.');



class Sidebar_Core {

	protected $_views = array();

	/**
	 * support => bool that determines whether to include the support view
	 *
	 * @var mixed
	 * @access protected
	 */
	protected $_support = true;

	/**
	 * Factory method
	 *
	 * @access public
	 * @static
	 * @param mixed array $trail
	 * @return void
	 */
	public static function factory(array $views = array(), $support = true)
	{
		return new Sidebar($views, $support);
	}

	/**
	 * Create the necessary data for the creation of the sidebar
	 *
	 * @access public
	 * @param mixed array $trail
	 * @return void
	 */
	public function __construct($views = array(), $support = true)
	{
		$this->_views = $views;
		$this->_support = $support;
	}

	/**
	 * Genearet sidebar view
	 *
	 * @access public
	 */
	public function render()
	{
		if($this->_support)
		{
			$support_view = View::factory('sidebar/support', array('language' => true));
		}
		else
		{
			$support_view = false;
		}

		$view = View::factory('sidebar/sidebar')
			->set('support', $support_view)
			->bind('views', $this->_views);

		return $view->render();
	}
}