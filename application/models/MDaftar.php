<?php 
class MDaftar extends CI_Model{
	public $table = "pendaftaran";
	function __construct(){
		parent::__construct();
	}
	
	public function setData($id, $nim, $id_ukm, $id_ukm2, $id_ukm3, $alasan1, $alasan2, $alasan3){
		$this->id      = $id;
		$this->nim     = $nim;
		$this->id_ukm  = $id_ukm;
		$this->id_ukm2 = $id_ukm2;
		$this->id_ukm3 = $id_ukm3;
		$this->alasan1 = $alasan1;
		$this->alasan2 = $alasan2;
		$this->alasan3 = $alasan3;
	}

	public function add(){
		$arrayData = array(
		'id'      => $this->id,
		'nim'     => $this->nim,     
		'id_ukm'  => $this->id_ukm , 
		'id_ukm2' => $this->id_ukm2,
		'id_ukm3' => $this->id_ukm3,
		'alasan1' => $this->alasan1,
		'alasan2' => $this->alasan2,
		'alasan3' => $this->alasan3,
		);
		return $this->db->insert($this->table, $arrayData); 
	}
/*
	public function edit($id){
		$arrayData = array(
			'nomor_kendaraan'=>$this->nomor_kendaraan,
			'nomor_mesin'=>$this->nomor_mesin,
			'id_merek'=>$this->id_merek,
			'tahun_beli'=>$this->tahun_beli,
			'nama_mobil'=>$this->nama_mobil,
		);
		$this->db->where('nomor_mesin', $id);
		return $this->db->update($this->table, $arrayData); 
	}	
*/
	public function getList(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function delete($id){
		return $this->db->delete($this->table, array('nomor_mesin'=>$id));
	}
/*
	function detail($id){
		$condition = array("nomor_mesin"=>$id);
		$query = $this->db->get_where($this->table,$condition);	
		if($query->num_rows() > 0){
			return $query->row();
		} else {
			return false;
		}
	}	
	
	public function getTotal(){
		return $this->db->count_all_results($this->tnews);
	}

	function findByNoKend($nomor_kendaraan){
		$condition = array("nomor_kendaraan"=>$nomor_kendaraan);
		$query = $this->db->get_where($this->table,$condition);	
		if($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}		
	}
*/
}
?>