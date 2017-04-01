<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->vars('resource',base_url('resource/'));
		$this->load->view('admin/common/header');
		$this->load->view('admin/users');
		

	}
}
