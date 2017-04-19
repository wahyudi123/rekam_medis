<?php 
	class Spesialis extends CI_Controller{
		public function __construct(){
			parent::__construct();
				$this->load->model('model_spesialis');
			}

		public function index(){
			$uid = $this->input->get('uid');
			if ($uid == "welcome") {
				$this->welcome();
			}else if ($uid == 'dokter') {
				$this->dokter();
			}else if ($uid == 'spesialis') {
				$this->spesialis();
			}
			else{
				$this->load->view('menu/header');
				$this->load->view('welcome/welcome');
				$this->load->view('menu/footer');
			}
		}

		public  function dokter(){
			$this->load->view('menu/header');
			$this->load->view('master/m_dokter');
			$this->load->view('menu/footer');
		}

		

		public  function spesialis(){
			
			$data['list'] = $this->model_spesialis->select_all_spesialis();
			//$this->load->view('main/dosen',$data);
			
			$this->load->view('menu/header');
			$this->load->view('master/spesialis/m_spesialis',$data);
			$this->load->view('menu/a_footer');
		}

	}
?>