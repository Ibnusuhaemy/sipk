<?php
class Content_pengajar extends CI_Model{ 
		
		public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		}	
	
		
		public function jadwal($guru){
		$sql = $this->db->query("select * from jadwal where pengajar='".$guru."'");	
		$data = $sql->result_array();	
		return $data;	
		}
		
		public function nilai($guru){
		$sql = $this->db->query("select * from jadwal where pengajar='".$guru."'");	
		$data = $sql->result_array();	
		return $data;	
		}
		
		public function edit_data_nilai($id){
		$sql = $this->db->query("select * from jadwal where id_jadwal='".$id."'");	
		$data = $sql->result_array();	
		return $data;	
		}
		
		public function proses_edit_nilai(){
		$id = $this->input->post('id_jadwal');
		$nilai = $this->input->post('nilai');	
		$data= array(
		'id_jadwal'=>$id,
		'nilai'=>$nilai
		);
		$this->db->where('id_jadwal',$id);
		$this->db->update("jadwal",$data);
		}
}		
?>