<?php
class Register extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true){
            redirect('Login');
        } 
        $this->load->model('MUser');
        $this->load->model('MMahasiswa');
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $data['username']=$username; 
        $data['result'] = $this->MMahasiswa->getList($username);
        $this->load->view('register',$data);
    }  

}
?>