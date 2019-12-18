<?php  
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginModel extends CI_Model{

		public function __construct()
		{
			parent::__construct();		
		}


	public function find_all_user()
	{
		$query = "select * from tbl_user where status = 1";
		$result = $this->db->query($query)->result();
		return $result;
	}
}