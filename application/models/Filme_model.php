<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curso_model
 *
 * @author 2813232
 */
class Filme_model extends CI_Model{
   public $id;
    public $titulo;
    public $descricao;
    public $anodelancamento;
    public $duracao;
    public $categoria;
    public function __construct(){
    	parent:: __construct();
    }
    public function listar()
    {
    	return $this->db->get("filme")->result();
    }
    public function inserir($dados)
    {
    	$this->db->insert("filme", $dados);
    }
    public function detalhar($id)
    {
        $this->db->where('id', $id);
    	return $this->db->get("filme")->row();

    }

}

   
