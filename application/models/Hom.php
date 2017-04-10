<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Hom extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		# code...
	}

	public function homlist(){

		$res = $this->db->get('my_category');
		$array = array();
		if ($res->num_rows() > 0) {
			foreach ($res->result_array() as $row) {
				$array[] = $row['cate_name'];
				# code...
			}
			# code...
		}

		return $array;
	}


	public function artlist()
	{

		$res = $this->db->get('my_content');
		$array = array();
		if ($res->num_rows() > 0) {
			foreach ($res->result_array() as $row) {
				array_push($array,$row);
				# code...
			}

		}
		return $array;
	}
}
