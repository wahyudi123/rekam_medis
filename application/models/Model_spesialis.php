<?php 

	class Model_spesialis extends CI_Model {

		function __construct()
		{
			parent::__construct();

			
		}

		public function select_all_spesialis(){
				$this->db->select('*');
				$this->db->from('tbl_spesialis');
				$query = $this->db->get();
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function select_spesialis_byid($par1){
			$this->db->select('*');
			$this->db->from('tbl_spesialis');
			$this->db->where('kd_spesialis',$par1);
			$query = $this->db->get();
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function insert_spesialis(){
			$data['nm_spesialis']=$this->input->post('nm_spesialis');
			
			$this->db->insert('tbl_spesialis',$data);
			return true;
		}

		public function update_spesialis(){
			$data['nm_spesialis']=$this->input->post('nm_spesialis');
			$this->db->where('kd_spesialis',$this->input->post('kd_spesialis'));
			$this->db->update('tbl_spesialis',$data);
			return true;
		}

		public function delete_spesialis($par1){
			$data['kd_spesialis']=$par1;
			$this->db->delete('tbl_spesialis',$data);
			return true;
		}
	}

?>