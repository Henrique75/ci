<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

    public function index() {
        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Painel";
        #links de páginas
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
        $dados['pag_logout'] = "login/logout";
        $dados['pag_novo'] = "cadastro/novo";
        $dados['pag_membro'] = "cadastro/membro";
        $dados['pag_voluntario'] = "cadastro/voluntario";

        ##Variáveis do banco
        ###Views
        //$this->load->view('area_painel/painel', $dados);
//        $this->load->view('welcome_message');        
        $this->load->view('template/header', $dados);
        $this->load->view('template/nav');
        $this->load->view('template/aside');
        $this->load->view('template/content');
        $this->load->view('template/text_footer');
        $this->load->view('template/aside_config');
        $this->load->view('template/footer');
    }

}
