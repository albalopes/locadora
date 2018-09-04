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
class Usuario_model extends CI_Model{
    public $id, $nome, $login, $senha, $gerente, $email, $foto;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function recuperarPorLoginESenha($login, $senha){
        $this->db->where('login', $login);
        $this->db->where('senha', $senha);
        $query = $this->db->get('usuario');
        return $query->row();
    }

}   
