<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pendaftaran');
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $id=$this->session->userdata("userid");
        $data['pendaftaran']=$this->M_pendaftaran->tampil_data_by_id($id);
        $this->load->view('header');
        $this->load->view('pendaftaran',$data);
    }
    public function baru()
    {
        $id=$this->session->userdata("userid");
        $data['pendaftaran']=$this->M_pendaftaran->tampil_data_by_id($id);
        $this->load->view('header');
        $this->load->view('baru',$data);   
    }

    public function aksi_upload()
    {
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|rar|docx|doc';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('v_upload_sukses', $data);
        }
    }
}
 
# nama file member.php
# folder apllication/controller/