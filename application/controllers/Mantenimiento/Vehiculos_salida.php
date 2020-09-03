<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos_salida extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Vehiculos_salida_model");
	}


	public function index()
	{
		$data = array(
			'vehiculo' =>$this->Vehiculos_salida_model->getVehiculos_salida(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/vehiculos_salida/list',$data);
		$this->load->view('layouts/footer');

	}
	
	
}
