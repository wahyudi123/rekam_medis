<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends CI_Controller{
		public function __construct(){
			parent::__construct();
				$this->load->model('model_spesialis');
				$this->load->model('model_dokter');
				$this->load->model('model_pasien');
				$this->load->model('model_medik');
				$this->load->model('model_hasil');
				$this->load->helper('mylib');
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
			else if ($uid == 'pasien') {
				$this->pasien();
			}
			else if ($uid == 'medik') {
				$this->medik();
			}
			else if ($uid == 'hasil') {
				$this->hasil();
			}
			else{
				$this->load->view('menu/header');
				$this->load->view('welcome/welcome');
				$this->load->view('menu/footer');
			}
		}

		public  function welcome(){
			$this->load->view('menu/header');
			$this->load->view('welcome/welcome');
			$this->load->view('menu/footer');
		}

		public  function spesialis(){
			if ($this->input->get('id')!='') {
				$id = str_replace(' ','+', $this->input->get('id'));
				$id = $this->encrypt->decode($id);

				$data['detail'] = $data['spesialis'] = 
				$this->model_spesialis->select_spesialis_byid($id);
			}else{
				$data['detail'] = "";
			}
			$data['list'] = $this->model_spesialis->select_all_spesialis();
			//$this->load->view('main/dosen',$data);

			$this->load->view('menu/header');
			$this->load->view('master/spesialis/m_spesialis',$data);
			$this->load->view('menu/footer');
		}

		public function save_spesialis(){
			if($this->input->post('kd_spesialis')!="" || $this->input->post('kd_spesialis')!=null ){
				if($this->model_spesialis->update_spesialis()){
					redirect('main/index?uid=spesialis&msg=update+Success');
				}else{
					redirect('main/index?uid=spesialis&msg=update+Failed');
				}
			}else{
				if($this->model_spesialis->insert_spesialis()){
					redirect('main/index?uid=spesialis&msg=Insert+Success');

				}else{
					redirect('main/spesialis?msg=Insert+Failed');
				}
			}
		}

		public function delete_spesialis(){
			$id = str_replace(' ','+', $this->input->get('id'));
			$id = $this->encrypt->decode($id);

			if ($this->model_spesialis->delete_spesialis($id)){
				redirect('main/index?uid=spesialis&msg=Delete+Success');
			}else{
				redirect('main/index?uid=spesialis&msg=Delete+Failed');
			}
		}
		
		public  function dokter(){
			if ($this->input->get('id')!='') {
				$id = str_replace(' ','+', $this->input->get('id'));
				$id = $this->encrypt->decode($id);

				$data['detail'] = $data['dokter'] = 
				$this->model_dokter->select_dokter_byid($id);
			}else{
				$data['detail'] = "";
			}
			$data['list'] = $this->model_dokter->select_all_dokter();
			//$this->load->view('main/dosen',$data);

			$this->load->view('menu/header');
			$this->load->view('master/m_dokter',$data);
			$this->load->view('menu/footer');
		}

		public function save_dokter(){
			if($this->input->post('kd_dokter')!="" || $this->input->post('kd_dokter')!=null ){
				if($this->model_dokter->update_dokter()){
					redirect('main/index?uid=dokter&msg=update+Success');
				}else{
					redirect('main/index?uid=dokter&msg=update+Failed');
				}
			}else{
				if($this->model_dokter->insert_dokter()){
					redirect('main/index?uid=dokter&msg=Insert+Success');

				}else{
					redirect('main/spesialis?msg=Insert+Failed');
				}
			}
		}

		public function delete_dokter(){
			$id = str_replace(' ','+', $this->input->get('id'));
			$id = $this->encrypt->decode($id);

			if ($this->model_dokter->delete_dokter($id)){
				redirect('main/index?uid=dokter&msg=Delete+Success');
			}else{
				redirect('main/index?uid=dokter&msg=Delete+Failed');
			}
		}

		public  function pasien(){
			if ($this->input->get('id')!='') {
				$id = str_replace(' ','+', $this->input->get('id'));
				$id = $this->encrypt->decode($id);

				$data['detail'] = $data['pasien'] = 
				$this->model_pasien->select_pasien_byid($id);
			}else{
				$data['detail'] = "";
			}
			$data['list'] = $this->model_pasien->select_all_pasien();
			//$this->load->view('main/dosen',$data);

			$this->load->view('menu/header');
			$this->load->view('master/m_pasien',$data);
			$this->load->view('menu/footer');
		}

		public function save_pasien(){
			if($this->input->post('kd_pasien')!="" || $this->input->post('kd_pasien')!=null ){
				if($this->model_pasien->update_pasien()){
					redirect('main/index?uid=pasien&msg=update+Success');
				}else{
					redirect('main/index?uid=pasien&msg=update+Failed');
				}
			}else{
				if($this->model_pasien->insert_pasien()){
					redirect('main/index?uid=pasien&msg=Insert+Success');

				}else{
					redirect('main/pasien?msg=Insert+Failed');
				}
			}
		}

		public function delete_pasien(){
			$id = str_replace(' ','+', $this->input->get('id'));
			$id = $this->encrypt->decode($id);

			if ($this->model_dokter->delete_dokter($id)){
				redirect('main/index?uid=dokter&msg=Delete+Success');
			}else{
				redirect('main/index?uid=dokter&msg=Delete+Failed');
			}
		}

		public  function medik(){
			if ($this->input->get('id')!='') {
				$id = str_replace(' ','+', $this->input->get('id'));
				$id = $this->encrypt->decode($id);

				$data['detail'] = $data['keluhan'] = 
				$this->model_medik->select_medik_byid($id);
			}else{
				$data['detail'] = "";
			}
			$data['list'] = $this->model_medik->select_all_medik();
			//$this->load->view('main/dosen',$data);

			$this->load->view('menu/header');
			$this->load->view('medik/m_medik',$data);
			$this->load->view('menu/footer');
		}

		public function save_medik(){
			if($this->input->post('kd_rm')!="" || $this->input->post('kd_rm')!=null ){
				if($this->model_medik->update_medik()){
					redirect('main/index?uid=medik&msg=update+Success');
				}else{
					redirect('main/index?uid=medik&msg=update+Failed');
				}
			}else{
				if($this->model_medik->insert_medik()){
					redirect('main/index?uid=medik&msg=Insert+Success');

				}else{
					redirect('main/medik?msg=Insert+Failed');
				}
			}
		}

		public function delete_medik(){
			$id = str_replace(' ','+', $this->input->get('id'));
			$id = $this->encrypt->decode($id);

			if ($this->model_medik->delete_medik($id)){
				redirect('main/index?uid=medik&msg=Delete+Success');
			}else{
				redirect('main/index?uid=medik&msg=Delete+Failed');
			}
		}

		public  function hasil(){
			$nama = $this->session->userdata('level');
			$data['list'] = $this->model_hasil->select_hasil();
			//$this->load->view('main/dosen',$data);

			$this->load->view('menu/header');
			$this->load->view('pasien/m_hasil',$data);
			$this->load->view('menu/footer');
		}
}