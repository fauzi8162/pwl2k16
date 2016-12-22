<?php 
class MUkm extends CI_Model{
	public $table = "ukm";
	function __construct(){
		parent::__construct();
	}	
	public function getList(){
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
}
?>