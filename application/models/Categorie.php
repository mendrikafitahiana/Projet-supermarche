<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Categorie extends CI_Model{

	public function selectNameCategorie(){
		$sql = " select categorie.nom from categorie join produit on produit.idCate = categorie.id";
		// $sql = sprintf($sql,$this->db->escape($id));

		$query = $this->db->query($sql);

		$rep = array();
		foreach ($query->result_array() as $key) {
			$rep[] = $key;
		}
		return $rep;
	}

	public function selectCategorie(){
		$sql = "select * from categorie";
		$query = $this->db->query($sql);

		$cat = array();
		foreach ($query->result_array() as $key) {
			$cat[] = $key;
		}
		return $cat;
	}
}