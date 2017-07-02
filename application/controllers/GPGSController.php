<?php
class GPGSController extends MY_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('GPGSModel', 'model');
	}
	
	/**
	 * Exibe uma lista dos dados da API Google Play Game Services
	 */
	function index() {
		$data['table'] = $this->model->lista();
		$html = $this->load->view('gpgs_view', $data, true);
		$this->show($html);
	}
	
	
	/**
	 * Exibe um form para inserção de dados do Google Play Game Services
	 */
	function create() {
		if(sizeof($_POST) > 0){
			if($this->model->insert_gpgs()){
				redirect('/gpgs');
			}
			$data['action'] = 'create';	
			$html = $this->load->view('insert_gpgs', $data, true);
			$this->show($html);
		}
	}

}