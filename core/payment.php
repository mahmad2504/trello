<?php
class Payments
{
	private $data;
	function __construct()
	{
		global $settings;
		if(file_exists($settings->data_folder.'/payment.serialized'))
		{
			$content  = file_get_contents($settings->data_folder.'/payment.serialized');
			$this->data = unserialize($content);
			//var_dump($this->data);
		}
	}
	function GetData()
	{
		return $this->data;
	}
}