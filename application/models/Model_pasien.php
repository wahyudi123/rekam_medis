<?php 

	class Model_pasien extends CI_Model {

		function __construct()
		{
			parent::__construct();

			
		}

		public function select_all_pasien(){
				
				$this->db->select('*');
				$this->db->from('tbl_pasien');
				$query = $this->db->get();
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function select_pasien_byid($par1){
			$this->db->select('*');
			$this->db->from('tbl_pasien');
			$this->db->where('kd_pasien',$par1);
			$query = $this->db->get();
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function insert_pasien(){
			 $data = array(
				            'nm_pasien'          => $this->input->post('nm_pasien', TRUE),
				            'tgl_lahir'       	 => $this->input->post('lahir', TRUE),
				            'alamat'        	 => $this->input->post('alamat', TRUE),
				            'jns_kelamin'        => $this->input->post('jns_kelamin', TRUE)
				            
				        );
			
			$this->db->insert('tbl_pasien',$data);
			return true;
		}

		public function update_pasien(){
			$data = array(
				            'nm_pasien'          => $this->input->post('nm_pasien', TRUE),
				            'tgl_lahir'       	 => $this->input->post('lahir', TRUE),
				            'alamat'        	 => $this->input->post('alamat', TRUE),
				            'jns_kelamin'        => $this->input->post('jns_kelamin', TRUE)
				            
				        );
			$this->db->where('kd_pasien',$this->input->post('kd_pasien'));
			$this->db->update('tbl_pasien',$data);
			return true;
		}

		public function delete_pasien($par1){
			$data['kd_pasien']=$par1;
			$this->db->delete('tbl_pasien',$data);
			return true;
		}
	}

?>