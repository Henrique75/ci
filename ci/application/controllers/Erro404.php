<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Erro404 extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {        
        
        $dados['titulo'] = "SiGE";
        $dados['titulo_desc'] = "Página não encontrada !";
//        $dados['titulo_pagina'] = "Início";        
        $dados['pag_principal'] = "principal";
        
        $this->load->view('erro404',$dados);
//        $this->load->view('welcome_message');        
        $this->load->view('template/text_footer');        
        $this->load->view('template/footer');
    }

}
