<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Muncan Website";
		$data['page'] = "Home/index";
		$this->load->view('halaman',$data);
	}
}


