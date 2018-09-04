<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
    }
    
    public function autenticar(){
        //$login = $_POST["usuario"];
        $login = $this->input->post("usuario");
        
        //$senha = $_POST["senha"];
        $senha = $this->input->post("senha");

        /* Escreva aqui seu código de autenticação e criação da seção. 
         * Você pode fazer uso das funções disponíveis no arquivo model/Usuario_model.php 
         * 
         */
    }
    
    public function login(){
        $this->load->view('usuario/login');
    }
   
    public function logoff(){
       /* Escreva o código da sua função de logoff */
    }
    
   public function restricao(){
       /* Escreva o código da sua função de acesso negado */
    }
    
}
