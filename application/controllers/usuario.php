<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		//$this->load->view('home'); // chama o arquivo com nome entre parenteses que está la na views e apresenta
    // na tela pro usuário
		$this->db->select('*');
		$dados['codeigniter']=$this->db->get('pessoa')->result();
		$this->load->view('cabecalho');
		$this->load->view('body');
		$this->load->view('lista_usuario',$dados);
		$this->load->view('rodape');

	}

	public function cadastro()
	{

		$this->load->view('cabecalho');
		$this->load->view('body');
		$this->load->view('cadastro_usuario');
		$this->load->view('rodape');

	}

	public function cadastrar()
	{
		$data['nome']=$this->input->post('nome');
		$data['email']=$this->input->post('email');
		$data['senha']=md5($this->input->post('senha'));

		if($this->db->insert('pessoa',$data))
		{
			$this->load->view('cabecalho');
			$this->load->view('body');
			$this->load->view('success');
			$this->load->view('rodape');

		}
		else
		{
			$this->load->view('cabecalho');
			$this->load->view('body');
			$this->load->view('error');
			$this->load->view('rodape');
		}

	}

	public function excluir($id=null)
	{
		$this->db->where('id',$id);
		if($this->db->delete('pessoa'))
		{
			$this->load->view('cabecalho');
			$this->load->view('body');
			$this->load->view('success');
			$this->load->view('rodape');

		}
		else
		{
			$this->load->view('cabecalho');
			$this->load->view('body');
			$this->load->view('error');
			$this->load->view('rodape');
		}
	}

	public function editar($id=null)
	{
		$this->db->where('id',$id);
		$data['codeigniter']=$this->db->get('pessoa')->result();
		$this->load->view('cabecalho');
		$this->load->view('body');
		$this->load->view('editar_usuario',$data);
		$this->load->view('rodape');

	}

	public function atualizar()
	{
		$id=$this->input->post('id');
		$data['nome']=$this->input->post('nome');
		$data['email']=$this->input->post('email');
		$data['senha']=md5($this->input->post('senha'));

		$this->db->where('id',$id);
		if($this->db->update('pessoa',$data))
		{
			$this->load->view('cabecalho');
			$this->load->view('body');
			$this->load->view('success');
			$this->load->view('rodape');

		}
		else
		{
			$this->load->view('cabecalho');
			$this->load->view('body');
			$this->load->view('error');
			$this->load->view('rodape');
		}
	}



}
