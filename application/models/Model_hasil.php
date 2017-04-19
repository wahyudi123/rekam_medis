<?php 

	class Model_hasil extends CI_Model {

		function __construct()
		{
			parent::__construct();

			
		}

		public function select_hasil(){
				$tes  = $this->session->userdata('level');
				$query = $this->db->query('select td.nm_dokter,tp.nm_pasien,tr.keluhan, tr.diagnosa,tr.tindakan, tr.tgl_berobat 
					from tbl_dokter as td, rekam_medik as tr ,  tbl_pasien as tp
					where tr.kd_dokter = td.kd_dokter and tr.kd_pasien = tp.kd_pasien and tp.nm_pasien = "ina"
                    ');
			if($query->num_rows()>0){
				$data = $query->result();
			}
			else{
				$data = 0;
			}
			return $data;


		}

	}

?>