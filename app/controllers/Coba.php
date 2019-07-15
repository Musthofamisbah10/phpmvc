<?php 

class Coba extends Controller {

	public function index()
	{
		$data['judul'] = 'Coba';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
	public function aja()
	{
		echo "coba/aja";
	}
}