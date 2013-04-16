<?php

class Subir_articulo extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('subir_modelo');
	}

	public function index()
	{
		$titulo['titulo']=ucfirst('Subir un articulo');
		$this->load->view('layout/head',$titulo);
		$this->load->view('subir');
		$this->load->view('layout/footer');
	}
	public function guardar()
	{
		$titulo['titulo']=ucfirst('Subir un articulo');
		$datos = array();
		$datos['titulo']=$this->input->post('titulo');
		$datos['publi']=$this->input->post('articulo');
		$datos['fech_up']=time();
		$datos['tags']=$this->input->post('tags');

		$insert=$this->subir_modelo->insertar_datos($datos);
		
		if($insert){
			$titulo="El articulo se subio correctamente";
			$this->load->view('layout/head',$titulo);
			$this->load->view('home');
			$this->load->view('layout/footer');
		}
		else{
			$titulo='Hay problemas para subir el articulo';
			$this->load->view('layout/head',$titulo);
			$this->load->view('subir');
			$this->load->view('layout/footer');
		}
	}
}