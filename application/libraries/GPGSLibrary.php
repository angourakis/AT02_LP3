<?php
class GPGSLibrary {
	private $ci;
	private $db;
	
	function __construct() {
		$this->ci = & get_instance();
		$this->db = $this->ci->db;
	}
	
	/**
	 * Obtem dados do bd
	 */
	function getAll() {	
		$rs = $this->db->get('gpgs');
		return $rs->result();
	}
	
	/**
	 * Insere dados do Google Play Game Services no bd
	 */
	function write($data){
		return $this->db->insert('gpgs', $data);
	}
	
	
	
}
