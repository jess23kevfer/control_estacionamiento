<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuraciones_model extends CI_Model {
	
	 public function getConfiguraciones(){
		 $this->db->where("estado","1");
		 $resultados = $this->db->get("configuraciones");
		 return $resultados->result();
	 }
	 public function save($data){
		return $this->db->insert("configuraciones",$data);
	}
	public function getConfiguracion($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("configuraciones");
		return $resultado->row();

	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("configuraciones",$data);
	}
}
