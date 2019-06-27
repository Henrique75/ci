<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Login";
        $dados['pag_cadastro'] = "cadastro/";
        $dados['pag_principal'] = "principal";

        $this->load->view('login/login', $dados);
//        $this->load->view('welcome_message');        
    }

    public function autenticar() {
//        $dados['titulo'] = "SiGE";
//        $dados['titulo_pagina'] = "Login";
//        $dados['pag_cadastro'] = "cadastro/";
//        $dados['pag_principal'] = "principal";

        $this->load->model('Tb_usuarios_model');
        $usu_email = $this->input->post("email");
        $usu_senha = md5($this->input->post("senha"));                         
        $usuario = $this->Tb_usuarios_model->logarUsuarios($usu_email, $usu_senha);
        
        if($usuario){
            $this->session->set_userdata("usuario_logado",$usuario);
            $this->session->set_flashdata("success", "Logado com sucesso!");
            redirect(uri_string()); 
        }else{
            $this->session->set_flashdata("danger", "Usuário ou senha são inválidos!");
        }
            redirect(uri_string('login')); 
     
    }

}
