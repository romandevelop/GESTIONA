<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author roman
 */
class LoginModel extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function validarUsuario($rut, $clave){
        $this->db->where("rut", $rut);
        $this->db->where("clave", $clave);
        return $this->db->get("usuario")->result();
    }
    
    
    
    
    
    
}
