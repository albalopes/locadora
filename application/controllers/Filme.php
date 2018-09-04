<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filme extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/**Exibe a view de boas vindas*/
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('welcome');
		$this->load->view('template/rodape');
		$this->output->delete_cache();
	}

	/**Exibe a view para listar filmes*/
	public function listar()
	{	
		$this->load->model("Filme_model");
		$lista = $this->Filme_model->listar();
		$dados = array("filmes" => $lista);
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('filme/listar', $dados);
		$this->load->view('template/rodape');
	}

	/**Exibe a view de cadastro*/
	public function cadastrar()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('filme/cadastrar');
		$this->load->view('template/rodape');
	}
	
	public function salvar(){
		$dados = array(
			"titulo"=> $this->input->post("titulo"),
			"descricao"=> $this->input->post("descricao"),
			"anodelancamento"=> $this->input->post("anodelancamento"),
			"duracao"=> $this->input->post("duracao"),
			"categoria"=> $this->input->post("categoria")
		);
		$this->load->model("Filme_model");
		$this->Filme_model->inserir($dados);
		redirect("filme/listar");
	}

	public function detalhar($id){
		$this->load->model("Filme_model");
		$dados["filme"] = $this->Filme_model->detalhar($id);
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('filme/detalhe', $dados);
		$this->load->view('template/rodape');
	}
}
