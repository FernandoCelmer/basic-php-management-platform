<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico_Usuario extends CI_Model { 

    private $prefixoTabela_Usuario = "USUARIO";

    public function RetornarUsuarioCodigo($id){ 
        $this->db->where("COD_USUARIO", $id);
        return $this->db->get($this->prefixoTabela_Usuario)->row();
    }

    public function RetornarUsuarioEmailSenha($email, $senha){
        $this->db->where("DES_EMAIL", $email);
        $this->db->where("DES_SENHA", md5($senha));
        return $this->db->get("USUARIO")->row();
    }

}