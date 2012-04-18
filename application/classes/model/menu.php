<?php

class Model_Menu extends ORM
{
	protected  $_belongs_to = array
	(
		'parent' => array
		(
			'model' => 'menu',
			'foreign_key' => 'id',
		)
	);

	protected $has_many = array
	(
		'subcategories' => array
		(
			'model' => 'menu',
			'foreign_key' => 'parent_id',
		)
	);

}