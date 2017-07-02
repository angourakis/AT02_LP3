<?php
include APPPATH.'libraries/GPGSLibrary.php';

class GPGSModel extends CI_Model {
	private $gpgs;
	
	function __construct() {
		parent::__construct();
		$this->gpgs = new GPGSLibrary();
	}
	
	/**
	 * Lista os dados do bd em uma tabela
	 */
	function lista() {
		$v = $this->gpgs->getAll();
		
		$html = '<table class="table">';
		
		$html .= '<tr>';
		$html .= '<th>Player ID</th>';
		$html .= '<th>Consistency Token</th>';
		$html .= '<th>Language</th>';
		$html .= '<th>Maximum Results</th>';
		$html .= '<th>Page Token</th>';
		$html .= '<th>Alt</th>';
		$html .= '<th>Fields</th>';
		$html .= '<th>Key</th>';
		$html .= '<th>Oauth Token</th>';
		$html .= '<th>Pretty Print</th>';
		$html .= '<th>Quota User</th>';
		$html .= '<th>User IP Address</th>';
		$html .= '<th></th>';
		$html .= '</tr>';
		
		foreach ($v as $gpgs){
			$html .= '<tr>';
			$html .= '<td>'.$gpgs->playerID.'</td>';
			$html .= '<td>'.$gpgs->consistencyToken.'</td>';
			$html .= '<td>'.$gpgs->language.'</td>';
			$html .= '<td>'.$gpgs->maxResults.'</td>';
			$html .= '<td>'.$gpgs->pageToken.'</td>';
			$html .= '<td>'.$gpgs->alt.'</td>';
			$html .= '<td>'.$gpgs->fields.'</td>';
			$html .= '<td>'.$gpgs->apiKey.'</td>';
			$html .= '<td>'.$gpgs->oauth_token.'</td>';
			$html .= '<td>'.$gpgs->prettyPrint.'</td>';
			$html .= '<td>'.$gpgs->quotaUser.'</td>';
			$html .= '<td>'.$gpgs->userIp.'</td>';
			$html .= '</tr>';
		}
		$html .= '</table>';
		return $html;
	}
}
	
	