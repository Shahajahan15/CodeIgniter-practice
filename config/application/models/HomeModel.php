<?php  
defined('BASEPATH') OR exit('No direct script access allowed');


class HomeModel extends CI_Model{

		public function __construct()
		{
			parent::__construct();		
		}


	public function serviceInfo()
	{
		$query = "SELECT * FROM `tbl_service";
		$result = $this->db->query($query)->result_array();
		return $result;
	}
}