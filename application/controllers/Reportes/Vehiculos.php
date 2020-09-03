<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Vehiculos_model");
    }
    public function index(){
        $fechainicio = $this->input->post("fechainicio");
		$fechafin = $this->input->post("fechafin");
		if ($this->input->post("buscar")) {
			$vehiculos = $this->Vehiculos_model->getVehiculosbyDate($fechainicio,$fechafin);
		}
		else{
			$vehiculos = $this->Vehiculos_model->getVehiculos();
		}
		$data = array(
			"vehiculos" => $vehiculos,
			"fechainicio" => $fechainicio,
			"fechafin" => $fechafin
		);
        $this->load->view("layouts/header");
        $this->load->view("admin/reportes/vehiculos",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
}
    