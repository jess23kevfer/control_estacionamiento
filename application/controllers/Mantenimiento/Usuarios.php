<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}


	public function index()
	{
		$data = array(
			'usuarios' =>$this->Usuarios_model->getUsuarios(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/list',$data);
		$this->load->view('layouts/footer');

	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		echo $nombres."".$apellidos;
	
		$data  = array(
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'username' => $username,
			'password' => $password,
			'estado' => "1"
		);

		if ($this->Usuarios_model->save($data)) {
			redirect(base_url()."mantenimiento/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/usuarios/add");
		}
		
	}
	public function edit($id){
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuario($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function update(){
		$idUsuario = $this->input->post("idUsuario");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$username = $this->input->post("username");

		$data = array(
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'username' => $username, 
		);

		if ($this->Usuarios_model->update($idUsuario,$data)) {
			redirect(base_url()."mantenimiento/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/usuarios/edit/".$idUsuario);
		}
	}
	public function view($id){
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuario($id), 
		);
		$this->load->view("admin/usuarios/view",$data);
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Usuarios_model->update($id,$data);
		echo "mantenimiento/usuarios";
	}
	
}
