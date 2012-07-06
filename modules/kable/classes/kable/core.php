<?php

require MODPATH.'kable/vendor/Table/library/Table.php';

class Kable_Core extends Table
{
	public static function factory(array $config = array())
	{
		return new Kable($config);
	}

	public function row_attr($attr, $value)
	{
		return $this->rowAttr($attr, $value);
	}

	public function set_data_source($data, $type = 'dom')
	{
		parent::setDataSource($data, $type);

		return $this;
	}
}