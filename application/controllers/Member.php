<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_member');
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $id=$this->session->userdata("id");
        $data['member']=$this->M_member->tampil_data($id);
        $this->load->view('header_user');
        $this->load->view('member',$data);
    }

    public function member_detail()
    {
        $id=$this->session->userdata("id");
        $data['member_detail']=$this->M_member->tampil_data_profil($id);
        $this->load->view('header_user');
        $this->load->view('member_detail',$data);
    }

    public function edit_member()
    {
        $id=$this->session->userdata("id");
        $data['member_edit']=$this->M_member->edit_member($id);
        $this->load->view('header_user');
        $this->load->view('edit_member',$data);
    }
}
 
# nama file member.php
# folder apllication/controller/