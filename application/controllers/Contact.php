<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$this->load->helper('url');
		$this->load->vars('resource',base_url('resource/'));
	
		$this->load->view('common/header');
	    $this->load->vars('resource',base_url('resource/'));
		$this->load->view('single');
		$this->load->view('common/footer');
	}
}
