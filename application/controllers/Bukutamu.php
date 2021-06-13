<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutamu extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_bukutamu');
		$this->load->helper(array('url'));
	}

	function index() {
		$this->load->view('v_bukutamu');
	}

	function tampil_data(){
		$data['bukutamu'] = $this->m_bukutamu->tampil_data();
		$this->load->view('v_tabeltamu', $data);
	}

	function tamu(){
		$this->load->view('loading');
	}

	 function tambah_aksi() {
		$nama_tamu = $this->input->post('nama_tamu');
		$email = $this->input->post('email');
		$ktp = $this->input->post('ktp');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$gender = $this->input->post('gender');
		$tk = $this->input->post('tk');

		$data = array(
			'nama_tamu' => $nama_tamu,
			'email' => $email,
			'ktp' => $ktp,
			'alamat' => $alamat,
			'umur' => $umur,
			'gender' => $gender,
			'tk' => $tk,
		);

		$this->m_bukutamu->input_data($data ,'tb_bukutamu',);
		redirect('bukutamu/tamu');
	}
	
}