<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceUser extends CI_Model { 

    private $prefixoTabela_Usuario = "BASE_CUSTOMER";

    public function RetornarUsuarioCodigo($id){ 
        $this->db->where("BASE_CUSTOMER", $id);
        return $this->db->get($this->prefixoTabela_Usuario)->row();
    }

    public function RetornarUsuarioEmailSenha($email, $senha){
        $this->db->where("DES_EMAIL", $email);
        $this->db->where("BASE_PASSWORD", md5($senha));
        return $this->db->get("BASE_CUSTOMER")->row();
    }

}