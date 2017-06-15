<?php
class Content_admin extends CI_Model{ 

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}
		
		public function ambil_data_profile($id){
			$sql = $this->db->query("select * from profil where id_profile=".$id."");
			$data = $sql->result_array();
			return $data;
		}
		
		public function ubah_profile($id){
            
            $id = $this->input->post('id_profile');
            $isi = $this->input->post('isi');
            $nama_file = $_FILES['foto']['name'];
            $lokasi_file = $_FILES['foto']['tmp_name'];
            $dir = "\img\\";
            
            if(!empty($lokasi_file)){
                move_uploaded_file($lokasi_file,FCPATH.$dir.$nama_file);
                $data = array(
                'id_profile'=>$id,
                'isi'=>$isi,
                'foto'=>$nama_file
                );
            }else{
                $data = array(
                'id_profile'=>$id,
                'isi'=>$isi
                );
            }
            
            $this->db->where('id_profile', $id);
            $this->db->update("profil",$data);
	
		}
		
		public function update_layanan($id){
		
		$sql = $this->db->query("select * from layanan where id_layanan=".$id."");
		$data = $sql->result_array();	
		return $data;	
		}
		
		public function proses_update_layanan($id){
			
		$id = $this->input->post('id_layanan');	
		$isi = $this->input->post('isi');	
		$data = array(
		'id_layanan'=>$id,
		'isi'=>$isi
		);
		$this->db->where('id_layanan',$id);	
		$this->db->update("layanan",$data);	
		}
		
		public function update_about($id){
		
		$sql = $this->db->query("select * from about where id_about=".$id."");
		$data = $sql->result_array();	
		return $data;	
		}
		
		public function proses_update_about($id){
		$id = $this->input->post('id_about');
		$isi = $this->input->post('isi');	
		$data = array(
		'id_about'=>$id,
		'isi'=>$isi
		);	
		$this->db->where('id_about',$id);
		$this->db->update("about",$data);
			
		}
		
		public function data_user(){
			$sql = $this->db->query("select * from user order by id_user DESC");
			$data = $sql->result_array();
			return $data;
			
		}
		
		public function edit_data_user($id){
		$sql = $this->db->query("select * from user where id_user=".$id."");	
		$data = $sql->result_array();
		return $data;		
		}
			
		public function edit_data_users(){
		$id = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		if(!empty($password)){
		$pass = md5($this->input->post('password'));	
		$data = array(
		'id_user'=>$id,
		'username'=>$username,
		'password'=> $pass,
		'status'=>$status
		);	
		}else{
		 $data = array( 
		'id_user'=>$id,
		'username'=>$username,
		'status'=>$status
		);
		}
		$this->db->where('id_user',$id);
		$this->db->update("user",$data);
		}	
		
		public function tambah_data_users(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$status = $this->input->post('status');	
		$data = array(
		'username'=>$username,
		'password'=>$password,	
		'status'=>$status
		);
		$this->db->insert("user",$data);
		}
		
		public function hapus_data_user($id){
		$this->db->where('id_user',$id);	
		$this->db->delete("user");	
		}
		
		public function data_pelamar(){
		$sql = $this->db->query("select * from pendaftaran");	
		$data = $sql->result_array();
		return $data;
			
		}
		
		public function notiv(){
		$sql = $this->db->query("select * from pendaftaran where status_pelamar='N'");	
		$data = $sql->num_rows();
		return $data;
			
		}
		
		public function validasi_pelamar($id){
            $status = "Y";
            
            $data = array(
                'status_pelamar'=> $status
            );
            
            $this->db->where('id', $id);

            $entri = $this->db->update("pendaftaran", $data);

            if($entri){
                
                $query = $this->db->query("select * from pendaftaran where id='".$id."' ");
                $dt = $query->result_array();
                $jumlah = count($dt);

                for($i=0;$i<$jumlah;$i++){
                    
                    // $nama[$i] = explode(" ",$dt[$i]['nama']);
                    // $nm[$i] = strtolower($nama[$i][0]);
                    
                    $data= array(
                        'username'=>$dt[$i]['nama'],
                        'password'=>md5(12345),
                        'status'=>'siswa'
                    );
                    
                    $this->db->insert('user',$data);
                    
                }
            }
		
		}
		
		public function data_pembayaran(){
			$sql = $this->db->query("select * from pembayaran");
			$data = $sql->result_array();
			return $data;
		}
		
		public function data_jadwal(){
		$sql = $this->db->query("SELECT * FROM jadwal
                                INNER JOIN kursus
                                ON kursus.kelas_alias = jadwal.kelas
                                INNER JOIN program
                                ON program.program_alias = jadwal.program
                                INNER JOIN user
                                ON jadwal.pengajar = user.id_user");	
		$data = $sql->result_array();
		return $data;			
		}
		
		public function proses_tambah_jadwal(){
			
            $pengajar = $this->input->post('pengajar');
            $siswa = $this->input->post('siswa');			
            $kelas = $this->input->post('kelas');	
            $program = $this->input->post('program');	
            $nilai = $this->input->post('nilai');	
            $data = array(
                'pengajar'=>$pengajar,
                'siswa'=>$siswa,
                'kelas'=>$kelas,
                'program'=>$program,
                'nilai'=>$nilai
            );

            $this->db->insert("jadwal",$data);
            
		}
		
		public function hapus_data_jadwal($id){
			$this->db->where('id_jadwal',$id);
			$this->db->delete("jadwal");
		}
		
		public function pilih_pengajar(){
		$sql = $this->db->query("select * from user where status='pengajar'");	
		$data = $sql->result_array();
		return $data;	
		}
		
		public function pilih_siswa(){
            $sql = $this->db->query("select * from user where status='siswa'");	
            $data = $sql->result_array();
            return $data;	
		}
		
		public function edit_data_jadwal($id){
            $sql = $this->db->query("select * from jadwal where id_jadwal=".$id."");	
            $data = $sql->result_array();
            return $data;		
		}
		
		public function proses_edit_jadwal(){
            $id             = $this->input->post('id_jadwal');
            $pengajar       = $this->input->post('pengajar');	
            $siswa          = $this->input->post('siswa');	
            $tempat         = $this->input->post('kelas');	
            $kelas          = $this->input->post('program');
            $nilai          = $this->input->post('nilai');
            
            if(empty($tgl_mulai) or empty($tgl_selesai)){
                $data = array(
                    'pengajar'  => $pengajar,
                    'siswa'     => $siswa,
                    'kelas'     => $tempat,	
                    'program'   => $kelas,
                    'nilai'     => $nilai
                );	
            }else{
                $data = array(
                    'pengajar'      => $pengajar,
                    'siswa'         => $siswa,
                    'kelas'         => $tempat,
                    'program'       => $kelas,
                    'nilai'         => $nilai
                );
            }
            
            $this->db->where('id_jadwal', $id);
            $this->db->update("jadwal", $data);		
		}
		
		public function hapus_data_pembayaran($id){
            $this->db->where('id_pembayaran', $id);
            $this->db->delete("pembayaran");
        }
				
		public function hapus_data_pelamar($id){
            $this->db->where('id',$id);
            $this->db->delete("pendaftaran");
		}
    
        public function pengumuman(){
            $sql = $this->db->query("SELECT * FROM pengumuman");	
            $data = $sql->result_array();
            return $data;			
		}
        public function insert_pengumuman(){
            $isi = $this->input->post('judul');
            $nama_file = $_FILES['dokumen']['name'];
            $lokasi_file = $_FILES['dokumen']['tmp_name'];
            $dir = "doc\\";
            
            if(!empty($lokasi_file)){
                move_uploaded_file($lokasi_file,FCPATH.$dir.$nama_file);
//                echo $lokasi_file,FCPATH.$dir.$nama_file;
                $data = array(
                    'nama_file'=>$isi,
                    'direktori_file'=>$nama_file
                );
            }else{
                $data = array(
                    'nama_file'=>$isi
                );
            }
            $this->db->insert("pengumuman",$data);
        }
        public function edit_pengumuman($id){
            $sql = $this->db->query("SELECT * FROM pengumuman WHERE id_pengumuman = ".$id."");	
            $data = $sql->result_array();
            return $data;			
		}
        public function query_edit_pengumuman(){
            $id = $this->input->post('id_pengumuman');
            $isi = $this->input->post('judul');
            $nama_file = $_FILES['dokumen']['name'];
            $lokasi_file = $_FILES['dokumen']['tmp_name'];
            $dir = "\doc\\";
            if(!empty($lokasi_file)){
                move_uploaded_file($lokasi_file,FCPATH.$dir.$nama_file);
                $data = array(
                'id_pengumuman'=>$id,
                'nama_file'=>$isi,
                'direktori_file'=>$nama_file
                );
            }else{
                $data = array(
                'id_pengumuman'=>$id,
                'nama_file'=>$isi
                );
            }

            $this->db->where('id_pengumuman', $id);
            $this->db->update("pengumuman",$data);
	
		}
        public function hapus_data_pengumuman($id){
		  $this->db->where('id_pengumuman',$id);	
		  $this->db->delete("pengumuman");	
		}
    
        
        public function query_kelas(){
            $sql = $this->db->query("select * from kursus");	
            $data = $sql->result_array();
            return $data;	
		}
        public function query_program(){
            $sql = $this->db->query("SELECT * FROM program");	
            $data = $sql->result_array();
            return $data;			
		}
	
}		
?>