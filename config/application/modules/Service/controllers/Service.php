<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

			public function __construct()
		{
			parent::__construct();	
			$this->load->model('ServiceModel');	
		}

	public function index()
	{
		$this->load->view('services');
	}

	public function serviceAdd()
	{
		// $this->load->model('ServiceModel');	
		$this->ServiceModel->serviceAdd();
	}

}

?>
