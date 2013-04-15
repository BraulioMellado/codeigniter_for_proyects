<?php

class Subir_articulo extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->helper('form');
	}

	public function index()
	{
		$titulo['titulo']=ucfirst('Subir un articulo');
		$this->load->view('layout/head',$titulo);
		$this->load->view('subir');
		$this->load->view('layout/footer');
	}
}