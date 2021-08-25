<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Caisse extends CI_Model{

	public function selectAllCaisse(){

		$sql = "select * from caisse";
		$query = $this->db->query($sql);

		$caisse = array();
		foreach ($query->result_array() as $key) {
			$caisse[] = $key;
		}
		return $caisse;
	}

	function select(){
		$sql = "select * from caisse";
		$query = $this->db->query($sql);
		$caisse = array();
		foreach ($query->result_array() as $key) {
		$caisse[] = $key;
		}
		return $caisse;
		 }
}