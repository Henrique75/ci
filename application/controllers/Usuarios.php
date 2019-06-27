<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
   
    public function novo() {
        $usuario = array(
            "usu_nome" => $this->input->post("nome"),
            "usu_email" => $this->input->post("email"),
            "usu_senha" => md5($this->input->post("senha"))            
        );
        $this->load->model('Tb_usuarios_model');
        $this->Tb_usuarios_model->salva($usuario);
        $this->load->view('cadastro/usuarios/novo');
        
        
        #$dados['titulo'] = "SiGE";
        #$dados['titulo_pagina'] = "Cadastro";        
        #$dados['pag_login'] = "login";
        #$dados['pag_principal'] = "principal";
        
        #$this->load->view('cadastro/cadastro', $dados);
//        $this->load->view('welcome_message');        
    }

}
