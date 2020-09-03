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
        $this->load->view("admin/vehiculos/list",$data);
        $this->load->view("layouts/aside");
		$this->load->view("layouts/footer");
	}
	public function add1($id){
		$data =array(
			'vehiculo' => $this->Vehiculos_model->getVehiculo($id),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vehiculos/add1",$data);
		$this->load->view("layouts/footer");
	}
	public function store1(){
		$matricula = $this->input->post("matricula");
		$descripcion = $this->input->post("descripcion");
		$fecha_entrada = $this->input->post("fecha_entrada");
		$fecha_salida = $this->input->post("fecha_salida");
		$hora_salida = $this->input->post("hora_salida");
		$data  = array(
			'matricula' => $matricula, 
			'descripcion' => $descripcion,
			'hora_entrada' => $hora_entrada,
			'fecha_salida' => $fecha_salida,
			'hora_salida' => $hora_salida,
			'estado' => "1"
		);

		if ($this->Vehiculos_model->save1($idVehiculo,$data)) {
			redirect(base_url()."mantenimiento/vehiculos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/vehiculos/add1");
		}
	}
    
    public function edit1($id){
		$data  = array(
			'vehiculo' => $this->Vehiculos_model->getVehiculo($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vehiculos/edit1",$data);
		$this->load->view("layouts/footer");
	}
	public function update1(){
		$idVehiculo = $this->input->post("idVehiculo");
        $matricula = $this->input->post("matricula");
		$descripcion = $this->input->post("descripcion");
		$fecha_entrada = $this->input->post("fecha_entrada");
        $fecha_salida = $this->input->post("fecha_salida");
		$hora_salida = $this->input->post("hora_salida");
        
		$data = array(
			'matricula' => $matricula, 
			'descripcion' => $descripcion,
			'fecha_entrada' => $fecha_entrada,
            'fecha_salida' => $fecha_salida,
			'hora_salida' => $hora_salida,
		);

		if ($this->Vehiculos_model->update($idVehiculo,$data)) {
			redirect(base_url()."mantenimiento/vehiculos_salida");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/vehiculos_salida/edit1/".$idVehiculo);
		}
	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vehiculos/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
		$matricula = $this->input->post("matricula");
		$descripcion = $this->input->post("descripcion");
		$fecha_entrada = $this->input->post("fecha_entrada");
		echo $matricula."".$descripcion;
	
		$data  = array(
			'matricula' => $matricula, 
			'descripcion' => $descripcion,
			'fecha_entrada' => $fecha_entrada,
			'estado' => "1"
		);

		if ($this->Vehiculos_model->save($id,$data)) {
			redirect(base_url()."mantenimiento/vehiculos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/vehiculos/add");
		}
		
	}
	public function edit($id){
		$data  = array(
			'vehiculo' => $this->Vehiculos_model->getVehiculo($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vehiculos/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function update(){
		$idVehiculo = $this->input->post("idVehiculo");
        $matricula = $this->input->post("matricula");
		$descripcion = $this->input->post("descripcion");
		$fecha_entrada = $this->input->post("fecha_entrada");
        
		$data = array(
			'matricula' => $matricula, 
			'descripcion' => $descripcion,
			'fecha_entrada' => $fecha_entrada,
		);

		if ($this->Vehiculos_model->update($idVehiculo,$data)) {
			redirect(base_url()."mantenimiento/vehiculos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/vehiculos/edit/".$idVehiculo);
		}
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Vehiculos_model->update($id,$data);
		echo "mantenimiento/vehiculos";
	}
	
}
