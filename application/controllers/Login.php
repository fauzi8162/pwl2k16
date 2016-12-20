<?php
class Login extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
            $this->load->model('MUser');
    }

    public function index()
    {
    	if ($this->session->userdata('logged') == true){
    		redirect('register');
    	} else {
    		$this->load->view('login');
    	}
    }

    public function validasi()
    {
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('username', 'Username', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
    	if ($this->form_validation->run() == true){
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		if ($this->MUser->CheckUser($username,$password) == true){
    			$data = array('username'=>$username, 'logged'=>true);
    			$this->session->set_userdata($data);
    			redirect('register');
    		} else {
    			$this->session->set_flashdata('pesan', 'Username atau Password Anda salah');
    			redirect('Login');
    		}
    	} else {
    		$this->load->view('login');
    	}
    }

    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('Login', 'referesh');
    }
}
?>