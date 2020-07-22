<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "BaseAdmin.php";

class Admin extends BaseAdmin {

    function __construct() {
        
        parent::__construct();
        
        if(!isset($_SESSION['usuarioLogado'])){
            
            redirect("/Account"); 
        }
    }
	public function index()
	{
		$dados['item_level'] = $this->get_item_level();
		$dados['item_status'] = $this->get_item_status();
        $this->load->view('of_dashboard', $dados);
    }

    public function dev()
	{
        $dados['item_level'] = $this->get_item_level();
        $dados['item_status'] = $this->get_item_status();
        $this->load->view('of_dev', $dados);
    }
    
    public function logout(){
        $this->session->unset_userdata('usuarioLogado');
        $this->session->set_flashdata("sucesso","Deslogado com Sucesso!");
        redirect("/Account");

    }

}
