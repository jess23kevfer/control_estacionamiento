<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobros extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Cobros_model");
	}


	public function index()
	{
		$data = array(
			'cobros' =>$this->Cobros_model->getCobros(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/cobros/list',$data);
		$this->load->view('layouts/footer');

	}
	
	
}
