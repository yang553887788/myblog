<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('hom');

	}


	public function index()
	{
		$this->load->helper('url');
		$this->load->vars('resource',base_url('resource/'));
		$this->hom->artlist();
		$this->load->view('common/header');
	    $this->load->vars('resource',base_url('resource/'));
		$this->load->view('home');
		$this->load->view('common/footer');
	}
}
