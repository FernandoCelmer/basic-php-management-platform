<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "BaseAdmin.php";

class Template extends BaseAdmin {

    public function index()
	{
       
        $this->load->view('bp-template/main_menu'); 
        $this->load->view('bp-template/header'); 
        $this->load->view('bp-template/footer'); 
          
        $this->load->view('bp-template/add_default_css');
        $this->load->view('bp-template/add_default_js');
        $this->load->view('bp-template/add_notification');*
        
    }
	
} 

