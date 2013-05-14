<?php

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->helper('form');
		$this->load->model('modelo_db');
	}

	public function index()
	{
		$titulo['titulo']=ucfirst('Registrar usuario');
		$this->load->view('layout/head',$titulo);
		$this->load->view('user');
		$this->load->view('layout/footer');
	}
	public function registrar_usuario()
	{
		$titulo['titulo']=ucfirst('No se pudo registrar el usuario');

		$usuario = array();
		$usuario['name']=$this->input->post('name');
		$usuario['mail']=$this->input->post('mail');
		$usuario['pwd']=$this->input->post('pwd');

		$insert=$this->modelo_db->registrar_usuario($usuario);
		
		if($insert){
			redirect(base_url(),'location');
		}
		//en caso contrario no direcciona a la vista error
		else{
			$this->load->view('layout/head',$titulo);
			$this->load->view('error');
			$this->load->view('layout/footer');
		}
	}
}