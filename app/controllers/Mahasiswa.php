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

	// method detile
	public function detile ($id)
	{
		$data['judul'] = 'Detile Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header', $data);
		$this->view('mahasiswa/detile', $data);
		$this->view('templates/footer');
	}

	// Tambah
	public function tambah()
	{
		if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
			Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('Berhasil', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	// Hapus
	public function hapus($id)
	{
		if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
			Flasher::setFlash('Berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('Berhasil', 'didihapus', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	// Ubah
	public function getubah()
	{
		echo 'ok';
	}


}