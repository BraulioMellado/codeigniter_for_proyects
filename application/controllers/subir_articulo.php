<?php

class Subir_articulo extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('modelo_db');
	}

	public function index()
	{
		$titulo['titulo']=ucfirst('Subir un articulo');
		$this->load->view('layout/head',$titulo);
		$this->load->view('subir_articulo');
		$this->load->view('layout/footer');
	}
	public function guardar()
	{
		$titulo['titulo']=ucfirst('Error al Subir articulo');

		//capturamos los datos enviados mediante el metodo post
		//y los almacenamos en un array
		$datos = array();
		$datos['titulo']=$this->input->post('titulo');
		$datos['publi']=$this->input->post('articulo');
		$datos['fech_up']=time();
		$datos['tags']=$this->input->post('tags');

		//Ahora llamamos al metodo y la funcion que creamos y le enviamos los datos
		//a subir
		$insert=$this->modelo_db->subir_articulo($datos);
		
		//Si los datos se gurdaron correctamente nos direciona al controlador "ver"
		if($insert){
			http_redirect("");
		}
		//en caso contrario no direcciona a la vista error
		else{
			$this->load->view('layout/head',$titulo);
			$this->load->view('error');
			$this->load->view('layout/footer');
		}
	}
}