<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuraciones extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Configuraciones_model");
	}


	public function index()
	{
		$data = array(
			'configuraciones' =>$this->Configuraciones_model->getConfiguraciones(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/configuraciones/list',$data);
		$this->load->view('layouts/footer');

	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuraciones/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
		$nombre = $this->input->post("nombre");
		$ruc = $this->input->post("ruc");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		echo $nombre."".$ruc;
	
		$data  = array(
			'nombre' => $nombre, 
			'ruc' => $ruc,
			'direccion' => $direccion,
			'telefono' => $telefono,
			'estado' => "1"
		);

		if ($this->Configuraciones_model->save($data)) {
			redirect(base_url()."mantenimiento/configuraciones");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/configuraciones/add");
		}
		
	}
	public function edit($id){
		$data  = array(
			'configuracion' => $this->Configuraciones_model->getConfiguracion($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuraciones/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function update(){
		$idConfiguracion = $this->input->post("idConfiguracion");
		$nombre = $this->input->post("nombre");
		$ruc = $this->input->post("ruc");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");

		$data = array(
			'nombre' => $nombre, 
			'ruc' => $ruc,
			'direccion' => $direccion, 
			'telefono' => $telefono,
		);

		if ($this->Configuraciones_model->update($idConfiguracion,$data)) {
			redirect(base_url()."mantenimiento/configuraciones");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/configuraciones/edit/".$idConfiguracion);
		}
	}
	public function view($id){
		$data  = array(
			'configuracion' => $this->Configuraciones_model->getConfiguracion($id), 
		);
		$this->load->view("admin/configuraciones/view",$data);
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Configuraciones_model->update($id,$data);
		echo "mantenimiento/configuraciones";
	}
	
}
