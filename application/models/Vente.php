<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 class Vente extends CI_Model{
    /* function select(){
    $sql = "select * from produit";
    $query = $this->db->query($sql);
    $produit = array();
    foreach ($query->result_array() as $key) {
	$produit[] = $key;
	}
    return $produit;
     }*/
     function globale(){
         $sql = "select p.designation as designation,sum(v.qte) as qte from venteProduit as v join produit as p on v.idProd=p.id group by v.idProd order by sum(v.qte) asc";
    $query = $this->db->query($sql);
    $produit = array();
    foreach ($query->result_array() as $key) {
	$produit[] = $key;
	}
    return $produit;
     }
     
     function parCaisse($id){
         $sql = "select sum(v.qte) as qte,p.designation as nom from venteProduit as v join vente as ve join produit as p on v.idVente=ve.id and v.idProd=p.id where ve.idCaisse= %s group by v.idProd order by v.idProd asc ";
         $sql = sprintf($sql, $this->db->escape($id));
         $query = $this->db->query($sql);
    $produit = array();
    foreach ($query->result_array() as $key) {
	$produit[] = $key;
	}
    return $produit;
     }
     
     function statDate($date1,$date2){
         $sql = "select p.designation as nom,sum(v.qte) qte,ve.dateVente as date from venteProduit as v join vente as ve join produit as p on v.idVente=ve.id and v.idProd=p.id where ve.dateVente between %s and %s group by ve.dateVente order by v.idProd asc ";
         $sql = sprintf($sql, $this->db->escape($date1),$this->db->escape($date2));
         $query = $this->db->query($sql);
    $produit = array();
    foreach ($query->result_array() as $key) {
	$produit[] = $key;
	}
    return $produit;
     }
     
     /*function produitDate($id,$date1,$date2){
          $sql = "select v.qte as qte,ve.dateVente as date from venteProduit as v join vente ve on v.idVente=ve.id where ve.dateVente between '"+$date1+"' and '"+$date2+"' and v.idProd ="+$id+" group by ve.dateVente order by ve.dateVente asc";
    $query = $this->db->query($sql);
    $produit = array();
    foreach ($query->result_array() as $key) {
	$produit[] = $key;
	}
    return $produit;
     }*/
     
     function produitStat($id){
         $sql = "select v.qte as qte,ve.dateVente as date from venteProduit as v join vente ve on v.idVente=ve.id where v.idProd = %s group by ve.dateVente order by ve.dateVente asc;";
         $sql = sprintf($sql, $this->db->escape($id));
         $query = $this->db->query($sql);
    $produit = array();
    foreach ($query->result_array() as $key) {
	$produit[] = $key;
	}
    return $produit;
     }
     
     function produitCaisse($idP,$idC){
         $sql = "select v.qte,ve.dateVente from venteProduit as v join vente ve on v.idVente=ve.id where v.idProd = 1 and v.idCaisse=1 group by ve.dateVente order by ve.dateVente asc;";
          $sql = sprintf($sql, $this->db->escape($idP), $this->db->escape($idC));
         $query = $this->db->query($sql);
    $produit = array();
    foreach ($query->result_array() as $key) {
	$produit[] = $key;
	}
    return $produit;
     }
     
     
 }
  ?>