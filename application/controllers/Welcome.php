<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_Orang');

		$hasil = $this->Model_Orang->ambilDataOrang();

		$data = [
			"daftar_orang" => $hasil
		];

		$this->load->view('orang', $data);
	}

	public function tambahOrang() {
		$this->load->model('Model_Orang');
		$this->load->helper('url');

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$this->Model_Orang->prosesTambahOrang($nama, $alamat);

		redirect('Welcome');
	}

	public function hapusOrang($id) {
		$this->load->model('Model_Orang');
		$this->load->helper('url');

		$this->Model_Orang->prosesHapusOrang($id);

		redirect('Welcome');
	}

	public function ubahOrang() {
		$this->load->model('Model_Orang');
		$this->load->helper('url');

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$this->Model_Orang->prosesUbahOrang($id, $nama, $alamat);

		redirect('Welcome');
	}
}
