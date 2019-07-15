<?php

class About extends Controller {
	
	public function index($nama = 'Misabh', $pro = 'Front End Dev', $umur = 23)
	{
		$data['nama'] = $nama;
		$data['pro'] = $pro;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/about', $data);
		$this->view('templates/footer');
	}

	public function page(){
		echo "About/index";
	}
}