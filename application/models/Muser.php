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

	public function checkuser()
	{
		
	}
}
