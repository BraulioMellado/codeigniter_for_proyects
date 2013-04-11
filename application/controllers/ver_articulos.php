<?php

class Ver_articulos extends CI_Controller {
	public function index()
	{
		$titulo['titulo']=ucfirst('ver los articulos');
		$this->load->view('layout/head',$titulo);
		$this->load->view('articulos');
		$this->load->view('layout/footer');
	}
}