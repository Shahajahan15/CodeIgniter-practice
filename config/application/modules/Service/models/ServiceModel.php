<?php  
defined('BASEPATH') OR exit('No direct script access allowed');


class ServiceModel extends CI_Model{

		public function __construct()
		{
			parent::__construct();		
		}


	//  add service
	public function serviceAdd()
	{
		$data = array(
			'icon' => 		 $this->input->post('icon'),
			'title' => 		 $this->input->post('title'),
			'description' => $this->input->post('description'),
		);

		$this->db->insert('tbl_service', $data);
	}


	// select all service data
	public function serviceInfo()
	{
		$query = "SELECT * FROM `tbl_service";
		$result = $this->db->query($query)->result_array();
		return $result;
	}
}