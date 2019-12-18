<?php  
defined('BASEPATH') OR exit('No direct script access allowed');


class ServiceModel extends CI_Model{

		public function __construct()
		{
			parent::__construct();		
		}


	public function serviceAdd()
	{
		$data = array(
			'icon' => 		 $this->input->post('icon'),
			'title' => 		 $this->input->post('title'),
			'description' => $this->input->post('description'),
		);

		$this->db->insert('tbl_service', $data);
	}
}