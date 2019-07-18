<?php

class Mahasiswa extends Controller {

	public function index ()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');	 
	}

	public function detile ($id)
	{
		$data['judul'] = 'Detile Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header', $data);
		$this->view('mahasiswa/detile', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}
}