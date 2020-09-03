<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobros_model extends CI_Model {
	 public function getCobros(){
		 $this->db->select("c.*,v.matricula as vehiculo");
		 $this->db->select("c.*,v.descripcion as descripcion");
		 $this->db->select("c.*,v.fecha_entrada as fecha_entrada");
		 $this->db->select("c.*,v.hora_entrada as hora_entrada");
		 $this->db->select("c.*,v.fecha_salida as fecha_salida");
		 $this->db->select("c.*,v.hora_salida as hora_salida");
		 $this->db->select("c.*,v.matricula as vehiculo");
		 $this->db->from("cobros c");
		 $this->db->join("vehiculos v","c.id = v.id");
		 $this->db->where("c.estado","1");	
		 $resultados = $this->db->get();
		 return $resultados->result();
	 }
	 public function getVehiculo($id){
		$this->db->select("c.*,v.matricula as vehiculo");
		$this->db->select("c.*,v.descripcion as descripcion");
		$this->db->select("c.*,v.fecha_entrada as fecha_entrada");
		$this->db->select("c.*,v.hora_entrada as hora_entrada");
		$this->db->select("c.*,v.fecha_salida as fecha_salida");
		$this->db->select("c.*,v.hora_salida as hora_salida");
		$this->db->from("cobros c");
		$this->db->join("vehiculos v","c.id = v.id");
		$this->db->where("c.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
}