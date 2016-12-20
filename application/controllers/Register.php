<?php
class Register extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true){
            redirect('Login');
        } 
    }

    public function index()
    {
        $this->load->view('register');
    }  
}
?>