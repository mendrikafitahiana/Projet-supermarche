<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller {
    function statDate(){
        $this->load->model('Vente');
        $this->load->model('Produit');
        
        $j1=$this->input->post('jour1');
        $m1=$this->input->post('mois1');
        $a1=$this->input->post('an1');
        $j2=$this->input->post('jour2');
        $m2=$this->input->post('mois2');
        $a2=$this->input->post('an2');
        
        
        $date1 = "$a1-$m1-$j1";
        $date2 = "$a2-$m2-$j2";
            $donnee['date1']=$date1;
            $donnee['date2']=$date2;
        $donnee['produitDate']=$this->Vente->statDate($date1,$date2);
                $this->load->view('tableaudebord',$donnee);
            
        }
    
    function statProduit(){
        $this->load->model('Vente');
        $this->load->model('Produit');
         $idProd = $this->input->post('idProd');
         $donnee['nomproduit']=$this->Produit->selectOne($idProd);
                $donnee['produit']=$this->Vente->produitStat($idProd);
                $this->load->view('tableaudebord',$donnee);
    }
    
    function statCaisse(){
        $this->load->model('Vente');
        $this->load->model('Produit');
        $idCaisse = $this->input->post('idCaisse');
        $donnee['caisse']=$idCaisse;
        $donnee['produitCaisse']=$this->Vente->parCaisse($idCaisse);
        $this->load->view('tableaudebord',$donnee);
    }
}
?>