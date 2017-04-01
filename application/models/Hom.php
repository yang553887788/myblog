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
		$sql = 'SELECT*FROM my_category';
		$res = $this->db->query($sql);
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
		$sql = 'SELECT * FROM my_content';
		$res = $this->db->query($sql);
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
