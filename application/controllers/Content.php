<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}


	public function index()
	{

		$this->load->vars('resource',base_url('resource/'));
	
		$this->load->view('common/header');
	    $this->load->vars('resource',base_url('resource/'));
		$this->load->view('content');
		$this->load->view('common/footer');
	}


	public function detail()
	{

		$this->load->view('common/header');
		$this->load->vars('resource',base_url('resource/'));
		$this->load->view('detail');
		$this->load->view('common/footer');
	}
}