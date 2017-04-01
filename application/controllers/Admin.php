<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}

	//后台主页
	public function index()
	{
		$this->load->vars('resource',base_url('resource/'));
		$this->load->view('admin/common/header');
		$this->load->view('admin/index');
		
	}

	
}
