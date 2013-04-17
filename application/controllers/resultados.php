<?php

class Resultados extends CI_Controller {
	public function index()
	{
		$titulo['titulo']=ucfirst('resultados de la busqueda');
		$this->load->view('layout/head',$titulo);
		$this->load->view('resultados');
		$this->load->view('layout/footer');
	}
}