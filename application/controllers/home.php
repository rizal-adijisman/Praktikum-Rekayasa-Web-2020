<?php

class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_data');

		if($this->session->userdata('login')==null){
			redirect('login');
		}
	}

	public function index(){
		$data = array(
			'judul' => 'Berita',
			'data_berita' => $this->m_data->data_berita(),
			);
		$this->load->view('v_home', $data);
	}
	public function tambah(){
		$judul = $this->input->post('judul');
		$isi_berita = $this->input->post('isi_berita');

		$data = array(
			'judul' => $judul,
			'isi_berita' => $isi_berita,
			);
		$this->load->input_berita($data, 'berita');
		redirect('http://localhost/rekayasa_web/index.php/home');
	}
}

?>