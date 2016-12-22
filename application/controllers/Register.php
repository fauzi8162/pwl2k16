<?php
class Register extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true){
            redirect('Login');
        } else{
        $this->load->model('MUser');
        $this->load->model('MMahasiswa');
        $this->load->model('MUkm');
    }
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $data['username']=$username; 
        $data1['mhs'] = $this->MMahasiswa->getList($username);
        $data2['orma'] = $this->MUkm->getList();
        $this->load->view('register',array_merge($data,$data1,$data2));
    }  

}
?>