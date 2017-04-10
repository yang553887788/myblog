<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Admodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function adlist(){
		$res = $this->load->get('my_admin');
		$list = $res->result_array();
		return $list;
	}
}