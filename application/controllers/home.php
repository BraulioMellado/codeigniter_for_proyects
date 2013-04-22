<?php

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('modelo_db');
	}

	public function index()
	{
		$resultados['articulo']=$this->modelo_db->buscar_articulos();

		$titulo['titulo']=ucfirst('nombre de la pagina');
		$this->load->view('layout/head',$titulo);
		$this->load->view('home',$resultados);
		$this->load->view('layout/footer');
	}
}