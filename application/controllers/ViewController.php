<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function affParCateg(){

		$this->load->model('Produit');
		$nom = $this->input->get('nom');

		if($nom == "All"){
			
			$donnee['nom'] = $nom;
			$donnee['listeProduit'] = $this->Produit->selectAllProduct();
		}

		else if($nom == "nourriture"){

			$donnee['nom'] = $nom;
			$donnee['listeProduit'] = $this->Produit->selectByCategory($nom);

		}

		else if($nom == "fourniture"){

			$donnee['nom'] = $nom;
			$donnee['listeProduit'] = $this->Produit->selectByCategory($nom);
		}

		else if($nom == "accessoire"){

			$donnee['nom'] = $nom;
			$donnee['listeProduit'] = $this->Produit->selectByCategory($nom);
		}

		$this->load->view('affichage',$donnee);

	}
}