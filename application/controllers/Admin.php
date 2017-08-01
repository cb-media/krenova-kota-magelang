<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $id=$this->session->userdata("userid");
        $data['admin']=$this->M_admin->tampil_data_admin($id);
        $this->load->view('header');
        $this->load->view('admin',$data);
    }
    public function member()
    {
        $data['member']=$this->M_admin->tampil_data_member();
        $this->load->view('header');
        $this->load->view('admin_member',$data);   
    }
    public function pendaftaran()
    {
        $id=$this->session->userdata("userid");
        $data['pendaftaran']=$this->M_admin->tampil_data_pendaftaran();
        $this->load->view('header');
        $this->load->view('admin_pendaftaran',$data);   
    }
    public function administrasi()
    {
        $id=$this->session->userdata("userid");
        $data['administrasi']=$this->M_admin->tampil_data_administrasi();
        $this->load->view('header');
        $this->load->view('admin_administrasi',$data);   
    }
    public function substansi()
    {
        $id=$this->session->userdata("userid");
        $data['substansi']=$this->M_admin->tampil_data_substansi();
        $this->load->view('header');
        $this->load->view('admin_substansi',$data);   
    }
    public function pemaparan()
    {
        $id=$this->session->userdata("userid");
        $data['pemaparan']=$this->M_admin->tampil_data_pemaparan();
        $this->load->view('header');
        $this->load->view('admin_pemaparan',$data);   
    }
    public function survey()
    {
        $id=$this->session->userdata("userid");
        $data['survey']=$this->M_admin->tampil_data_survey();
        $this->load->view('header');
        $this->load->view('admin_survey',$data);   
    }

    public function hasil()
    {
        $id=$this->session->userdata("userid");
        $data['hasil']=$this->M_admin->tampil_data_survey();
        $this->load->view('header');
        $this->load->view('admin_hasil',$data);   
    }
    
}
 
# nama file member.php
# folder apllication/controller/