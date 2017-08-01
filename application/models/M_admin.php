 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_admin extends CI_Model{
    function tampil_data_admin($id){
    	$id_admin=$id;
    	//$query =$this->db->join('ijins i','i.username=m.userid')->get('members m');
    	$query =$this->db->where('username',$id_admin)->get('members');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}

	function tampil_data_member(){
    	return $this->db->get('members')->result();
	}

	function tampil_data_pendaftaran(){
    	$query =$this->db->join('ijins i','i.username=m.userid')->get('members m');
    	//$query =$this->db->where('username',$id_admin)->get('members');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}

	function tampil_data_administrasi(){
    	$query =$this->db->join('ijins i','i.username=m.userid')->get('members m');
    	//$query =$this->db->where('username',$id_admin)->get('members');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}

	function tampil_data_substansi(){
    	$query =$this->db->join('ijins i','i.username=m.userid')->get('members m');
    	//$query =$this->db->where('username',$id_admin)->get('members');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}

	function tampil_data_pemaparan(){
    	$query =$this->db->join('ijins i','i.username=m.userid')->get('members m');
    	//$query =$this->db->where('username',$id_admin)->get('members');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}

	function tampil_data_survey(){
    	$query =$this->db->join('ijins i','i.username=m.userid')->get('members m');
    	//$query =$this->db->where('username',$id_admin)->get('members');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}

	function tampil_data_hasil(){
    	$query =$this->db->join('ijins i','i.username=m.userid')->get('members m');
    	//$query =$this->db->where('username',$id_admin)->get('members');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}

  }