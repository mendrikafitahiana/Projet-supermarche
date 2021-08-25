<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {

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

	public function redirect(){

		$this->load->model('Caisse');
		$donnee['caisse'] = $this->Caisse->selectAllCaisse();

		$this->load->view('accueilClient',$donnee);
	}

	public function choixCaisse(){

		$this->load->helper('assets');


		$this->load->model('Produit');

		$caisse = $this->input->post('caisse');
		$this->session->set_userdata('caisse',$caisse);
		$donnee['c'] = $this->session->userdata('caisse');

		$donnee['produits'] = $this->Produit->selectAllProduct();

		for($i=0; $i<count($donnee['produits']); $i++){

			// $val = $donnee['produits'][$i]['id'];
			
			$donnee['img'] = $this->Produit->selectImg($donnee['produits'][$i]['id']);


			for($ii=0; $ii<count($donnee['img']); $ii++){

				$donnee['img'] = $donnee['img'][$ii]['nom'];

			}
			
		}

		$this->load->view('listeProduit',$donnee);
	}
}