<?php

class Tb_usuarios_model extends CI_Model {

    public function salva($usuario) {
        $this->db->insert("tb_usuario", $usuario);
    }

    public function logarUsuarios($usu_email, $usu_senha) {
        $this->db->where("usu_email", $usu_email);
        $this->db->where("usu_senha", $usu_senha);
        $usuario = $this->db->get("Tb_usuario")->row_array();
        return $usuario;
        
    }

}
