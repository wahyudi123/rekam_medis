<?php 

	class Model_dokter extends CI_Model {

		function __construct()
		{
			parent::__construct();

			
		}

		public function select_all_dokter(){
				
				$query = $this->db->query('select td.kd_dokter,td.nm_dokter, ts.nm_spesialis,td.jns_kelamin, td.alamat, td.telepon
					from tbl_dokter as td, tbl_spesialis as ts
					where td.kd_spesialis = ts.kd_spesialis');
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function select_dokter_byid($par1){
			$this->db->select('*');
			$this->db->from('tbl_dokter');
			$this->db->where('kd_dokter',$par1);
			$query = $this->db->get();
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function insert_dokter(){
			 $data = array(
				            'nm_dokter'          => $this->input->post('nm_dokter', TRUE),
				            'kd_spesialis'       => $this->input->post('spesialis', TRUE),
				            'jns_kelamin'        => $this->input->post('jns_kelamin', TRUE),
				            'alamat'          	 => $this->input->post('alamat', TRUE),
				            'telepon'          	 => $this->input->post('telepon', TRUE)
				            
				        );
			
			$this->db->insert('tbl_dokter',$data);
			return true;
		}

		public function update_dokter(){
			$data = array(
				            'nm_dokter'          => $this->input->post('nm_dokter', TRUE),
				            'kd_spesialis'       => $this->input->post('spesialis', TRUE),
				            'jns_kelamin'        => $this->input->post('jns_kelamin', TRUE),
				            'alamat'          	 => $this->input->post('alamat', TRUE),
				            'telepon'          	 => $this->input->post('telepon', TRUE)
				            
				        );
			$this->db->where('kd_dokter',$this->input->post('kd_dokter'));
			$this->db->update('tbl_dokter',$data);
			return true;
		}

		public function delete_dokter($par1){
			$data['kd_dokter']=$par1;
			$this->db->delete('tbl_dokter',$data);
			return true;
		}
	}

?>