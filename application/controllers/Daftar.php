<?php
class Daftar extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true){
            redirect('Login');
        } 
        $this->load->model('MDaftar');
    }

    public function index()
    {
		$data['result'] = $this->MDaftar->getList();
        $this->load->view('detail',$data);
    } 

    public function input(){
        $submit = $this->input->post('submit');
         if ($submit){
            $id = null;
            $nim     = $this->input->post('nim');
            $id_ukm  = $this->input->post('id_ukm');
            $id_ukm2 = $this->input->post('$id_ukm2');
            $id_ukm3 = $this->input->post('$id_ukm3');
            $alasan1 = $this->input->post('alasan1');
            $alasan2 = $this->input->post('alasan2');
            $alasan3 = $this->input->post('alasan3');            
        $this->MDaftar->setData($id, $nim, $id_ukm, $id_ukm2, $id_ukm3, $alasan1, $alasan2, $alasan3);
        $this->MDaftar->add();
        $this->load->view('register', $data);
    }
  }

    public function delete($id){  
        $this->MMobil->delete($id);
        redirect('');
    }

}
?>