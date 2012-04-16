<?php defined('SYSPATH') or die('No direct script access.');



class Breadcrumb_Core {

	/**
	 * Title => href pairs representing breadcrumb chain
	 *
	 * @var mixed
	 * @access protected
	 */
	protected $_trail;

	protected $_page_title;

	/**
	 * Factory method
	 *
	 * @access public
	 * @static
	 * @param mixed array $trail
	 * @return void
	 */
	public static function factory(array $trail, $page_title = null)
	{
		return new Breadcrumb($trail, $page_title);
	}

	/**
	 * Make the breadcrumb trail. Also generate a back link
	 *
	 * @access public
	 * @param mixed array $trail
	 * @return void
	 */
	public function __construct(array $trail, $page_title)
	{
		$this->_trail = $trail;
		$this->_page_title = $page_title;
	}

	/**
	 * Genearet breadcrumb code
	 *
	 * @access public
	 */
	public function render()
	{
		$view = View::factory('breadcrumb/trail')
			->set('i', 0)
			->bind('links', $this->_trail)
			->bind('page_title', $this->_page_title);

		return $view->render();
	}
}