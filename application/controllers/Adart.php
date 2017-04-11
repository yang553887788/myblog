<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		

	}

	//文章管理
	public function index()
	{
		
		$this->load->vars('resource',base_url('resource/'));
		$this->load->view('admin/common/header');
		$this->load->view('admin/art');
		
	}


	//评论管理
	public function pl()
	{
		
		$this->load->vars('resource',base_url('resource/'));
		$this->load->view('admin/common/header');
		$this->load->view('admin/pl');

	}

	
}
