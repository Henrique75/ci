<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function index() {
        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Evento";
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";

        $this->load->view('evento/evento_novo', $dados);
//        $this->load->view('welcome_message');        
    }

    public function evento_novo() {
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
        $this->load->view('evento/evento_novo');
        $this->load->view('template/text_footer');
        $this->load->view('template/aside_config');
        $this->load->view('template/footer');
    }


    public function salvar_evento() {
        $this->load->model('Tb_evento_model');
        $eve_nome = $_POST["nome_evento"];
        $eve_descricao = $_POST["descricao_evento"];
        $eve_data_inicio = $_POST["data_inicio"];
        $eve_data_fim = $_POST["data_termino"];
        $eve_aberto = $_POST["evento_aberto"];
        #$eve_imagem = $_FILES['img_evento'];

        $this->Tb_evento_model->eve_nome = $eve_nome;
        $this->Tb_evento_model->eve_descricao = $eve_descricao;
        #$this->Tb_evento_model->eve_imagem = $eve_imagem;
        $this->Tb_evento_model->eve_data_inicio = $eve_data_inicio;
        $this->Tb_evento_model->eve_data_fim = $eve_data_fim;
        $this->Tb_evento_model->eve_aberto = $eve_aberto;
        $this->Tb_evento_model->inserir_evento();
        redirect('evento/evento_listar');
    }

    public function atualizar_evento() {
        $this->load->model('Tb_evento_model');
        $this->Tb_evento_model->eve_id = $_POST["ident_id"];
        $this->Tb_evento_model->eve_nome = $_POST["nome_evento"];
        $this->Tb_evento_model->atualizar_evento();
        redirect('evento/evento_listar');
    }

    public function evento_excluir() {
        $this->load->model(Tb_evento_model);
        $eve_id = $this->uri->segment(3);
        $this->Tb_evento_model->delete_evento($eve_id);
        redirect('evento/evento_listar');
    }

    public function evento_listar() {
        $this->load->model('Tb_evento_model');
        $dados['eventos'] = $this->Tb_evento_model->recuperar_eventos();

        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Evento";
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
//        $this->load->view('welcome_message');        
        #links de páginas
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
        $dados['pag_logout'] = "login/logout";
        $dados['pag_novo'] = "cadastro/novo";
        $dados['pag_membro'] = "cadastro/membro";
        $dados['pag_voluntario'] = "cadastro/voluntario";

        $this->load->view('template/header', $dados);
        $this->load->view('template/nav');
        $this->load->view('template/aside');
        $this->load->view('evento/evento_listar');
        $this->load->view('template/text_footer');
        $this->load->view('template/aside_config');
        $this->load->view('template/footer');
    }

    public function evento_editar() {
        $this->load->model('Tb_evento_model');
        $eve_id = $this->uri->segment(3);
        $dados['eventos'] = $this->Tb_evento_model->recuperar_evento($eve_id);

        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Evento";
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
//        $this->load->view('welcome_message');        
        #links de páginas
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
        $dados['pag_logout'] = "login/logout";
        $dados['pag_novo'] = "cadastro/novo";
        $dados['pag_membro'] = "cadastro/membro";
        $dados['pag_voluntario'] = "cadastro/voluntario";

        $this->load->view('template/header', $dados);
        $this->load->view('template/nav');
        $this->load->view('template/aside');
        $this->load->view('evento/evento_editar');
        $this->load->view('template/text_footer');
        $this->load->view('template/aside_config');
        $this->load->view('template/footer');
    }

    public function evento_listar2() {
        $this->load->model('Tb_evento_model');
        $dados['eventos'] = $this->Tb_evento_model->recuperar_eventos();

        $dados['titulo'] = "SiGE";
        $dados['titulo_pagina'] = "Evento";
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
//        $this->load->view('welcome_message');        
        #links de páginas
        $dados['pag_login'] = "login";
        $dados['pag_principal'] = "principal";
        $dados['pag_logout'] = "login/logout";
        $dados['pag_novo'] = "cadastro/novo";
        $dados['pag_membro'] = "cadastro/membro";
        $dados['pag_voluntario'] = "cadastro/voluntario";

        $this->load->view('template/header', $dados);
        $this->load->view('template/nav');
        $this->load->view('template/aside');
        $this->load->view('evento/evento_listar2'); //conteudo
        $this->load->view('template/text_footer');
        $this->load->view('template/aside_config');
        $this->load->view('template/footer');
    }

}
