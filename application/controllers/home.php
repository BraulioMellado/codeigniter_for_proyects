<?php

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('modelo_db');
	}

	public function index()
	{
		$titulo['titulo']=ucfirst('nombre de la pagina');
		$this->load->view('layout/head',$titulo);
		$this->load->view('home');
		$this->load->view('layout/footer');
	}
}