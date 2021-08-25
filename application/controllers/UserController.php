<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Load
	 *	- or -
	 * 		http://example.com/index.php/Load/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Load/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	}

	public function index(){
        $donnee['erreur'] = null;
		$this->load->view('login',$donnee);
    }

	public function authentification(){

		$this->load->model('Utilisateur');
		$this->load->model('Produit');
		$this->load->model('Categorie');

		$username = $this->input->post('username');
        $mdp = $this->input->post('mdp');

        $donnee['validation'] = $this->Utilisateur->getLogin($username,$mdp);
		$donnee['listeProduit'] = $this->Produit->selectAllProduct();

		// $val = array();
		// $tabCate = array();

		for($i=0; $i<count($donnee['listeProduit']); $i++){

			// $data['idCate'] = $donnee['listeProduit'][$i]['idCate'];

			// $donnee['categorie'] = $this->Categorie->selectNameCategorie($donnee['listeProduit'][$i]['idCate']);

		}


        if($donnee['validation'] == 1){

        	$this->load->view('accueil',$donnee);
        }

        else{

	        $donnee['erreur'] = "Erreur";
			$this->load->view('login',$donnee);
	    }
	}

}
