<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Sistema extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sistema_model','SM',TRUE);
	}
	
	public function index()
	{
		$this->load->view('sistema_view');
		$this->load->view('url_include');
		$this->load->view('url_jquery');
	}
}

?>