<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos_salida_model extends CI_Model {
	 public function getVehiculos_salida(){
		 $this->db->where("estado","1");
		 $resultados = $this->db->get("vehiculos");
		 return $resultados->result();
	 }
	 public function save1($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("vehiculos",$data);
	}
	 public function save($id,$data){
        $this->db->where("id",$id);
		return $this->db->insert("vehiculos",$data);
	}
	public function getVehiculo_salida($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("vehiculos");
		return $resultado->row();
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("vehiculos",$data);
	}
	public function getVehiculosbyDate($fechainicio,$fechafin){
		$this->db->where("fecha_entrada >=",$fechainicio);
		$this->db->where("fecha_entrada <=",$fechafin);
		$resultados = $this->db->get('vehiculos');
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}
}