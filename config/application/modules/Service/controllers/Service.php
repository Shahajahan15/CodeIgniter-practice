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


	// service added to admin here 
	public function serviceAdd()
	{
		if ( isset($_POST['submit']) == 'Submit' ) {
			$this->ServiceModel->serviceAdd();
			$this->session->set_flashdata('message', 'Successfully data inserted.');
			redirect(base_url().'service/service/index');
		}else{
			$this->session->set_flashdata('err_msg', 'Data not inserted, Try again!');
			redirect(base_url().'service/service/index');
		}	
	}


	// service view to admin here 
	public function viewService()
	{
		$data['serviceInfo'] = $this->load->ServiceModel->serviceInfo();
		$this->load->view('serviceView', $data);
	}

	// service delete to admin here
	public function deleteService()
	{
		$data_id = $this->input->post('data_value');
		$this->db->where('id', $data_id);
		$this->db->delete('tbl_service');
		$this->session->set_flashdata('delete', 'Successfully data deleted.');
		redirect(base_url().'service/service/viewService');

	}



}

?>
