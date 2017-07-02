<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends MY_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$html = '';
		$this->show($html);
		$this->load->view('principal_view', 'view');
		$this->load->view('apiexample_view', 'view');
	}
}
