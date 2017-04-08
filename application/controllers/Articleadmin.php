<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articleadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}

	//文章分类
	public function index()
	{
		$this->load->vars('resource',base_url('resource/'));
		$this->load->view('admin/common/header');
		$this->load->view('admin/index');
		
	}


	//文章管理
	public function detail()
	{
		$this->load->view('');
	}

	//文章评论

	public function contents()
	{
		$this->load->view('');
	}

	
}
