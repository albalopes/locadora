<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ator_model extends CI_Model{
	public $id;
    public $nome;
    public $sobrenome;
    public function __construct(){
    	parent:: __construct();
    }
    public function listar()
    {
    	return $this->db->get("ator")->result();
    }
    public function inserir($dados)
    {
    	$this->db->insert("ator", $dados);
    }
}   
