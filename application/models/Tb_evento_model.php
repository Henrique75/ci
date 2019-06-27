<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evento_model
 *
 * @author HB
 */
class Tb_evento_model extends CI_Model {

    public $eve_id;
    public $eve_nome;
    public $eve_imagem;
    public $eve_descricao;
    public $eve_data_inicio;
    public $eve_data_fim;
    #public $eve_aberto;

    public function __construct() {
        parent::__construct();
    }

    public function inserir_evento() {
        $dados = array("eve_nome" => $this->eve_nome,
            "eve_descricao" => $this->eve_descricao,
            #"eve_imagem" => $this->eve_imagem,
            "eve_data_inicio" => $this->eve_data_inicio,
            "eve_data_fim" => $this->eve_data_fim,
            "eve_aberto" => $this->eve_aberto
        );
        return $this->db->insert('tb_evento', $dados);
    }

    public function atualizar_evento() {
        $this->db->set('eve_nome', $this->eve_nome);
        $this->db->set('eve_descricao', $this->eve_descricao);
        $this->db->set('eve_data_inicio', $this->eve_data_inicio);
        $this->db->set('eve_data_fim', $this->eve_data_fim);
        $this->db->set('eve_aberto', $this->eve_aberto);
        $this->db->where('eve_id', $this->eve_id);
        $this->db->update('tb_evento');
    }

    public function recuperar_eventos() {
        $query = $this->db->get('tb_evento');
        return $query->result();
    }

    public function recuperar_evento($eve_id) {
        $this->db->where('eve_id', $eve_id);
        $query = $this->db->get('tb_evento');
        return $query->row();
    }

    public function delete_evento($eve_id) {
        $this->db->where('eve_id', $eve_id);
        $this->db->delete('tb_evento');
    }

}
