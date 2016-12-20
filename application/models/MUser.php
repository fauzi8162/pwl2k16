<?php
class MUser extends CI_Model {
	public $table = "mahasiswa";
	public function __construct()
	{
		parent::__construct();
	}
	public function CheckUser($username, $password)
	{
		$query = $this->db->get_where($this->table, array('nim'=>$username, 'password'=>$password));
		if ($query->num_rows() > 0)
		{
			return true;
		} 
		else
		{
			return false;
		} 

	}
}
?>