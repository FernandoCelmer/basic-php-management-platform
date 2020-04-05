<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class BaseAdmin extends CI_Controller {

    protected $usuarioMaster;
	
	function __construct(){
	    parent::__construct();
	    if(!isset($_SESSION['usuarioLogado'])){
	        redirect("/Conta");
	    }else{
	        if($_SESSION['usuarioLogado']->TIP_ADMIN){
				$usuario = $this->usuarioMaster = true;
				$tip = $_SESSION['usuarioLogado']->TIP_ADMIN;
				//echo $usuario; 
	        }else{
				$usuario = $this->usuarioMaster = false;
				$tip = $_SESSION['usuarioLogado']->TIP_ADMIN;
				//echo $usuario; 
			}
			    }
	   
	}
    
	public function get_item_level(){
		$tip = $_SESSION['usuarioLogado']->TIP_ADMIN;
		
		if ($tip==0){
			$item_none = "";
			$item_disabled = "";
			
		  }else{
			$item_none = "d-none"; 
			$item_disabled = "disabled";
		  }
			$item_level['item_none'] = $item_none;
			$item_level['item_disabled'] = $item_disabled;
			return $item_level;
	}

	public function get_item_status(){
		$tip = $_SESSION['usuarioLogado']->TIP_STATUS;
		
		if ($tip==0){
			$item_none = "d-none"; 
			$item_disabled = "disabled";
			
		  }else{
			$item_none = "";
			$item_disabled = "";
		  }
			$item_status['item_none'] = $item_none;
			$item_status['item_disabled'] = $item_disabled;
			return $item_status;
	}

	public function get_level(){
		$tip = $_SESSION['usuarioLogado']->TIP_ADMIN;
		if ($tip==0){ //TIP=1 - ADMINISTRADOR | TIP=0 - PADRÃO 
		}else
		redirect("/Admin");
	}

	public function get_status(){
		$status = $_SESSION['usuarioLogado']->TIP_STATUS;
		if ($status==1){ //STATUS=1 - ATIVADO | STATUS=0 DESATIVADO 
		}else
		redirect("/Admin");	 
	}
}