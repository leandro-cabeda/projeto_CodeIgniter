<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$this->load->view('home'); // chama o arquivo com nome entre parenteses que está la na views e apresenta
    // na tela pro usuário

		$this->load->view('cabecalho');
		$this->load->view('body');
		$this->load->view('rodape');

	}



}
