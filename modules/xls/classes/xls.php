<?php
/**
 * @author noahg
 * @date 6/20/11
 * @url http://www.appservnetwork.com/modules.php?name=News&file=article&sid=8
 * @brief
 *
 */

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Craptasitic implementation. But it works for now.
 */
class Xls
{
	private $_labels;

	private $_values;

    private $_spreadsheet;

	public static function factory($filename, array $labels, array $values)
	{
		return new Xls($filename);
	}

	public function __construct($filename, array $labels, array $values)
	{
        $this->_spreadsheet = new \Spreadsheet();
		$this->_filename = $filename;
		$this->_values = $values;
		$this->_labels = $labels;
	}

	public function get_content()
	{
		$this->_write();
		return $this->_spreadsheet->save(array('name' => 'Leads - ' . gmdate("d M Y H:i:s")));
	}

	public function output($headers = true)
	{
		header('Pragma: ');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $this->_filename. '.xls"');
		header('Cache-Control: max-age=0');

        $this->_write();
		$var = $this->_spreadsheet->save(array('name'=>'Leads - '.gmdate("d M Y H:i:s")));

		exit($var);
	}

	private function _write()
	{
        $data = array();

		foreach($this->_labels as $label)
		{
			$data['Leads'][1][] = $label;
		}

		$row = 2;
		foreach($this->_values as $value)
		{
			$col = 0;
			foreach($value as $val)
			{
				$data['Leads'][$row][$col++] = $val;
			}

			$row++;
		}

        $this->_spreadsheet->setData( $data, 1 );
	}

}
