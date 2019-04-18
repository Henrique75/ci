<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    public function index() {
        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Evento";
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";

        $this->load->view('evento/evento_novo', $dados);
//        $this->load->view('welcome_message');        
    }

    public function cadastrar_inicio() {
        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Evento";
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";

        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
        $dados['pag_logout'] = "login/logout";
        $dados['pag_novo'] = "cadastro/novo";
        $dados['pag_membro'] = "cadastro/membro";
        $dados['pag_voluntario'] = "cadastro/voluntario";
        $this->load->view('template/header', $dados);
        $this->load->view('template/nav');
        $this->load->view('template/aside');
        $this->load->view('pagina/cadastrar_inicio');
        $this->load->view('template/text_footer');
        $this->load->view('template/aside_config');
        $this->load->view('template/footer');
    }

}
