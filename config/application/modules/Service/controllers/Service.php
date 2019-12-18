<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function index()
	{
		$this->load->view('services');
	}

	public function serviceAdd()
	{
		// echo "string";
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

}
