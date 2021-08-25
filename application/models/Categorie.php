<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Categorie extends CI_Model{

	// public function selectNameCategorie($id){
	// 	$sql = " select nom from categorie where id = %s";
	// 	$sql = sprintf($sql,$this->db->escape($id));

	// 	$query = $this->db->query($sql);

	// 	$rep = array();
	// 	foreach ($query->result_array() as $key) {
	// 		$rep[] = $key;
	// 	}
	// 	return $rep;
	// }

	public function selectCategorie(){
		$sql = "select * from categorie";
		$query = $this->db->query($sql);

		$cat = array();
		foreach ($query->result_array() as $key) {
			$cat[] = $key;
		}
		return $cat;
	}

	public function selectIdCategorie($nom){
		$sql = "select id from categorie where nom = %s";
		$sql = sprintf($sql,$this->db->escape($nom));

		$query = $this->db->query($sql);

		$rep = array();
		foreach ($query->result_array() as $key) {
			$rep[] = $key;
		}
		return $rep;
	}
}