<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Produit extends CI_Model{

	public function selectAllProduct(){

		$sql = "select * from produit";
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function updateProduct($designation,$prix,$idCate,$id){

		$sql = "update produit set designation = %s, prix = %s, idCate = %s where id = %s";
		$sql = sprintf($sql,$this->db->escape($designation),$this->db->escape($prix),$this->db->escape($idCate),$this->db->escape($id));
		$query = $this->db->query($sql);
	}

	public function insertProduct($designation,$prix,$idCate){

		$sql = "insert into produit values(null,%s,%s,%s)";
		$sql = sprintf($sql,$this->db->escape($designation),$this->db->escape($prix),$this->db->escape($idCate));
		
		$query = $this->db->query($sql);
	}
}