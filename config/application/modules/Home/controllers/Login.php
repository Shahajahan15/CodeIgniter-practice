<?php  
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();	
			$this->load->model('LoginModel');	
		}

	public function index()
	{
		$this->load->view('admin/login');
	}


	public function login_check()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$all_user = $this->LoginModel->find_all_user();

		foreach ($all_user as $key => $value) 
		{
			if (($value->email == $email) && ($value->password == $password)) 
			{
				redirect(base_url()."welcome/dashboard");
			}
			else
			{
				$this->session->set_flashdata('err_msg', 'Oops! Login Failed, Please try again.');
				redirect("Home/login/index");
			}
		}
	}
	
}

?>