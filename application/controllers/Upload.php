<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Upload extends CI_Controller
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
        $this->load->view('baru',$data);    }
}
 
# nama file member.php
# folder apllication/controller/