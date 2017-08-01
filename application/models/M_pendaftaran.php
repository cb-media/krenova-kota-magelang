 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_pendaftaran extends CI_Model{
    function tampil_data_by_id($id){
    	$id_member=$id;
    	//$query =$this->db->join('ijins i','i.username=m.userid')->where('m.userid',656)->get('members m');
    	$query =$this->db->where('username',$id_member)->get('ijins');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}
  }