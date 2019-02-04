<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budaya extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Muncan Website";
		$data['page'] = "potensi/budaya";
		$this->load->view('halaman',$data);
	}
}


