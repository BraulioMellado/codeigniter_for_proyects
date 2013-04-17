<?php

class Ver extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('modelo_db');
	}

	public function index()
	{
		$id=1;
		$datos=$this->modelo_db->buscar_articulo($id);

		$titulo['titulo']=ucfirst('ver articulo');
		$this->load->view('layout/head',$titulo);
		$this->load->view('ver',$datos);
		$this->load->view('layout/footer');
	}
}