<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adlogin extends CI_Controller {

	public function __construct()
	{
		@session_start();
		parent::__construct();


	}

	//登陆页面
	public function login()
	{

		$this->load->helper('url');
		$this->load->vars('resource',base_url('resource/'));
		$this->load->view('admin/common/header');
		$this->load->view('admin/type');
		
	}

    //登陆提交
	public function checkuser()
	{

	}
	

	//退出登录
	public function logout()
	{
		$this->load->helper('url');
	    session_destroy();
		$this->load->view('login');
		
	}
}
