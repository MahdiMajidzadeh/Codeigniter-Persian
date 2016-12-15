<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persian
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function numbers($numbers)
	{
		$numbers = $this->numbers_ar($numbers);
		$numbers = $this->numbers_en($numbers);

		return $numbers;
	}

	public function numbers_ar($numbers)
	{
		$find    = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
		$replace = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

		return (string) str_replace($find,$replace,$numbers);
	}

	public function numbers_en($numbers)
	{
		$find    = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
		$replace = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

		return (string) str_replace($find,$replace,$numbers);
	}

}

/* End of file Persian.php */
/* Location: .//C/xampp/htdocs/Codeigniter-Persian/Persian.php */
