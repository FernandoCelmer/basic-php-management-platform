<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "BaseAdmin.php";

class Template extends BaseAdmin {

    public function index()
	{
       
        $this->load->view('of-template/main_menu'); 
        $this->load->view('of-template/header'); 
        $this->load->view('of-template/footer'); 
          
        $this->load->view('of-template/add_default_css');
        $this->load->view('of-template/add_default_js');
        $this->load->view('of-template/add_notification');*
        
    }
	
} 

