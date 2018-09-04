<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ator extends CI_Controller {

	public function listar()
	{
		$this->load->model("Ator_model");
		$lista = $this->Ator_model->listar();
		$dados = array("atores" => $lista);
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('ator/listar', $dados);
		$this->load->view('template/rodape');
	}

	public function cadastrar()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('ator/cadastrar');
		$this->load->view('template/rodape');
	}
	
	public function salvar(){
		$dados = array(
			"nome"=> $this->input->post("nome"),
			"sobrenome"=> $this->input->post("sobrenome")
		);
		$this->load->model("Ator_model");
		$this->Ator_model->inserir($dados);
		redirect("ator/listar");
	}
}