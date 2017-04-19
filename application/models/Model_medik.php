<?php 

	class Model_medik extends CI_Model {

		function __construct()
		{
			parent::__construct();

			
		}

		public function select_all_medik(){
				
				$query = $this->db->query('select tp.kd_pasien,rm.kd_rm,td.nm_dokter,tp.nm_pasien, rm.keluhan,rm.diagnosa, rm.tindakan,rm.tgl_berobat
					from tbl_dokter as td, tbl_pasien as tp, rekam_medik as rm 
					where td.kd_dokter = rm.kd_dokter and tp.kd_pasien = rm.kd_pasien');
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function select_medik_byid($par1){
			$this->db->select('*');
			$this->db->from('rekam_medik');
			$this->db->where('kd_rm',$par1);
			$query = $this->db->get();
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function insert_medik(){
			 $data = array(
				            'kd_dokter'          => $this->input->post('kd_dokter', TRUE),
				            'kd_pasien'       	 => $this->input->post('kd_pasien', TRUE),
				            'keluhan'        	 => $this->input->post('keluhan', TRUE),
				            'diagnosa'           => $this->input->post('diagnosa', TRUE),
				            'tindakan'        	 => $this->input->post('tindakan', TRUE),
				            'tgl_berobat'        => $this->input->post('tgl_berobat', TRUE)
				            
				        );
			
			$this->db->insert('rekam_medik',$data);
			return true;
		}

		public function update_medik(){
			$data = array(
				            'kd_dokter'          => $this->input->post('kd_dokter', TRUE),
				            'kd_pasien'       	 => $this->input->post('kd_pasien', TRUE),
				            'keluhan'        	 => $this->input->post('keluhan', TRUE),
				            'diagnosa'           => $this->input->post('diagnosa', TRUE),
				            'tindakan'        	 => $this->input->post('tindakan', TRUE),
				            'tgl_berobat'        => $this->input->post('tgl_berobat', TRUE)
				            
				        );
			$this->db->where('kd_rm',$this->input->post('kd_rm'));
			$this->db->update('rekam_medik',$data);
			return true;
		}

		public function delete_medik($par1){
			$data['kd_rm']=$par1;
			$this->db->delete('rekam_medik',$data);
			return true;
		}
	}

?>