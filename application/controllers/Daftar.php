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
		$data['result'] = $this->MMobil->getList();
        $data['master'] = true;
        $this->load->view('master',$data);
    } 

    public function detail($id=NULL){
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        if ($submit){
            $nomor_kendaraan = $this->input->post('nomor_kendaraan');
            $nomor_mesin = $this->input->post('nomor_mesin');
            $id_merek = $this->input->post('id_merek');
            $tahun_beli = $this->input->post('tahun_beli');
            $nama_mobil = $this->input->post('nama_mobil');
            $this->form_validation->set_rules('nomor_kendaraan', 'Nomor Kendaraan', 'required');
            $this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required');
            
            if ($this->form_validation->run()==FALSE){
                $data['errors'] = TRUE;
            } else {
                if ($id){
                    $data['detail'] = $this->MMobil->detail($id);
                }
                $this->MMobil->setData($nomor_kendaraan,$nomor_mesin,$id_merek,$tahun_beli,$nama_mobil);
                if ($id){
                    $this->MMobil->edit($id);
                    $this->session->set_flashdata('success', true);
                    redirect('Master');
                } else {
                    $this->MMobil->add();
                }
                $this->session->set_flashdata('success', true);
                redirect('Master');
            }
        } else {
            if ($id){
                $data['detail'] = $this->MMobil->detail($id);
            }
        }
        $this->load->view('master-detail', $data);
    } 

    public function delete($id){  
        $this->MMobil->delete($id);
        redirect('Master');
    }

}
?>