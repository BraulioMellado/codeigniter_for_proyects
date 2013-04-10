<?php

class Home extends CI_Controller {
	public function index()
	{
		$titulo['titulo']=ucfirst('titulo de la pagina');
		$this->load->view('layout/head',$titulo);
		$this->load->view('home');
		$this->load->view('layout/footer');
	}
}