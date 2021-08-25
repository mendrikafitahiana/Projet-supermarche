<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Utilisateur extends CI_Model{

	public function getLogin($login,$mdp){

		$query = $this->db->where('email',$login)->where('mdp',$mdp)->get('utilisateur');

        if($query->num_rows() == 1){

            return 1;
        }

        return 0;
	}
}