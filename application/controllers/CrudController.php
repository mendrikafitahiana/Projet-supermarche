<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

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
	public function ajout()
	{
		$this->load->model('Categorie');

		$donnee['categ'] = $this->Categorie->selectCategorie();

		$this->load->view('ajoutProduit',$donnee);
		
	}	

	public function ajoutProduit()
	{
		$this->load->model('Produit');
		$this->load->model('Categorie');

		$des = $this->input->post('designation');
		$prix = $this->input->post('prix');
		$categorie = $this->input->post('categorie');

		$donnee['categ'] = $this->Categorie->selectIdCategorie($categorie);

		for($i=0; $i<count($donnee['categ']); $i++){

			$val = $donnee['categ'][$i]['id'];
		}

		$this->Produit->insertProduct($des,$prix,$val);

		$donnee['listeProduit'] = $this->Produit->selectAllProduct();

		for($i=0; $i<count($donnee['listeProduit']); $i++){

			$val1 = $donnee['listeProduit'][$i]['id'];
		}

		// $donnee['categorie'] = $this->Categorie->selectNameCategorie($val1);

        	$this->load->view('accueil',$donnee);

	}

	public function modifier()
	{

		$this->load->model('Categorie');
		$this->load->model('Produit');
		
		$donnee['categ'] = $this->Categorie->selectCategorie();

		$id = $this->input->get('id');
		$this->session->set_userdata('id',$id);

		$donnee['modif'] = $this->Produit->selectWithId($id);

		$this->load->view('modifProduit',$donnee);
	}

	public function modifierProduit()
	{
		$this->load->model('Categorie');
		$this->load->model('Produit');

		$des = $this->input->post('designation');
		$prix = $this->input->post('prix');
		$categorie = $this->input->post('categorie');

		$id = $this->session->userdata('id');

		$donnee['categ'] = $this->Categorie->selectIdCategorie($categorie);

		for($i=0; $i<count($donnee['categ']); $i++){

			$val = $donnee['categ'][$i]['id'];
		}

		$this->Produit->updateProduct($des,$prix,$val,$id);

		$donnee['listeProduit'] = $this->Produit->selectAllProduct();

		// $donnee['categorie'] = $this->Categorie->selectNameCategorie();

        	$this->load->view('accueil',$donnee);
	}

	public function supprimerProduit()
	{
		$this->load->model('Produit');

		$id = $this->input->get('id');

		$this->Produit->deleteProduct($id);

		$donnee['listeProduit'] = $this->Produit->selectAllProduct();
    	$this->load->view('accueil',$donnee);
	}	
}