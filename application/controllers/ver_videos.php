<?php

class Ver_videos extends CI_Controller {
	public function index()
	{
		$titulo['titulo']=ucfirst('Ver los videos');
		$this->load->view('layout/head',$titulo);
		$this->load->view('videos');
		$this->load->view('layout/footer');
	}
}