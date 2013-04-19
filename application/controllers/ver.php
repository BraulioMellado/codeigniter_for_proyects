<?php

class Ver extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('modelo_db');
	}

	public function index()
	{
		//coger el nombre del articulo
		$titulo_url=$this->uri->segment(2);

		//enviar a consulta
		$dato['articulo']=$this->modelo_db->buscar_articulo($titulo_url);
		
		//Designando el titulo de pagina
		foreach ($dato['articulo'] as $valor)
		{
			$titulo['titulo']=$valor->titulo;
		}

		//cargando los views
		$this->load->view('layout/head',$titulo);
		$this->load->view('ver',$dato);
		$this->load->view('layout/footer');
	}
}