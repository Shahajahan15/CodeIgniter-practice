<?php  
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();		
		}


	public function hello()
	{
		echo "hello module";
	}

	public function abc()
	{
		$this->load->view('abc');
	}
}

?>