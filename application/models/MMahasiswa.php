<?php 
class MMahasiswa extends CI_Model{
	public $table = "mahasiswa";
	function __construct(){
		parent::__construct();
	}	

	public function getList($nim){
		//$query = $this->db->get($this->table);
		//return $query->result();
		//$query = $this->db->get_where($this->table,"$nim");	
		$query = $this->db->get_where($this->table, array('nim' => $nim));	
				if($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}		
	}
	
}
?>