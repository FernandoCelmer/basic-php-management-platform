<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index(){
		
		$this->load->view('of_login');
	}

	public function Logar(){
				 
	    try{
	        
	        $email = $this->input->post("email");
			$senha = $this->input->post("senha");
	        
	        $this->load->model("ServiceUser");
	        
			$usuario = $this->ServiceUser->RetornarUsuarioEmailSenha($email, $senha);
	        
	        if(empty($usuario)){
	            
	            throw new Exception("Usuário não encontrado");
	            
	        }else{
	            $arr = array('usuarioLogado' => $usuario);
	            $this->session->set_userdata($arr);
	            
	            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode(array(
                            'sucesso' => true,
                            'mensagem' => "Usuário Logado com sucesso!"
                    )));
	        }
	        
	        
	        
	    }catch(Exception $e){
	        
	        return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                        'sucesso' => false,
                        'mensagem' => $e->getMessage()
                )));
	    }
	    
	}
	

}