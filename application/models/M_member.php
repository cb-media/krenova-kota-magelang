 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_member extends CI_Model{
    function tampil_data($id){
    	$query = $this->db->query('select * from members where id="'.$id.'"');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
		//return $this->db->get('fab_member');
	}

	function tampil_data_profil($id){
    	$query = $this->db->query('select * from members where id="'.$id.'"');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
		//return $this->db->get('fab_member');
	}

	function edit_member($id){
    	$query = $this->db->query('select * from members where id="'.$id.'"');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
		//return $this->db->get('fab_member');
	}
  }