<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function __construct()
		{
			parent::__construct();	
			$this->load->model('HomeModel');	
		}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/**
		Font End sction  start here -- 
	*	index page

	*/
	public function index()
	{
		$data['serviceInfo'] = $this->load->HomeModel->serviceInfo();
		$this->load->view('index', $data);
	}


	/**  
		Admin section start here --
	*	login section
	*	registration section
	*	admin dashboard
	*/

	public function login()
	{
		echo $this->load->view('admin/login');
	}
	
	public function registration()
	{
		$this->load->view('admin/register');
	}

	public function dashboard()
	{
		$this->load->view('admin/index');
	}
}
