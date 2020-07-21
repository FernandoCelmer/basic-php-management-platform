<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceLog extends CI_Model{

    public function SaveLog($entity){

        $this->db->insert('BASE_LOG', $entity);
    }
    
}